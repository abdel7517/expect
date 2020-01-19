<?php
require_once("Manager.php");


class CommentsManager extends Manager
{


public function getComments($idComments)
{
      $bdd = $this->dbConnect();
      $req = $bdd->prepare('SELECT id, nom, commentaire, DAY(day) AS day, MONTH(day) as month, YEAR(day) as year, HOUR(day) as hour, MINUTE(day) as minute, SECOND(day) as second FROM inscrit WHERE id = ?');
      $req ->execute(array($idComments));
      return $req;
}

public function addComment($nom, $idComment, $commentaire)
{
      $bdd = $this->dbConnect();
      $req = $bdd -> prepare('INSERT INTO inscrit (nom, id, commentaire, day) VALUES(:nom, :id, :commentaire, NOW())');
      $req -> execute(array(
      'nom' => $nom,
      'id' => $idComment,
      'commentaire' => $commentaire
      ));

}

}


?>
