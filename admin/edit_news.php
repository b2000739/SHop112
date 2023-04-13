<?php
$id = $_GET['id'];
$link = mysqli_connect('localhost', 'root', '', 'shop');
$req = "SELECT * FROM `News` WHERE `id`=" . $id;
$result = mysqli_query($link, $req);
$product = mysqli_fetch_assoc($result);
if ($_POST['ok']) {
	$name = $_POST['title'];
	$description = $_POST['description'];
	$word = $_POST['key_words'];
	$req = "UPDATE `News` SET `Header`='$name' ,`under_header`= '$description',`key_words`= '$word' WHERE `id` = $id";

	echo $req;
	mysqli_query($link, $req) or die(mysqli_error($link));
	$url = 'edit_news.php?id=' . $id;
	header('Location:news.php');
}
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
	<form method="post" enctype='multipart/form-data'>
		<p>Название статьи: <input type='text' name='title' value='<? echo $product['Header'] ?>'></p>
		<p>содержание статьи: <textarea name='description'> <? echo $product['under_header'] ?> </textarea></p>
		<p>Ключевые слова: <input type='text' name='key_words' value='<? echo $product['key_words'] ?>'></p>

		<p><input type='submit' value="Сохранить" name='ok'></p>
	</form>
</body>

</html>