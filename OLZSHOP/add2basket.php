<?php
	// подключение библиотек
	require "inc/lib.inc.php";
	require "inc/config.inc.php";
	$quantity = 1;
	add2Basket();
	header("Location: catalog.php");
?>