<?php
	// подключение библиотек
	require "secure/session.inc.php";
	require "../inc/lib.inc.php";
	require "../inc/config.inc.php";
	
	if(!addItemToCatalog($title, $author, $pubyear, $price)) { echo 'Произошла ошибка при добавлении товара в каталог'; }
	else{ header("Location: add2cat.php"); exit; }
?>