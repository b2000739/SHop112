<!DOCTYPE html>
<html lang='ru'>

<head>
	<meta charset='UTF-8'>
	<meta hhtp-equiv='X-UA-Compatible' content='IE=edge'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<title>Project</title>
	<link rel='stylesheet' href='assets/css/style.css'>
</head>

<body>
	<section class='register'>
		<div class="container">
			<form method='POST' enctype="multipart/form-data">
				<p>Имя пользователя: <input type="text" name='name'> </p>
				<p>Пароль: <input type='text' name='password'> </p>
				<p>Повторить пароль:<input type='text' name='password-s'></p>
				<p>Ваша почта:<input type='text' name="mail"></p>
				<p><input type='submit' name='ok' value='добавить' class='btn'></p>
			</form>

		</div>
		<div class="container signin">
			<p>Уже есть аккаунт? <a href="login.php">Sign in</a>.</p>
		</div>
	</section>
</body>

</html>
<?php
$link = mysqli_connect('localhost', 'root', '', 'shop');
$name = $_POST['name'];
$mail = $_POST['mail'];
if ($_POST['ok']) {
	$hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
	$result = mysqli_query($link, "SELECT * FROM `users` WHERE `name`='" . $name . "'");
	if (mysqli_num_rows($result) > 0) {
		echo 'Аккаунт с таким именем уже существует';
	} else if ($_POST['password-s'] == $_POST['password']) {
		$password = $hash;
		$sql = "INSERT INTO `users` (`name`, `password`,`mail`, `r_name`, `surname`,`phone`,`adress`,`role`) VALUES ('$name', '$password', '$mail','','','','',0)";
		echo (mysqli_query($link, $sql) or die(mysqli_error($link))) ?  header('Location: login.php') :  'все плохо';
	} else {
		echo 'пароли не совпадают';
	}
}
