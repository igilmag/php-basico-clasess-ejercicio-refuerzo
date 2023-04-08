<?php
require_once(MODELS.'Cancion.php');
require_once(MODELS.'CD.php');

try {
  $dbh = new PDO('mysql:host='.HOST.';dbname=prueba','root','');
  $sql = 'SELECT titulo, autor FROM `cd`';
  // foreach ($dbh->query($sql) as $row) {
  //   print $row['titulo'] . "\t";
  //   print $row['autor'] . "\t";
  // }
  $statement = $dbh->query($sql);
  // $result = $statement->fetchAll(PDO::FETCH_COLUMN, 0);
  // var_dump($result);
  // PDO::FETCH_CLASS: devuelve una nueva instancia de la clase solicitada, haciendo corresponder las columnas del conjunto de resultados con los nombres de las propiedades de la clase, y llamando al constructor después, a menos que también se proporcione PDO::FETCH_PROPS_LATE.
  $resultAll = $statement->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Cancion',array('titulo','autor'));
  // var_dump($resultAll);
  // echo "<pre>";
  // print_r($resultAll);
  // echo "</pre>";
  $cd = new CD(...$resultAll);
} catch (PDOException $error) {
  die('Error: '. $error->getMessage());
}
