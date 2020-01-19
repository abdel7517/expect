
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Expect</title>
        <link rel="stylesheet"  href="front-end/main.css">
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="icon" type="image/png" href="front-end/logo-expect-mini" />
    <!-- font awesone -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
        <h1> Sujets :  </h1>
        <section id="main">
    <?php while ($donnees = $posts->fetch())
    {
    ?>
        <a class='bloc' href='index.php?id=<?= $donnees['id'] ?>&action=post' >
            <nav>
                 <span class='band'>Sujet : </span>
                 <?= $donnees['titre'] ?>
            </nav>
        </a>;

         <?php
            }
             $posts->closeCursor();
          ?>
    </section>


