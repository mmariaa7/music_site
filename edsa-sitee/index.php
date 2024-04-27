<?php require("include/entete.php"); ?>
<?php
      require("include/connect.php");
      $connexion=mysqli_connect("p:".SERVEUR,NOM,PASSE,BD);
      if(!$connexion)
      {
        echo "Desolé, connexion à ".SERVEUR." ou à la ".BD." impossible :".mysqli_error()."\n";
        exit;
      }
?>


<!-- content -->
<div class="wrapper row2" >
  <div id="container" class="clear">
    <!-- Slider -->
    <section id="slider" class="clear">
      <figure><img src="images/site/music.jpg" alt="">
        <figcaption>
          <h2>Du son ... à votre image</h2>
          <p>Des milliers d'artistes, d'albums et de chansons, en illimité, sans pub.</p>
          <footer class="more"><a href="#">En savoir plus &raquo;</a></footer>
        </figcaption>
      </figure>
    </section>
    <!-- main content -->
    <div id="part"  >
      <section class="clear">
        <!-- article 1 -->
        <article class="one_quarter">
          <blocks>
            <figure>
          <h2>Vos coups de coeur</h2>
          <p >Les dernières musiques que vous avez aimées</p>
        </figure>
      </blocks>
        </article>
        <!-- article 2 -->
        
        <article class="four_quarter lastbox" >
          
          <figure >
            <blocks>
            <ul class="clear">
              <?php
              require("include/fonctions.php");
              
              $pseudo=$_SESSION['login'];
              
              afficheCouer($pseudo,$connexion);
              ?>

          </ul>
            </blocks>
            <figcaption><a href="#">En voir plus &raquo;</a></figcaption>

          </figure>
          
        </article>

      </section>
    </div>
   

    
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->

  <div class="wrapper row2">
  <div id="container" class="clear">
    <!-- main content -->
    <div id="part">
      <section class="clear">
        <!-- article 2 -->
        <article class="four_quarter ">
          
          <figure>
            
            <ul class="clear">
              <?php
              $pseudo=$_SESSION['login'];
              afficheArtiste($pseudo,$connexion)
              ?>
            </ul>
          

              <!-- article 1 -->
        <blocks>
        <article class="one_quarter lastbox">
          <h2>Vos artistes préférés</h2>
          <p>A écouter en boucle, quand vous voulez, où vous voulez</p>  
        </article>
      </blocks>
        <figcaption><a href="#">En voir plus &raquo;</a></figcaption>  
        </figure>
      

      </article>
      </section>
    </div>
   
        
    <!-- ########################################################################################## -->
    <div id="part">
      <section class="clear">
        <!-- article 1 -->
        <article class="one_quarter">
          <h2>Les coups de coeur de la semaine</h2>
          <p>Découvrez les titres les plus écoutés du moment</p>
        </article>
        <!-- article 2 -->
        <article class="four_quarter lastbox">
          <blocks>
          <figure>
            <ul class="clear">
              
              <li class="first"><a href="#"><img src="images/albums/bowie4.jpg" width="130" height="130" alt=""></a>
                
                  <p><a href="#">»Starman</a><br>
                  <a href="#">»David Bowie</a><br>
                  <a href="#">»The Rise and Fall ofZiggy Stardust and the<br>Spiders from Mars</a>
                </p>
              </li>
            
              <li><a href="#"><img src="images/albums/eminem1.jpeg" width="130" height="130" alt=""></a>
                <p><a href="#">»Dr. West(skit)</a><br>
                  <a href="#">»Eminem</a><br>
                  <a href="#">»Relapse 2009</a>
                </p>
              </li>
              <li><a href="#"><img src="images/albums/rs4.jpg" width="130" height="130" alt=""></a>
                <p><a href="#">»(I Can't Get No) Satisfaction</a><br>
                  <a href="#">»The Rolling Stones</a><br>
                  <a href="#">»Big hits</a>
                </p>
              </li>
              <li class="last"><a href="#"><img src="images/albums/rs2.jpg" width="130" height="130" alt=""></a>
                <p><a href="#">»Sympathy for the Devil</a><br>
                  <a href="#">»The Rolling Stones</a><br>
                  <a href="#">»Beggars banquet</a>
                </p>
              </li>

            </ul>
            <figcaption><a href="#">En voir plus &raquo;</a></figcaption>

          </figure>
        </blocks>
        </article>
      </section>
    </div>
    <!-- ########################################################################################## -->
<div id="homepage" class="last clear">
      <section class="one_quarter">
        <h2 class="title">Accès rapide</h2>
        <nav>
          <ul>
            <li><a href="login.php">Déconnexion</a></li>
            <li ><a href="profil.php">Profil</a></li>
            <li><a href="#">Nos offres </a></li>
            <li><a href="mur.php">Votre musique</a></li>
            <li class="last"><a href="cherche.php">Rechercher</a></li>
          </ul>
        </nav>
      </section>
      <section class="three_quarter lastbox">
        <h2 class="title">
          <?php
          $pseudo=$_SESSION['login'];
          afficheUtilisateur($pseudo,$connexion);
          ?>
    </div>
    <!-- / content body -->
  </div>
</div>

<?php require("include/pied.php"); ?>