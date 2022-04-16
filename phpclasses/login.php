<?php
//login.php

require_once 'includes/global.inc.php';

$error = "";
$username = "";
$password = "";


//проверка того, что форма была отправлена
if(isset($_POST['submit-login'])) { 

	$username = $_POST['username'];
	$password = $_POST['password'];

	$userTools = new UserTools();
	if($userTools->login($username, $password)){ 
		//при успешном входе происходит переадресация на главную страницу
		header("Location: index.php");
	}else{
		//если данный пользователь не был найден, то выводится сообщение и снова появлется форма входа
		$error = "Incorrect username or password. Please try again.";
	}
}
?>

<html>
<head>
	<title>Login</title>
	<link rel='stylesheet' href='login.css' />
</head>
<body>
<?php
if($error != "")
{
    echo $error."<br/>";
}
?>
 
<div class="login-page"> 
<div class="form"> 
<form class="login-form" action="login.php" method="post"> 
Username<input type="text" name="username" value="<?php echo $username; ?>"/> 
Password<input type="password" name="password" value="<?php echo $password; ?>"/> 
<button type="submit" value="Login" name="submit-login">Login</button>

<p class="message">Not registered? <a href="register.php">Create an account</a></p> 
</form> 
</div> 
</div>
</body>
</html>
