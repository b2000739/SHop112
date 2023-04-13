<?php
$id = $_GET['id'];
$link = mysqli_connect('localhost', 'root', '', 'shop');
$req = "SELECT * FROM `product` WHERE `id` =" . $id;
$result = mysqli_query($link, $req);
$product = mysqli_fetch_assoc($result);
if ($_POST['ok']) {
	$name = $_POST['title'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$brand = $_POST['brand'];
	$category = $_POST['category'];
	$req = "UPDATE `product` SET `name`='$name' ,`price`= $price,`description`= '$description',`category` = $category, `brand` = $brand";
	if ($_FILES['img']['name']) {
		$req .= ', `photos` = "' . $_FILES['img']['name'] . '"';
		copy($_FILES['img']['tmp_name'], '../assets/img/' . $_FILES['img']['name']);
		echo $req;
	}
	$req .= " WHERE `id` = $id";

	mysqli_query($link, $req) or die(mysqli_error($link));
	$url = 'edit_product.php?id=' . $id;
	header('Location:product.php');
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
		<p>Название товара: <input type='text' name='title' value='<? echo $product['name'] ?>'></p>
		<p>Описание товара: <textarea name='description'> <? echo $product['description'] ?> </textarea></p>
		<p>Цена товара: <input type='text' name='price' value='<? echo $product['price'] ?>'></p>
		<p>Фото товара: <input type='file' name='img' value='<? echo $product['photos'] ?>'></p>
		<p>Выберите категорию вашего товара<select name='category'>
				<?
				$link = mysqli_connect('localhost', 'root', '', 'shop');
				$req = "SELECT * FROM `categories`";
				$res = mysqli_query($link, $req) or die(mysqli_error($link));
				$categories = [];
				while ($row = mysqli_fetch_assoc($res))
					$categories[] = $row;
				for ($i = 0; $i < count($categories); $i++) {
					if ($categories[$i]['id']  == $product['category']) {
						echo "<option value='" . $categories[$i]['id'] . "'selected>" . $categories[$i]['name'] . "</option>";
					} else {
						echo "<option value='" . $categories[$i]['id'] . "'>" . $categories[$i]['name'] . "</option>";
					}
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

					if ($brands[$i]['id']  == $product['brand']) {
						echo "<option value='" . $brands[$i]['id'] . "' selected>" . $brands[$i]['name'] . "</option>";
					} else {
						echo "<option value='" . $brands[$i]['id'] . "'>" . $brands[$i]['name'] . "</option>";
					}
				}
				?>

			</select>
		</p>
		<p><input type='submit' value="Сохранить" name='ok'></p>
	</form>
</body>

</html>