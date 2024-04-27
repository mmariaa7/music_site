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
 <div class="wrapper row2" >
  <div id="container" class="clear">
    <!-- Slider -->
    <section id="slider" class="clear">
      
        	<?php
        		$idM=$_GET["id"];
        		$requete="SELECT * FROM musique WHERE idM=$idM";
        		
        		$resultat=mysqli_query($connexion,$requete);
        	
        		while($ligne=mysqli_fetch_array($resultat))
        		{
        			
        			$titre=$ligne["titre"];
        			$idAl=$ligne["idAl"];
        			$mp3=$ligne["mp3"];
        			$requete2="SELECT * FROM album WHERE idAl=$idAl";

        			$resultat2=mysqli_query($connexion,$requete2);
        			while($ligne2=mysqli_fetch_array($resultat2))
        			{
        				$image=$ligne2["image"];
        				$idA=$ligne2["idA"];
        				$titreAlbum=$ligne2["titre"];
        				$requete3="SELECT * FROM artiste WHERE idA=$idA";

	        			$resultat3=mysqli_query($connexion,$requete3);
	        			while($ligne3=mysqli_fetch_array($resultat3))
	        			{
	        				$nom=$ligne3["nom"];
									echo "<figure><img src=\"$image\" alt=\"\">
		        			<figcaption>
		        			<h2>$titre</h2>
		        			<p><a href=\"artiste.php?id=$idA\">$nom</a> - <a href=\"album.php?id=$idAl\">$titreAlbum</a> </p>
		          			</figcaption>
						    </figure>
						    </section>";
								echo"
                    <audio controls>
                      <source src=\"$mp3\" type=\"audio/mpeg\">
                    </audio>";
            			
				    	}

        			}
        			
				}

          
          ?>
      </div>
     </div>
      
<?php require("include/pied.php"); ?>
