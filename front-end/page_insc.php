<!DOCTYPE html>
<html>
<head>
	<title> Page d'inscription</title>
	<link rel="stylesheet" type="text/css" href="../CSS/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
</head>
<body>

	<div id="confirmInscr">
		<?php


		echo $_GET["confInscr"];


		?>
	</div>

	<div id="contBoutton">
		<button id="connection" >Connection</button>
		<button id="inscription" class="">Inscription</button>
		<a href="https://www.worldweb.fr/activiteGestionnaireContacte/activite_2/php/contacts.php" title="">	<button id="visiteur" >Continuer en visiteur</button></a>
	</div>

	<div id="Form_connection" class="">
		<?php
		include("connection.php");
		?>
		<p >
			Pour tester la gestion des contacts sur un espace menbre, voici 2 identifiant déja créer. <br>pseudo : a et mdp: a <br> pseudo : z et mdp: z
		</p>
	</div>

	<form action="inscr_post.php" method="POST" accept-charset="utf-8" id="Form_Inscr">
		<label> Pseudo : <input type="text" name="pseudo" required></label>
		<div class="red">
			<?php
			if (!empty($_GET["pseudo"]) ) {
				echo	"Pseudo déja pris";
			} ?>
		</div>
		<br>
		<label>Email : <input type="email" name="email" placeholder="***@**.**" required></label>
		<div class="red">
			<?php
			if (!empty($_GET["mail"])) {
				echo "Votre mail est déja associer à un compte";
			}
			?>
		</div>
		<br>
		<label>Mot de passe :<input type="password" name="mdp" required ></label><br>
		<label> Confirmer mot de passse : <input type="password" name="vmdp" required ></label>
		<div class="red">
			<?php
			//  renvoie true si la valeur est remplie
			if(!empty($_GET["mdp"]))
			{
				echo "Les deux mots de passe ne sont pas identique.";
			}

			?>
		</div>
		<input type="submit" value="Envoyer">
	</form>

	<script src="../js/page_inscr.js"></script>

</body>
</html>

