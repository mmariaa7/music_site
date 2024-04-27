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
        		$idAl=$_GET["id"];
        		$requete="SELECT * FROM album WHERE idAl=$idAl";
        		$resultat=mysqli_query($connexion,$requete);
        		while($ligne=mysqli_fetch_array($resultat))
        		{
        			$image=$ligne["image"];
        			$titre=$ligne["titre"];
        			$annee=$ligne["annee"];
        			$idA=$ligne["idA"];
        			$requete2="SELECT * FROM artiste WHERE idA=$idA";
        			$resultat2=mysqli_query($connexion,$requete2);
        			while($ligne2=mysqli_fetch_array($resultat2))
        			{
        				$nom=$ligne2["nom"];
        			}
        			echo "<figure><img src=\"$image\" alt=\"\">
        			<figcaption>
        			<h2>$titre</h2>
          			<p>Année : $annee</br>
          			Artiste : <a href=\"artiste.php?id=$idA</p>\">$nom</a>
          			</figcaption>
				    </figure>
				    </section>";
				}
				    $requete2="SELECT * FROM musique WHERE idAl=$idAl";
				    $resultat2=mysqli_query($connexion,$requete2);
				    while($ligne2=mysqli_fetch_array($resultat2))
				    {
				    	$titreMusique=$ligne2["titre"];
				    	$mp3=$ligne2["mp3"];
				    	echo "<img src=\"$image\" width=\"100\" height=\"100\" alt=\"\">
									<p> $titreMusique </p> ";
							echo"
                  <audio controls>
                    <source src=\"$mp3\" type=\"audio/mpeg\">
                  </audio>";
            }
        			

          
          ?>
      
<?php require("include/pied.php"); ?>