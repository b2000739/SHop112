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
	<section class="login">
		<div class='container'>
			<form method='POST' enctype="multipart/form-data">
				<p>Имя пользователя: <input type="text" name='name'> </p>
				<p>Пароль: <input type='text' name='password'> </p>
				<p><input type='submit' name='ok' value='добавить' class='btn'></p>
			</form>
		</div>
	</section>
</body>
<img src="" alt="">

</html>
<?php
$link = mysqli_connect("localhost", 'root', '', 'shop');
$name = $_POST['name'];
$query = "SELECT * FROM `users` WHERE `name` = $name";
$response = mysqli_query($link, $query);

// if (isset($_POST) && $response) {
// 	$hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
// 	$query = "SELECT * FROM `users` WHERE `password` = $hash ";
// 	$response = mysqli_query($link, $query);
// 	if ($response) {
// 		setcookie('username', $name) or die(mysqli_error($link));
// 		$name = $_POST['name'];
// 		$query = "SELECT `id` FROM `users` WHERE `name` = $name ";
// 		$response = (mysqli_query($link, $query));
// 		setcookie('user_id', $response);
// 		echo "<a href='index.php'>Перейти на главную</a>";
// 	};
// } else echo 'все плохо';
if ($_POST['ok']) {
	$name = $_POST['name'];
	$password = $_POST['password'];
	$result = mysqli_query($link, "SELECT * FROM `users` WHERE `name`='" . $name . "'");
	if (mysqli_num_rows($result) > 0) {
		$user = mysqli_fetch_assoc($result);
		if (password_verify($password, $user['password'])) {
			setcookie('user_id', $user['id']);
			$new_url = 'index.php';
			header('Location: ' . $new_url);
		} else {
			echo 'Пароль не верный';
		}
	} else {
		echo "Логин или пароль не верный";
	}
}
?>