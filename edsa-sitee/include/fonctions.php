<?php
  function afficheUtilisateur($pseudo,$connexion){
          $requete="SELECT * from utilisateur where pseudo='$pseudo'";
          $result=mysqli_query($connexion,$requete);
          while ($utilisateur=mysqli_fetch_array($result)) {
            echo "Bienvenue " .$utilisateur["pseudo"]."</br>";
          
          
          
          echo "</h2>";
          echo "<img class=\"imgl\" src=\"$utilisateur[image]\" width=\"130\" height=\"130\" alt=\"\">
          <p>Ravis de vous revoir!<br>";

          echo "Votre abonnement prend fin le " .$utilisateur["datefabonnement"]."</br>";
          }
          
          
        echo"N'hésitez pas à aller consulter nos offres d'abonnement pour prolonger votre expérience!</br>
        <a href=\"#\">Voir votre profil»</a> </p>         
      </section>";
  }

  function afficheCouer($pseudo,$connexion){
      $requete="SELECT * FROM musique WHERE idM IN (SELECT idM FROM aimerm WHERE idU IN(SELECT idU FROM utilisateur WHERE pseudo='$pseudo'))";
      $result=mysqli_query($connexion,$requete);
      $cmpt=1;
      while ($musique=mysqli_fetch_array($result)) {
          $titre=$musique["titre"];
          $idAl=$musique["idAl"];
          $idM=$musique["idM"];
          $requete2="SELECT * from artiste where idA IN(SELECT idA from album where idAl IN(SELECT idAl FROM musique WHERE idM=$musique[idM]))";
          $result2=mysqli_query($connexion,$requete2);
          $artiste=mysqli_fetch_array($result2);
            $nom=$artiste["nom"];
            $idA=$artiste["idA"];
          $requete3="select * from album where idAl IN (SELECT idAl from musique WHERE titre='$titre')";
          $result3=mysqli_query($connexion,$requete3);
          $album=mysqli_fetch_array($result3);
          $titreAl=$album["titre"];
          $imageAl=$album["image"];
          
          if($cmpt==1)
            {
              echo "<li class=\"first \"><a href=\"#\"><img src=\"$imageAl\" width=\"130\" height=\"130\" alt=\"\"></a>
                 <p>
                  
                 <a href=\"musique.php?id=$idAl\">»$titre </a><br>
                  <a href=\"artiste.php?id=$idA\">»$nom</a><br>
                  <a href=\"musique.php?id=$idM\">»$titreAl</a><br>
                
              </p>";
            }

            
          
              elseif($cmpt==4)
              {
                echo"<li class=\"last\" ><a href=\"#\"><img src=\"$imageAl\" width=\"130\" height=\"130\" alt=\"\"></a>
                
                 <p>
                  
                  <a href=\"musique.php?id=$idAl\">»$titre </a><br>
                  <a href=\"artiste.php?id=$idA\">»$nom</a><br>
                  <a href=\"musique.php?id=$idM\">»$titreAl</a><br>
                
              </p>
              </li>";
              } 
              elseif($cmpt>4){
                break;
              }
              else{
                echo"<li ><a href=\"#\"><img src=\"$imageAl\" width=\"130\" height=\"130\" alt=\"\"></a>
                
                 <p>
                  
                  <a href=\"musique.php?id=$idAl\">»$titre </a><br>
                  <a href=\"artiste.php?id=$idA\">»$nom</a><br>
                  <a href=\"musique.php?id=$idM\">»$titreAl</a><br>
                
              </p>
      
              </li>";
              }

              $cmpt+=1;
            }
   
  }

    function afficheArtiste($pseudo,$connexion){
      $requete="SELECT * FROM `aimera` WHERE idU IN (SELECT idU FROM utilisateur where pseudo='$pseudo')";
      $result=mysqli_query($connexion,$requete);
      $cmpt=0;
      while ($aime=mysqli_fetch_array($result)) {

            $requete2="SELECT * from artiste WHERE idA=$aime[idA]";
            $result2=mysqli_query($connexion,$requete2);
            $artiste=mysqli_fetch_array($result2);
            $nom=$artiste["nom"];
            $idA=$artiste["idA"];
            $requete3="SELECT * from genre where idG IN (SELECT idG FROM etregenre WHERE idA=$aime[idA])";
            $result3=mysqli_query($connexion,$requete3);
            while($genre=mysqli_fetch_array($result3)){
               $genreM=$genre["genre"];}
                        
            if($cmpt==0)
            {
            echo"<li class=\"first\"><a href=\"#\"><img src=\"$artiste[image]\" width=\"130\" height=\"130\" alt=\"\"></a>
                
                  <p><a href=\"artiste.php?id=$idA\">»$nom</a><br>
                  $genreM<br>
                  </p>
  
              </li>";
            }
            elseif($cmpt>4){
              break;
            }
            elseif($cmpt==3){
              echo"<li class=\"last\"><a href=\"#\"><img src=\"$artiste[image]\" width=\"130\" height=\"130\" alt=\"\"></a>
                
                  <p><a href=\"artiste.php?id=$idA\">»$nom</a><br>
                  $genreM<br>
                  </p>
  
              </li>";
            }     
            
            else{
              echo"<li ><a href=\"#\"><img src=\"$artiste[image]\" width=\"130\" height=\"130\" alt=\"\"></a>
                
                  <p><a href=\"artiste.php?id=$idA\">»$nom</a><br>
                  $genreM<br>
                  </p>
  
              </li>";
            }
            $cmpt+=1;
      }
      if($cmpt<4){
        echo"<<li class=\"last\"><a href=\"#\"><img src=\"images/artists/default.jpg\" width=\"130\" height=\"130\" alt=\"\"></a>
                
                  <p>Découvrez d'autres artistes<br></p>
                </li>";
      }
    }



    
  ?>







