<?php
  session_start();
  if(empty($_SESSION['login']))
  {
    header("Location:login.php");
    exit();
  }
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
      <h1><a href="index.php">3..2..1..Musique!</a></h1>
      <h2>Suivez le son</h2>
    </div>
    
    <form action="cherche.php" method="post">
      <fieldset>
        <legend>Search:</legend>
        <input type="text" name="search" value="Un artiste, un album, une musique&hellip;" onFocus="this.value=(this.value=='Un artiste, un album, une musique&hellip;')? '' : this.value ;" >
        <input type="submit" id="sf_submit" value="Recherche">
      </fieldset>
    </form>

    <nav>
      <ul>
        <li><a href="index.php">ACCUEIL</a></li>
        <li><a href="login.php">DÉCONNEXION</a></li>
        <li><a href="profil.php">PROFIL</a></li>
        <li class="last">VOTRE MUSIQUE<a href="mur.php"></a></li>
      </ul>
    </nav>
  </header>
</div>