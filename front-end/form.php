<h1> Créé un Sujet </h1>
<section id="formNewAnn">
<div class="formLeg">
<div> <strong> Partagez vos idées et discutez en : </strong></div>
  <ol>
    <li> Entrez votre nom </li>
    <li> Indiquez le thême </li>
    <li> Complétez toutes les informations complémentaire tels que l'heure, quantité de produit disponible ... </li>
    <li> Partagez le lien sur vos réseaux sociaux </li>
</ol>
</div>

	<form id="ancre" action="back-end/form_POST.php" method="POST" accept-charset="utf-8">
<span id="confirm">
  <?php if(!empty($_GET["confirm"])) { echo "Votre liste d'attente est maintenant active.";  } ?></span>


		<label for="nom"> Nom : </label>
    <input type="text" name="nom" required >

    <label for="titre" > Titre : </label>
    <input type="text" name="titre" required>

    <label for="infos">De quoi voulez vous parlez :</label>
    <textarea  name="infos" type="text"></textarea>

    <input type="submit" value="envoyer" class="envoie">
	</form>
</section>
</body>
<script type="text/javascript" src="back-end/form.js"></script>
</html>
