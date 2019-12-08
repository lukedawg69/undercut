<?php 
require("inc/config.php");
try{
$connection = new PDO($dsn, $username,$password,$options);

$slq = "SELECT * FROM login_admin";

$statement = $connection->prepare($sql);
$statement->execute();

$result = $statement->fetchAll();
}catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }
?>