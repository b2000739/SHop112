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
	<form method='POST' enctype="multipart/form-data">
		<section class="add">
			<div class="container">
				<p>Введите название товара: <input type="text" name='title'> </p>
				<p>Введите цену товара: <input type='text' name="price"> </p>
				<p>Введите описание к товару<textarea name="description"></textarea></p>
				<p>Добавьте фото товара<input type='file' name="img"></p>
				<p>Выберите категорию вашего товара<select name='category'>
						<?
						$link = mysqli_connect('localhost', 'root', '', 'shop');
						$req = "SELECT * FROM `categories`";
						$res = mysqli_query($link, $req) or die(mysqli_error($link));
						$categories = [];
						while ($row = mysqli_fetch_assoc($res))
							$categories[] = $row;
						for ($i = 0; $i < count($categories); $i++) {
							echo "<option value='" . $categories[$i]['id'] . "'>" . $categories[$i]['name'] . "</option>";
						}
						$req = "SELECT * FROM `brands`";
						$res = mysqli_query($link, $req) or die(mysqli_error($link));
						$brands = [];
						while ($row = mysqli_fetch_assoc($res))
							$brands[] = $row;

						?>
					</select>
				</p>

				<p>Выберите бренд вашего товара<select name='brand'>
						<?
						for ($i = 0; $i < count($brands); $i++) {
							echo "<option value='" . $brands[$i]['id'] . "'>" . $brands[$i]['name'] . "</option>";
						}
						?>

					</select>
				</p>
			</div>
			<div class="container">
				<p> <input type='submit' name='ok' value='добавить'></p>
			</div>
	</form>
	</section>
</body>

</html>
<?php
if ($_POST['ok']) {
	$link = mysqli_connect('localhost', 'root', '', 'shop');
	$title = $_POST['description'];
	$price = $_POST['price'];
	$name_file = $_POST['title'];

	$img = $_FILES['img']['name'];
	copy($_FILES['img']['tmp_name'], '../assets/img/' . $img);
	$brand = $_POST['brand'];
	$category = $_POST['category'];
	$req = "INSERT INTO `product` (`name`, `price`, `description`, `photos`, `category`, `brand`) VALUES ('$name_file', '$price', '$title', '$img', '$category', '$brand')";
	mysqli_query($link, $req) or die(mysqli_error($link));
	header('Location:index.php');
}
