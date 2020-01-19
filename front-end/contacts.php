<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Gestion des contacts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" type="text/css" href="../CSS/main.css">

</head>

<body>
	<!-- affichage d'un boutton conect/ inscr si util pas loger  -->
	<?php
	if (empty($_COOKIE["PSEUDO"]) && empty($_COOKIE["pass"]) )
		{ ?>
			<a href="https://www.worldweb.fr/activiteGestionnaireContacte/activite_2/php/page_insc.php" title=""> <button > Connection / inscription</button> </a>
		<?php } ?>

		<h1>Gestionnaire de contacts</h1>
		<!-- Affichage de mess de bonj si util est loger -->
		<?php
		if (!empty($_COOKIE['PSEUDO']))
		{
			echo 'Bonjour ' . $_COOKIE['PSEUDO'];
			?>
			<a href="boutton_deco.php" ><button >Se deconnecter</button></a>
		<?php } ?>

		<div id="messAjout"></div>
		<div id="conteneur">
			<input type="button" value="Liste des contacts" id="liste" >
			<input type="button" value="Ajouter un contact" id="ajout">
			<input type="button" value="Supprimer un contact" id="sup">
		</div>
		<form

		<?php
		if (empty($_COOKIE["PSEUDO"]) && empty($_COOKIE["pass"]) )
			{ ?>

				action="../php/supp.php"
			<?php }
			else
				{ ?>
					action="../php/supp_menbre.php"
				<?php }
				?>
				method="POST" accept-charset="utf-8" id="formSup">
				<input type="text" name="nom" placeholder="Entrer le nom du contact">
				<input type="submit" value="Suprimer">
			</form>

			<form
			<?php
			if (empty($_COOKIE["PSEUDO"]) && empty($_COOKIE["pass"]) )
				{ ?>
					action="../php/post.php"

				<?php }
				else
					{ ?>
						action="../php/post_menbre.php"

					<?php }
					?>



					action="../php/post.php" method="POST" accept-charset="utf-8" id="formAjout">
					<input type="text" name="nom" placeholder="Nom du contact" required><br>
					<input type="tel" name="num" placeholder="Numéro du contact" required><br>
					<input type="submit" value="Ajouter" id="boutonSubmit">
				</form>
				<div id="liste_cont">
					<?php
					if (empty($_COOKIE["PSEUDO"]) && empty($_COOKIE["pass"]) )
					{
						include("../php/recup_contact.php");

					}
					else
					{
						include("../php/recup_contact_menbre.php");

					}
					?>
				</div>



				<script src="../js/contacts.js"></script>
			</body>

			</html>
