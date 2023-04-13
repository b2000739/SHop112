<!DOCTYPE html>
<html lang='ru'>

<head>
	<meta charset='UTF-8'>
	<meta hhtp-equiv='X-UA-Compatible' content='IE=edge'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<title>Project</title>
	<link rel='stylesheet' href='style.css'>
</head>

<body><?
		$link = mysqli_connect('localhost', 'root', '', 'shop');
		$req = "SELECT * FROM `users` WHERE `id` = " . $_COOKIE["user_id"];
		$result = mysqli_fetch_assoc(mysqli_query($link, $req));
		?>
	<form method='POST' enctype="multipart/form-data">
		<p>Имя пользователя: <input type='text' name='name' value='<? echo $result['name'] ?>'></p>
		<p>Ваша почта: <input type='text' name='mail' value='<? echo $result['mail'] ?>'></p>
		<p>Изначальный пароль*: <input type='text' name='password-id'></p>
		<p>Новый пароль: <input type='text' name='password'></p>
		<p>Новый пароль(повторить): <input type='text' name='password-s'></p>
		<p><input type='submit' name='ok' value='добавить'></p>
	</form>
	<?php
	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$password_id = $_POST['password-id'];
	$password_s = $_POST['password-s'];
	$password = $_POST['password'];
	$cookie = $_COOKIE["user_id"];
	if ($_POST['ok']) {

		if (password_verify($password_id, $result['password'])) {
			echo "По кайфу <br>";
			if (isset($password) && $password == $password_s) {
				$password =  password_hash($password, PASSWORD_BCRYPT);
				$req = "UPDATE `users` SET `name` = '$name', `password` = '$password', `mail` = '$mail'";
			} else {
				$req = "UPDATE `users` SET `name` = '$name', `mail` = '$mail'";
			}
			$req .= " WHERE `id` =" . $cookie;
			mysqli_query($link, $req) or die(mysqli_error($link));
		} else echo 'Изначальный пароль не правилен';
	}
	?>
</body>

</html>