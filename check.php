<?php

  $login = filter_var(trim($_POST['CusLogin']),FILTER_SANITIZE_STRING);
  $name = filter_var(trim($_POST['CusName']),FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['CusPass']),FILTER_SANITIZE_STRING);
  $country = filter_var(trim($_POST['Country']),FILTER_SANITIZE_STRING);
  $email = filter_var(trim($_POST['CusEmail']),FILTER_SANITIZE_STRING);

  $pass=md5($pass."fjosdfsdfdsfsddf");

  $mysql = new mysqli("localhost", "root", "root", "Shop");
  $mysql->query("INSERT INTO `Customers` (`CusLogin`, `CusName`, `Country`, `CusEmail`, `CusPass`) 
  VALUES('$login', '$name', '$country', '$email', '$pass')");

  $mysql->close();

  header('Location: /');

?>