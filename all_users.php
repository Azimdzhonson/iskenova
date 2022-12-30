<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Selected User</title>
</head>

<body>
<?php
require 'scripts/connect.php';

$sql_select = "SELECT * FROM users";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);

do
{
	printf("<p>Пользователь: " .$row['first_name'] . " " .$row['last_name'] ."</p> 
	<p><i>Контактные данные</i></p><p>E-mail: " .$row['email'] . "</p><p>Facebook: " .$row['facebook'] . "</p>---------<br/>"
	);
}
while($row = mysql_fetch_array($result));


?>
<a href="search_user.html">Вернуться к поиску</a><br/><br/>
<a href="info_form.html">Добавить пользователя</a>
</body>
</html>