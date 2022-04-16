<?php
//global.inc.php

require_once 'classes/User.class.php';
require_once 'classes/UserTools.class.php';
require_once 'classes/Item.class.php';
require_once 'classes/ItemTools.class.php';
require_once 'classes/DB.class.php';

//connect to the database
$db = new DB();
$db->connect();

//initialize UserTools object
$userTools = new UserTools();

$itemTools = new ItemTools();

//start the session
session_start();
//refresh session variables if logged in
if(isset($_SESSION['logged_in'])) {
	$user = unserialize($_SESSION['Customers']);
	$items = unserialize($_SESSION['Albums']);
	$_SESSION['Customers'] = serialize($userTools->get($user->CusID));
	$_SESSION['Albums'] = serialize($itemTools->getItems());
}
?>
