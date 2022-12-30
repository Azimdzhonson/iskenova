<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Untitled Document</title>
</head>

<body>
<?php 
require 'connect.php';
$first_name = trim($_REQUEST['first_name']);
$last_name = trim($_REQUEST['last_name']);
$email = trim($_REQUEST['email']);
$facebook = trim($_REQUEST['facebook']);

$position = true;
if(preg_match("/^http:\/\/www.facebook.com\//", $facebook))
{$position = false;}
else if(preg_match("/^www.facebook.com\//", $facebook))
{$position = false;
$facebook = "http://" . $facebook;}
else if($position)
{$facebook = "http://www.facebook.com/" . $facebook;}


$insert_sql = "INSERT INTO users (first_name, last_name, email, facebook)" .
"VALUES('{$first_name}', '{$last_name}', '{$email}', '{$facebook}');";
mysql_query($insert_sql);
echo "<p>Новая запись вставлена в базу!</p>";
?>
</body>
<a href="../search_user.html">Вернуться к поиску</a><br/><br/>
<a href="../info_form.html">Добавить пользователя</a>
</html>