<?php

$login = filter_var(trim($_POST['CusLogin']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['CusPass']),FILTER_SANITIZE_STRING);

$pass=md5($pass."fjosdfsdfdsfsddf");

$mysql = new mysqli("localhost", "root", "root", "Shop");
$result = $mysql->query("SELECT * FROM `Customers` WHERE `CusLogin` = '$login' AND  `CusPass` = '$pass'");

$user = $result->fetch_assoc();
if(count($user) == 0) {echo "Такой пользователь не найден";
exit();
}

setcookie('user', $user['CusName'], time() + 3600, "/");

$mysql->close();

header('Location: /');

?>