<?php
require_once 'UserTools.class.php';
require_once 'DB.class.php';

class User {

	public $CusID;  // id пользователя
	public $CusEmail;  // его почта
	public $CusCusName;  // его логин
	public $CusPass;  // его пароль
    public $Country;  // его страна проживания
	
	

	//Конструктор вызывается всякий раз, когда создается новый объект.
	//Принимает ассоциативный массив со строкой БД в качестве аргумента.
	function __construct($data) {
		$this->CusID = (isset($data['CusID'])) ? $data['CusID'] : "";
		$this->CusEmail = (isset($data['CusEmail'])) ? $data['CusEmail'] : "";
		$this->CusCusName = (isset($data['CusCusName'])) ? $data['CusCusName'] : "";
		$this->CusPass = (isset($data['CusPass'])) ? $data['CusPass']: "";
		$this->Country = (isset($data['Country'])) ? $data['Country']: "";
		
	}

	public function save($isNewUser = false) {
		//создается новый объект базы данных.
		$db = new DB();
		
		// если пользователь уже зарегистрирован,
		// просто обновляется информация о нем.
		if(!$isNewUser) {
			$data = array(
				"CusEmail" => "'$this->CusEmail'",
				"CusName" => "'$this->CusName'",
				"CusPass" => "'$this->CusPass'",
                "Country" => "'$this->Country'"
				
			);
			
			//обновляет строку в базе данных
			$db->update($data, 'Customers', 'CusID = '.$this->CusID);
		}else {
		// если пользователь заходит впервые
			$data = array(
				"CusEmail" => "'$this->CusEmail'",
				"CusName" => "'$this->CusName'",
				"CusPass" => "'$this->CusPass'",
                "Country" => "'$this->Country'",
		
			);
			
			$this->id = $db->insert($data, 'Customers'); // его данные добавляются в таблицу Users
		}
		return true;
	}
	
}
?>
