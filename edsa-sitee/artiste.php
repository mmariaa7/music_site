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
        		$idA=$_GET["id"];
        		$requete="SELECT * FROM artiste WHERE idA=$idA";
        		
        		$resultat=mysqli_query($connexion,$requete);
        	
        		while($ligne=mysqli_fetch_array($resultat))
        		{
        			$image=$ligne["image"];
        			$nom=$ligne["nom"];
					echo "<figure><img src=\"$image\" alt=\"\">
		        			<figcaption>
		        			<h2>$nom</h2>
		          			</figcaption>
						    </figure>
						    </section>";
     			
        			$requete2="SELECT * FROM album WHERE idA=$idA";

        			$resultat2=mysqli_query($connexion,$requete2);
        			while($ligne2=mysqli_fetch_array($resultat2))
        			{
        				$titre=$ligne2["titre"];
        				$annee=$ligne2["annee"];
        				$imageAlbum=$ligne2["image"];
        				$idAl=$ligne2["idAl"];
        				echo "<img src=\"$imageAlbum\" width=\"100\" height=\"100\" alt=\"\">
									<p> $titre $annee </p> ";
						$requete3="SELECT * FROM musique WHERE idAl=$idAl";
				   		$resultat3=mysqli_query($connexion,$requete3);

				    	while($ligne3=mysqli_fetch_array($resultat3))
				    	{
				    		$titreMusique=$ligne3["titre"];
				    		$mp3=$ligne3["mp3"];
				    		echo "<img src=\"$imageAlbum\" width=\"100\" height=\"100\" alt=\"\">
									<p> $titreMusique </p> ";
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
