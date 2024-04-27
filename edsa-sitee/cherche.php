<?php 
	require("include/connect.php") ; 
      $connexion=mysqli_connect("p:".SERVEUR,NOM,PASSE,BD);
      if(!$connexion)
      {
        echo "Desolé, connexion à ".SERVEUR." ou à la ".BD." impossible :".mysqli_error()."\n";
        exit;
      }
      require("include/entete.php") ;
?>

 <div class="wrapper row2">
  <div id="container" class="clear">
    <!-- main content -->
    <div id="part">
      <section class="clear">
        <!-- article 2 -->
        <article class="four_quarter ">
          
          <figure>
            <?php

            	$search=$_POST["search"];
            	$requete1="SELECT * FROM musique WHERE titre like '%$search%'";
            	$resultat1=mysqli_query($connexion,$requete1);

            	$cpt=0;
            	while(($ligne=mysqli_fetch_array($resultat1))&&($cpt<5)) 
            	{
            		$idAl=$ligne["idAl"];
            		$titre=$ligne["titre"];
                $mp3=$ligne["mp3"];
            		$requete2="SELECT * FROM album WHERE idAl='$idAl'";
            		$resultat2=mysqli_query($connexion,$requete2);
            		while(($ligne2=mysqli_fetch_array($resultat2)))
            		{
            			$image=$ligne2["image"];
            			$idA=$ligne2["idA"];
            			$titreAlbum=$ligne2["titre"];
            			$requete3="SELECT * FROM artiste WHERE idA='$idA'";
	            		$resultat3=mysqli_query($connexion,$requete3);
	            		while(($ligne3=mysqli_fetch_array($resultat3)))
	            		{	
	            			$nom=$ligne3["nom"];
		            		echo" <img src=\"$image\" width=\"100\" height=\"100\" alt=\"\">
									<p> $titre  <a href=\"album.php?id=$idAl\">$titreAlbum</a> - <a href=\"artiste.php?id=$idA\">$nom</a> </p>" ;


                    echo"
                    <audio controls>
                      <source src=\"$mp3\" type=\"audio/mpeg\">
                    </audio>";
            			}
            		}
            	$cpt=$cpt+1;
            	}

           	?>
          
            
              <!-- article 1 -->
        <blocks>
        <article class="four_quarter lastbox">
          <h2>Musiques</h2> 
        </article>
      </blocks>
        </figure>
      </article>
      </section>
    </div>
</div>
</div>

 <div class="wrapper row2">
  <div id="container" class="clear">
    <!-- main content -->
    <div id="part">
      <section class="clear">
        <!-- article 2 -->
        <article class="four_quarter ">
          
          <figure>
            
           <?php

            	$search=$_POST["search"];
            	$requete1="SELECT * FROM album WHERE titre like '%$search%'";
            	
            	$resultat1=mysqli_query($connexion,$requete1);

            	$cpt=0;
            	while(($ligne=mysqli_fetch_array($resultat1))&&($cpt<5)) 
            	{
            		$idA=$ligne["idA"];
            		$titre=$ligne["titre"];
            		$image=$ligne["image"];
            		$idAl=$ligne["idAl"];
            		$requete2="SELECT * FROM artiste WHERE idA='$idA'";
            		$resultat2=mysqli_query($connexion,$requete2);
            		while(($ligne2=mysqli_fetch_array($resultat2)))
            		{
            			$nom=$ligne2["nom"];

            		echo"<img src=\"$image\" width=\"100\" height =\"100\" alt=\"\"></a>
            	<p><a href=\"album.php?id=$idAl\">$titre </a> \[  <a href=\"artiste.php?id=$idA\">$nom</a> \]</p>";
            		}
            		
            	$cpt=$cpt+1;
            	}

           	?>
            
          

              <!-- article 1 -->
        <blocks>
        <article class="four_quarter lastbox">
          <h2>Albums</h2> 
        </article>
      </blocks>
        </figure>
      

      </article>
      </section>
    </div>
</div>
</div>








 <div class="wrapper row2">
  <div id="container" class="clear">
    <!-- main content -->
    <div id="part">
      <section class="clear">
        <!-- article 2 -->
        <article class="four_quarter ">
          
          <figure>
            
           <?php

            	$search=$_POST["search"];
            	$requete1="SELECT * FROM artiste WHERE nom like '%$search%'";
            	$resultat1=mysqli_query($connexion,$requete1);
            	$cpt=0;
            	while(($ligne=mysqli_fetch_array($resultat1))&&($cpt<5)) 
            	{
            		$nom=$ligne["nom"];
            		$image=$ligne["image"];


            		echo"<img src=\"$image\" width=\"100\" height =\"100\" alt=\"\"></a>
            	<p> <a href=\"artiste.php?id=$idA\">$nom</a></p>";

            	$cpt=$cpt+1;
            	}

           	?>
            
          

              <!-- article 1 -->
        <blocks>
        <article class="four_quarter lastbox">
          <h2>Artistes</h2> 
        </article>
      </blocks>
        </figure>
      

      </article>
      </section>
    </div>
</div>
<?php require("include/pied.php"); ?>