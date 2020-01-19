<?php

class Manager
{

  protected function dbConnect()
{
      $bdd = new PDO('mysql:host=worldwebqh860827.mysql.db;dbname=worldwebqh860827;charset=utf8', 'worldwebqh860827', 'Algerie75017', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      return $bdd;
}
}


?>
