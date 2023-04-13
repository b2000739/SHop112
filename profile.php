<?
$link = mysqli_connect('localhost', 'root', '', 'shop');
$req = "SELECT * FROM `users` WHERE `id` = " . $_COOKIE["user_id"];
$result = mysqli_fetch_assoc(mysqli_query($link, $req));
?>
<!DOCTYPE html>
<html lang='ru'>

<head>
	<meta charset='UTF-8'>
	<meta hhtp-equiv='X-UA-Compatible' content='IE=edge'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<title>Project</title>
	<link rel='stylesheet' href='style.css'>
</head>

<body>
	<h2>Ваш логин: <? echo $result['name'] ?> </h2>
	<h2>Ваша почта: <? echo $result['mail'] ?> </h2>
	<a href='change.php'>Изменить данные</a>
</body>

</html>