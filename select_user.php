 <!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Selected User</title>
</head>

<body>
<?php
require 'scripts/connect.php';
$first_name = trim($_REQUEST['first_name']);
$last_name = trim($_REQUEST['last_name']);

$sql_select = "SELECT * FROM users WHERE first_name='$first_name' && last_name='$last_name'";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);

if($row)
{
	printf("<p>Пользователь: " .$row['first_name'] . " " .$row['last_name'] ."</p> 
	<p><i>Контактные данные</i></p><p>E-mail: " .$row['email'] . "</p><p>Facebook: " .$row['facebook'] . "</p>---------<br/>"
	);
}
else{echo ("Пользователя с таким именем в базе нет<br/><br/>");}


?>
<a href="search_user.html">Вернуться к поиску</a><br/><br/>
<a href="info_form.html">Добавить пользователя</a>
</body>
</html>