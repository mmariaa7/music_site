<?php
	require("include/connect.php");
      $connexion=mysqli_connect("p:".SERVEUR,NOM,PASSE,BD);
      if(!$connexion)
      {
        echo "Desolé, connexion à ".SERVEUR." ou à la ".BD." impossible :".mysqli_error()."\n";
        exit;
      }

	$pseudo=$_POST["pseudo"];
	$password=$_POST["password"];

	$sql="SELECT pwd FROM utilisateur WHERE pseudo='$pseudo'";
	$resultat=mysqli_query($connexion,$sql);
	while($ligne=mysqli_fetch_array($resultat))
	{
		if($ligne["pwd"]==$password){
			session_start();
			$_SESSION['login']=$pseudo;
			header("Location:index.php"); 
			//echo "OK";
		}
		else{
			header("Location:login.php");
			//echo "non ok";
		}
	}
?>