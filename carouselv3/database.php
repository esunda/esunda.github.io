<?php


  try {
      $dbh = new PDO('mysql:host=localhost;dbname=EFR', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
      $statement = $dbh->prepare('SELECT * from temoignages');
      $statement->execute();
      $results = $statement->fetchAll();
      $json = json_encode($results);
      echo $json;
      //foreach($dbh->query('SELECT * from temoignages') as $row) {
          //print_r($row);
      //}
      $dbh = null;
  } catch (PDOException $e) {
      print "Erreur !: " . $e->getMessage() . "<br/>";
      die();
  }





?>
