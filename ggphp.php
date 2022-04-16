<?php 
$user = "root";
$password="root";
$host="localhost";
$db="Shop";
$dbh='mysql:host='.$host.';dbname='.$db.';charsest=utf8';
$pdo=new PDO($dbh, $user, $password);
$sql = $pdo->prepare("SELECT * FROM Albums");
$sql->execute();
$res = $sql->fetch(PDO::FETCH_ASSOC);
print_r($res);
?>