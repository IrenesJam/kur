<?php

setcookie('user', $user['CusName'], time() - 3600, "/");

header('Location: /cabinet.php');

?>