<?php
$link = mysqli_connect("localhost", "root", "", "mybase");
if (mysqli_connect_errno()) {
	printf("Ошибка соединения: %s\n", mysqli_connect_error());
exit();
}
mysqli_select_db ($link, "books");
$q = mysqli_query($link, "SELECT * FROM `books` WHERE price >= 300 and price <= 600") or die();
while ($row = mysqli_fetch_array($q))
{
	echo $row['title'];
	echo "<br>";
}
mysqli_close($link);