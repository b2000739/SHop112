<?
include '../nav.php';
$id = $_COOKIE['user_id'];

$req = "SELECT `role` FROM `users` WHERE `id`=" . $id;
$result = mysqli_query($link, $req);
$result = mysqli_fetch_assoc($result)['role'];





if ($result) {
	$req = 'SELECT COUNT(*) FROM `product`';
	$products = mysqli_fetch_assoc(mysqli_query($link, $req))['COUNT(*)'];
	$req = 'SELECT COUNT(*) FROM `users`';
	$users = mysqli_fetch_assoc(mysqli_query($link, $req))['COUNT(*)'];
	$req = 'SELECT COUNT(*) FROM `news`';
	$news = mysqli_fetch_assoc(mysqli_query($link, $req))['COUNT(*)'];

	$req = 'SELECT `name` FROM `product` WHERE `id` = (SELECT MAX(`id`) FROM `product`)';
	$product = mysqli_fetch_assoc(mysqli_query($link, $req))['name'];
	$req = 'SELECT `name` FROM `users` WHERE `id` = (SELECT MAX(`id`) FROM `users`)';
	$user = mysqli_fetch_assoc(mysqli_query($link, $req))['name'];
	$req = 'SELECT `Header` FROM `News` WHERE `id` = (SELECT MAX(`id`) FROM `News`)';
	$new = mysqli_fetch_assoc(mysqli_query($link, $req))['Header'];
	echo "
	<!DOCTYPE html>
	<html lang='ru'>

	<head>
		<link rel='stylesheet' href='style.css'>
	</head>

	<body>
	</body>

	</html>
	<section class='index'>
		<a href='product.php'>Каталог товаров</a>
		<a href='users.php'>Каталог пользователей</a>
		<a href='news.php'>Каталог новостей</a>
		<a href='add_brand.php'>Создать новый бренд</a>
		<a href='add_category.php'>Создать новый класс</a>
		<a href='add_product.php'>Добавить товар</a>
		<a href='add_new.php'>Добавить новость</a>
		
		<div class='besti'>
			<div class='product'>
				<p>Всего $products продуктов</p>
				<p>Последний товар $product </p>
			</div>
			<div class='user'>
				<p>Всего $users </p>
				<p>Последний пользователь $user </p>
			</div>
			<div class='new'>
				<p>Всего $news </p>
				<p>Последняя новость $new </p>
			</div>
		</div>
	</section>
	";
} else {
	echo 'Эта страница недоступна для вас, у вас нет прав';
}
include '../footer.php';
