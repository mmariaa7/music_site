<?php require("include/entete.php") ; ?>

<form method="post" action="majprofil.php">
	<p>
		<label for="pseudo">Pseudo</label>:<input type="text" name="pseudo" value="Hausdorff Heathkit" disabled></br>
		<input type="hidden" name="pseudo" value="Hausdorff Heathkit">
		<label for="nom">Nom</label>:<input type="text" id="nom" name="nom" required/></br>
		<label for="prenom">Prénom</label>:<input type="text" id="prenom" name="prenom" required/></br>
		<label for="dateN">Date de naissance</label>:<input type="date" id="dateN" name="dateN" required/></br>
		<label for="password">Mot de passe</label>:<input type="password" id="password" name="password" required/></br>
		<label for="dateN">Date d'inscription</label>:<input type="date" id="dateI" name="dateI" value="2022-02-20"  disabled/></br>
		<input type="hidden" name="dateN" value="2022-02-20">
		<label for="dateA">Date de fin d'abonnement</label>:<input type="date" id="dateA" name="dateA" value="2023-02-20" disabled /></br>
		<input type="hidden" name="dateA" value="2023-02-20">
		<label for="avatar">Avatar</label>:<input type="text" id="avatar" name="avatar" required/></br>

		<input type="submit" value="Mettre à jour"/>
		<input type="submit" value="Reset"/></br>
	</p>
</form>
<?php require("include/pied.php"); ?>