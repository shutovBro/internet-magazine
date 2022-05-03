<?php
define ('DB_HOST', 'localhost');
define ('DB_USER', 'root');
define ('DB_PASSWORD', '');
define ('DB_NAME', 'baza');
$link = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if ($link->connection_errno) exit('Ошибка подключения к базе');
$link->set_charset('utf8');
$link->close();
basketInit();
?>