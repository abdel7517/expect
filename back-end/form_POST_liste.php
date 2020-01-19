<?php
require("model/CommentsManager.php");
header("location: ../index.php?action=post&id=". $_GET["id"]);
 if(isset($_POST["nom"]) && isset($_GET["id"]) && isset($_POST["commentaire"]))
  {
    $CommentsManager = new CommentsManager();
    $CommentsManager->addComment($_POST["nom"], $_GET["id"], $_POST["commentaire"]);
  }
?>
