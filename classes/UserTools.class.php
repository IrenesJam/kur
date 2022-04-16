<?php
require_once 'User.class.php';  //Подключение используемых классов
require_once 'DB.class.php';

class UserTools {
	
	// Вход пользователя в систему. Сначала проверяется, соответствуют ли
	// имя пользователя и пароль строке в базе данных.
	// Если это успешно, устанавливаются переменные сеанса
	// и сохраняется объект пользователя.
	public function login($CusName, $CusPass)
	{

  
		$hashedPassword = md5($CusPass); //хэшируем введенный пароль, т.к. в таблице БД он захэширован
		$result = mysql_query("SELECT * FROM Customers WHERE Cusname = '$CusName' AND CusPass = '$hashedPassword'");  // Ищем пользователя в БД

		if(mysql_num_rows($result) == 1) // если в результате запроса была возвращена одна строка, то создается сессия с данным пользователем
		{
			$_SESSION["users"] = serialize(new User(mysql_fetch_assoc($result)));
			$_SESSION["logged_in"] = 1;
			return true;
		}else{
			return false;
		}
	}
	
	// Выход пользователя из системы. Уничтожает переменные сеанса.
	public function logout() {
		unset($_SESSION["users"]);
		unset($_SESSION["login_time"]);
		unset($_SESSION["logged_in"]);
		session_destroy();
	}
	
	// Проверяет, существует ли данное имя пользователя в бд.
	// Вызывается при регистрации, чтобы убедиться, что все имена пользователей уникальны.	
	public function checkUsernameExists($CusName) {
		$result = mysql_query("SELECT CusID from Customers where CusName ='$CusName'");
    	if(mysql_num_rows($result) == 0)
    	{
			return false;
	   	}else{
	   		return true;
		}
	}

	// получает пользователя
	// возвращает объект User. Принимает идентификатор пользователя в качестве входа
	public function get($CusID)
	{
		$db = new DB();
		$result = $db->select('users', "CusID = $CusID");
		
		return new User($result);
	}


}

?>
