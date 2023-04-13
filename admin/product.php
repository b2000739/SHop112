<?php
$link = mysqli_connect('localhost', 'root', '', 'shop');
$req = "SELECT * FROM `product`";
$result = mysqli_query($link, $req);

$product = [];
while ($row = mysqli_fetch_assoc($result))
	$product[] = $row;

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>

<body>
	<table>
		<tr>
			<th>Название</th>
			<th>Описание</th>
			<th>Фото</th>
			<th>Категория</th>
			<th>Бренд</th>
			<th>Цена</th>
			<th>Опции</th>

		</tr>

		<?
		for ($i = 0; $i < count($product); $i++) {
			echo "<tr>";
			$req = "SELECT `category` FROM `product` WHERE `id` =" . $product[$i]['id'];
			$result = mysqli_fetch_assoc(mysqli_query($link, $req))['category'];
			$req = "SELECT `name` FROM `categories` WHERE `id` =" . $result;
			$category = mysqli_fetch_assoc(mysqli_query($link, $req))['name'];

			$req = "SELECT `brand` FROM `product` WHERE `id` =" . $product[$i]['id'];
			$result = mysqli_fetch_assoc(mysqli_query($link, $req))['brand'];
			$req = "SELECT `name` FROM `brands` WHERE `id` =" . $result;
			$brand = mysqli_fetch_assoc(mysqli_query($link, $req))['name'];


			echo "<td>" . $product[$i]['name'] . "</td><td>" . $product[$i]['description'] . "</td><td><img src ='../assets/img/" . $product[$i]['photos'] . "'></td><td>" . $category . "</td><td>" . $brand . "</td><td>" . $product[$i]['price'] . "</td>
			<td>
			
			<i class='fa fa-trash-o fa-fw gds-delete' id=" . $product[$i]['id'] . "></i>
			
			<a href='edit_product.php?id=" . $product[$i]['id'] . "'>
			<i class='fa fa-wrench fg fw' ></i>
			</td>";
			echo "</tr>";
		}


		?>
	</table>
	<script type="text/javascript" src="jquery-3.6.1.min.js"></script>
	<script type='text/javascript' src='js.js'></script>
</body>

</html>
<?// for ($i = 0; $i < count($product); $i++) {
		// 	echo "<div class='product-item'> 
		// 			<div class='product-img'>
		// 				<img src='../assets/img/" . $product[$i]['photos'] . "'>
		// 			</div> 
		// 			<div class='product-list'>
		// 			<i class='fa fa-trash-o fa-fw gds-delete' id=" . $product[$i]['id'] . "></i>
		// 				<h3><a href='fullproduct.php?id=" . $product[$i]['id'] . "'>" .
		// 		$product[$i]['Name'] . "</a></h3>
		// 				<div class='descripription'><p>" . $product[$i]['description'] .
		// 		"</div><span class='price'>" . $product[$i]['Price'] . "</span>";
		// 	echo "</div></div>";
