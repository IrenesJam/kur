<?php
require_once 'Item.class.php';
require_once 'DB.class.php';

class ItemTools {
	
	// получает список книг
	// возвращает список объектов Item. Принимает идентификатор ткниги в качестве входа
	public function getItems()
	{
		$db = new DB();
		$nam = unserialize($_SESSION['users']);  //Извлекаем из переменной сессии объект Users
		$idu = $nam->idu;  //Определяем id пользователя сессии
		$result =$db->select('Albums inner join bubuy on books.idb=bubuy.idb',"idu = ".$idu); //Запрос в БД. Ищем купленные этим пользователем книги
		
		for ($ind = 0; $ind < count($result); $ind++){   
			$items[$ind] = new Item($result[$ind]);    //Заполняем массив объектов строками результата запроса
		}
		$_SESSION["books"] = serialize($items);   //Создаем переменную сессии и записываем туда массив объектов
		return $items;
	}
	
}

?>
