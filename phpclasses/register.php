<?php 
//register.php

require_once 'includes/global.inc.php';

 //инициализация php переменных, которые будут использваться в форме
$username = "";
$password = "";
$password_confirm = "";
$email = "";
$error = "";

//проверка того, что форма была отправлена
if(isset($_POST['submit-form'])) { 

	//извлечение $_POST переменных из формы
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password_confirm = $_POST['password-confirm'];
	$email = $_POST['email'];

	//инициализация  переменных для валидации входных данных
	$success = true;
	$userTools = new UserTools();
	
	//проверка того, что форма была заполнена корректно
	//проверка, существует ли пользоватеем с таким логином в базе данных
	if($userTools->checkUsernameExists($username))
	{
	    $error .= "That username is already taken.<br/> \n\r";
	    $success = false;
	}

	//проверка пароля на совпадение
	if($password != $password_confirm) {
	    $error .= "Passwords do not match.<br/> \n\r";
	    $success = false;
	}

	if($success)
	{
		//подготовка данных для сохранения в объекте пользователя
	    $data['CusName'] = $username;
	    $data['CusPass'] = md5($password); //шифрование пароля
	    $data['CusEmail'] = $email;
	
		//создание нового объекта пользователя
	    $newUser = new User($data);
	
		//сохранение нового пользователя в базе данных
	    $newUser->save(true);
	
		//осуществление входа пользователя
	    $userTools->login($username, $password);
	
		//переадресация пользователя на главную страницу
	    header("Location: index.php");
	    
	}

}

//если форма не была отправлена или были введены некоректные данные, то снова появляется форма регистрации
?>


<html>
<head>
	<title>Registration</title>
	<link rel='stylesheet' href='login.css' />// подключение css файла
</head>
<body>
	<?php echo ($error != "") ? $error : ""; ?>
	<form action="register.php" method="post">
	
	<div class="login-page">
  <div class="form">
    <form class="register-form">
     Username <input type="text" value="<?php echo $username; ?>" name="username"/>
     Password <input type="password" value="<?php echo $password; ?>" name="password" />
	 Password (confirm) <input type="password" value="<?php echo $password_confirm; ?>" name="password-confirm" />
     E-Mail <input type="text" value="<?php echo $email; ?>" name="email" />
      <button type="submit" value="Register" name="submit-form">create</button>
      <p class="message">Already registered? <a href="login.php">Sign In</a></p>
    </form>
  </div>
</div>
	</form>
	<a href="index.php">Return to Homepage</a>
</body>
</html>
