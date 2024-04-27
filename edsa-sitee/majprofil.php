<?php require("include/entete.php"); ?>
	<?php
	require("include/connect.php");
      $connexion=mysqli_connect("p:".SERVEUR,NOM,PASSE,BD);
      if(!$connexion)
      {
        echo "Desolé, connexion à ".SERVEUR." ou à la ".BD." impossible :".mysqli_error()."\n";
        exit;
      }

	$pseudo=$_POST["pseudo"];
	$nom=$_POST["nom"];
	$prenom=$_POST["prenom"];
	$password=$_POST["password"];
	$avatar=$_POST["avatar"];

	$sql="SELECT pwd FROM utilisateur WHERE pseudo='$pseudo'";
	$resultat=mysqli_query($connexion,$sql);
	while($ligne=mysqli_fetch_array($resultat))
	{
		if($ligne["pwd"]==$password){

			$sql2="UPDATE utilisateur SET nom='$nom', prenom='$prenom', image='$avatar' WHERE pseudo='$pseudo' ";
			$resultat2=mysqli_query($connexion,$sql2);
			header("Location:index.php");
		}
		else{
			header("Location:profil.php");
		}
	}



?>

<?php require("include/pied.php"); ?>