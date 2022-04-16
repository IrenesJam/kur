<?php 

require_once 'includes/global.inc.php';

//проверка авторизации пользователя
if(!isset($_SESSION['logged_in'])) {
	header("Location: login.php");
}

//получение объекта пользователя из сессии
$user = unserialize($_SESSION['users']);

//инициализация php переменных для формы
$mail = $user->mail;
$message = "";

//проверка отправления формы
if(isset($_POST['mail'])) { 

	//retrieve the $_POST variables
	$mail = $_POST['mail'];

	$user->mail = $mail;
	$user->save();

	$message = "Settings Saved<br/>";
}

//если форма не была отправлена или были введены некорректные данные, то форма появляется снова
?>


<html>
<head>
	<title>Change Settings</title>
	<link rel='stylesheet' href='settings.css' />
</head>
<body>
<div class="settings-page"> 
<div class="form"> 
<form class="settings" action="settings.php" method="post"> 
E-Mail <input type="text" value="<?php echo $mail; ?>" name="mail" />  
<button type="submit" value="Update" name="submit-settings">Update</button>
<?php echo $message; ?>
</div>
</div>
	<p><a href="index.php">Return to Homepage</a></p>
</body>
</html>
