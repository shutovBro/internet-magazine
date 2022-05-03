<?php
	// подключение библиотек
	require "inc/lib.inc.php";
	require "inc/config.inc.php";
	$id = ['orderid' => uniqid()];
	deleteItemFromBasket($id);
	header("Location: basket.php");
?>