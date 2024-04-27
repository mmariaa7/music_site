<?php
session_start();
      $_SESSION['login']='';

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>3..2..1..Musique!</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<style>

  blocks{
    display: inline-block;
  }
  
</style>

</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="#">3..2..1..Musique!</a></h1>
      <h2>Suivez le son</h2>
    </div>
    
<div class="wrapper row2" >
  <div id="container" class="clear">
    <!-- Slider -->
    <section id="slider" class="clear">
      <figure><img src="images/site/music.jpg" alt="">
        <figcaption>
         <h3>Connectez-vous pour suivre le son</h3>
         
           <form method="post" action="veriflogin.php">

          	<label for="pseudo">Pseudo</label>:<input type="text" name="pseudo"></br>
          	<label for="password">Mot de passe</label>:<input type="password" id="password" name="password" required/></br>
          	<input type="submit" value="En avant!"/>
			<input type="submit" value="Reset"/></br>
			
          </form> 
      
        </figcaption>
      </figure>
    </section>
  </div>
</div>
</header>
</div>
</body>
</html>
<?php require("include/pied.php"); ?>