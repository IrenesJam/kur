<?php
class DB {

	protected $db_host = 'localhost';  // адрес сервера
	protected $db_user = 'root'; //Имя пользователя
	protected $db_pass = 'root';  //Пароль
	protected $db_name = 'Shop';  //Имя БД
	
	//подключение к базе данных
	//убедитесь, что данная функция вызывается на каждой странице, где необходима работа с бд
	public function connect() {
		$connection = mysqli_connect($this->db_host, $this->db_user, $this->db_pass) or die('no connection');
		mysqli_select_db($connection, $this->db_name,);
		
		return true;
	}
	
	//принимает набор строк mysql и возвращает ассоциативный массив, 
	//где ключами массива являются имена столбцов в наборе строк. 
	//Если для singleRow установлено значение true, он возвращает одну строку вместо массива строк.
	public function processRowSet($rowSet, $singleRow=false)
	{
		$resultArray = array();
		while($row = mysqli_fetch_assoc($rowSet)) //ассоциативный массив
		{
			array_push($resultArray, $row);
		}
		
		if($singleRow === true)
			return $resultArray[0];
			
		return $resultArray;
	}
	
	//Производит выборку строк из базы данных.
	//возвращает полную строку или строки из таблицы $table, используя $where в качестве предложения where.
	//возвращаемое значение - ассоциативный массив с именами столбцов в качестве ключей.
	public function select($table, $where, $bd)
	 {
	 	
		$sql = "SELECT * FROM $table WHERE $where";
		$result = mysqli_query($bd, $sql);
		if(mysqli_num_rows($result) == 1)
			return $this->processRowSet($result, true);
		
		return $this->processRowSet($result);
	}


	
	//Производит выборку всех строк из базы данных из таблицы $table.
	//возвращаемое значение - ассоциативный массив с именами столбцов в качестве ключей.
	public function selectAll($table, $bd) 
	{
		$sql = "SELECT * FROM $table";
		$result = mysqli_query($bd, $sql);
		if(mysqli_num_rows($result) > 0)
			return $this->processRowSet($result);
		return $this->processRowSet($result);
	}
	
	// Обновляет текущую строку в базе данных.
	// принимает массив данных, где ключами в массиве являются имена столбцов,
	// а значения - это данные, которые будут вставлены в эти столбцы.
	// $table - это имя таблицы, а $where - предложение sql where.
	public function update($data, $table, $where, $bd) {
		foreach ($data as $column => $value) {
			$sql = "UPDATE $table SET $column = $value WHERE $where";
			mysqli_query($bd, $sql) or die(mysqli_error($bd));
		}
		return true;
	}
	
	// Вставляет новую строку в базу данных.
	// принимает массив данных, где ключами в массиве являются имена столбцов,
	// а значения - это данные, которые будут вставлены в эти столбцы.
	// $table - это имя таблицы.
	public function insert($data, $table, $bd) {
		
		$columns = "";
		$values = "";
		
		foreach ($data as $column => $value) {
			$columns .= ($columns == "") ? "" : ", ";
			$columns .= $column;
			$values .= ($values == "") ? "" : ", ";
			$values .= $value;
		}
		
		$sql = "INSERT into $table ($columns) values ($values)";
				
		mysqli_query($bd, $sql) or die(mysqli_error($bd));
		
		//возвращает идентификатор пользователя в базе данных.
		return mysqli_insert_id($bd);
		
	}
	
}
?>
