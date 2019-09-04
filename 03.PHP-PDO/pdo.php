<?php  
try {
  $pdo = new PDO('mysql:host=127.0.0.1;dbname=learnphp;', 'root', '');
} catch (Exception $e){
  die(var_dump($e));
}

function var_dump_r($data){
  echo "<pre>";
  var_dump($data);
  echo "</pre>";
}

$statement = $pdo->prepare("SELECT * FROM todos");
$statement->execute();
$res = $statement->fetchAll(PDO::FETCH_ASSOC);
var_dump_r($res);


?>