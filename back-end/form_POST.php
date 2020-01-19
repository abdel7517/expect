<?php
require("model/PostManager.php");
$post = new PostManager();
$post->addPost($_POST["nom"], $_POST["titre"], $_POST["infos"]);
header('Location: ../index.php?confirm=yes');



?>
