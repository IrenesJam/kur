<?php
require_once 'ItemTools.class.php';
require_once 'DB.class.php';

class Item {

	public $AlbumID;
	public $AlbName;
	public $SingerName;
	public $AlbDescription;
	public $AlbPrice;
	public $Stock;
	public $ProQuantity;
	public $ReliseDate;

	//Конструктор вызывается всякий раз, когда создается новый объект.
	//Принимает ассоциативный массив со строкой БД в качестве аргумента.
	function __construct($data) {
		$this->AlbumID = (isset($data['AlbumID'])) ? $data['AlbumID'] : "";
		$this->AlbName = (isset($data['AlbName'])) ? $data['AlbName'] : "";
		$this->SingerName = (isset($data['SingerName'])) ? $data['SingerName'] : "";
		$this->AlbDescription = (isset($data['AlbDescription'])) ? $data['AlbDescription'] : "";
		$this->AlbPrice = (isset($data['AlbPrice'])) ? $data['AlbPrice'] : "";
		$this->Stock = (isset($data['Stock'])) ? $data['Stock'] : "";
		$this->ProQuantity = (isset($data['ProQuantity'])) ? $data['ProQuantity'] : "";
		$this->ReliseDate = (isset($data['ReliseDate'])) ? $data['ReliseDate'] : "";

	}
	
}

?>
