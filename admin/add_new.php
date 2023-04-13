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
	<section class="add">


		<form method='POST' enctype="multipart/form-data">
			<div class="container">
				<p>Введите название cтатьи: <input type="text" name='title'> </p>
				<p>Введите примерное содержание статьи:<textarea name="description"></textarea></p>
				<p>Введите ключевые слова: <input type='text' name="price"> </p>
			</div>
			<div class="container">
				<p> <input type='submit' name='ok' value='добавить'></p>
			</div>
		</form>
	</section>
</body>

</html>
<?
if ($_POST['ok']) {
	$link = mysqli_connect('localhost', 'root', '', 'shop');
	$title = $_POST['description'];
	$price = $_POST['price'];
	$name_file = $_POST['title'];
	$id = $_COOKIE['user_id'];
	$t = time();
	$t = date("Y-m-d", $t);
	$req = "INSERT INTO `News` (`Header`, `under_header`, `author_id`, `views`, `reads_count`, `likes`, `dislikes`, `key_words`, `time`) VALUES ('$name_file', '$title', $id, 1, 1, 0, 0, '$price', '$t')";
	mysqli_query($link, $req) or die(mysqli_error($link));
	header('Location:index.php');
}
