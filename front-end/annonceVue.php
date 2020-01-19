<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Expect</title>
    <link rel="stylesheet" href="front-end/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="icon" type="image/png" href="front-end/logo-expect-mini" />
    <!-- font awesone -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>

 <div id='corp'>
  <section id='infoListe'>
     <h1>Sujet :  <?= $post['titre']?> </h1>
     <p> date : </p>
     <div class='centre'> <?= $post["jour"]?> </div>
       <p> Contenu : </p>
       <div class='centre'> <?= $post['infos'] ?> </div>
   </section>




  <form action="back-end/form_POST_liste.php?id=<?= $post["id"]; ?>" method="POST" accept-charset="utf-8" class="formAnnonce">
    <label class="blanc">nom : </label>
      <input name="nom" required placeholder="Nom">
       <label class="blanc">commentaire </label>
        <textarea name="commentaire" required placeholder="commentaire"></textarea>
          <input type="submit" value="Commenter">
           </form>

              <h1> Commentaires :</h1>
<?php

while ($donnees = $comments->fetch())
{
echo  "<div class='comments'> Le " . $donnees["day"] . "-" . $donnees["month"]."-". $donnees["year"]. " à " .
      $donnees["hour"]. " h. ".$donnees["minute"]." min. ".$donnees["second"] ." sec de ".
 $donnees['nom']. " : " . $donnees["commentaire"] ."</div>";
}
?>
</div>


</body>

