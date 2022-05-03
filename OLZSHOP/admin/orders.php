<?php
	require "secure/session.inc.php";
	require "../inc/lib.inc.php";
	require "../inc/config.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Поступившие заказы</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Поступившие заказы:</h1>
<?php
$orders = getOrders();
foreach($orders as $order)
{
?>
<hr>
<h2>Заказ номер: <?= $order['id'] ?> </h2>
<p><b>Заказчик</b>: <?= $order['name'] ?> </p>
<p><b>Email</b>: <?= $order['email'] ?> </p>
<p><b>Телефон</b>: <?= $order['phone'] ?> </p>
<p><b>Адрес доставки</b>: <?= $order['address'] ?> </p>
<p><b>Дата размещения заказа</b>: <?= date("d-m-Y H:i:s", $order['datetime'])} ?> </p>

<h3>Купленные товары:</h3>
<table border="1" cellpadding="5" cellspacing="0" width="90%">
<tr>
	<th>N п/п</th>
	<th>Название</th>
	<th>Автор</th>
	<th>Год издания</th>
	<th>Цена, руб.</th>
	<th>Количество</th>
</tr>

<?php
	$index = 1;
	$sum = 0;
	foreach ($order['goods'] as $item)
	{
?>
<tr>
	<th><?= $index ?></th>
	<th><?= $item['author'] ?></th>
	<th><?= $item['title'] ?></th>
	<th><?= $item['pubyear'] ?></th>
	<th><?= $item['price'] ?></th>
	<th><?= $item['quantity'] ?></th>
</tr>
<?php
	$index++;
	$sum += $item['price']*$item['quantity'];
	}
?>
</table>
<p>Всего товаров в заказе на сумму: <?= $sum ?> руб.</p>

</body>
</html>