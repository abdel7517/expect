<?php
require_once("Manager.php");

class PostManager extends Manager
{

public function addPost($nom, $titre,  $infos)
{
    $bdd = $this->dbConnect();
    $req = $bdd -> prepare('INSERT INTO anonces (nom, titre, jour, infos) VALUES(:nom, :titre, NOW(), :infos)');
    $req -> execute(array(
    'nom' => $nom,
    'titre' => $titre,
    'infos' => $infos
));

}

public function getPost($idPost)
{
    $bdd = $this->dbConnect();
    $req = $bdd->prepare('SELECT * FROM anonces WHERE id = ?');
    $req->execute(array($idPost));
    $rep = $req->fetch();
    return $rep;
}

public function getPosts()
{
$bdd = $this->dbConnect();
$reponse = $bdd->query('SELECT * FROM anonces');
return $reponse;
}




}




?>
