<?
$link = mysqli_connect("localhost", "root",  "", "shop");
if (isset($_GET['logout'])) {
	setcookie('user_id', '');
	header("Location: /");
}
if ($_COOKIE['user_id']) {
	$id_user = $_COOKIE['user_id'];
	$result = mysqli_query($link, "SELECT * FROM `users` WHERE `id` ='" . $id_user . "'");
	$user = mysqli_fetch_assoc($result);
	$query = "SELECT COUNT('product_id') as `count` FROM `cart` WHERE `user_id` = " . $_COOKIE['user_id'];
	$res = mysqli_query($link, $query);
	$count = mysqli_fetch_assoc($res)['count'];
} else {
	$count = 0;
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/nav.css?<?php echo time() ?>">
	<link rel="stylesheet" href="../assets/css/style.css?<?php echo time() ?>">
	<title>Document</title>
</head>

<body>


	<div class='head'>
		<h2><a href='contact.php'>Contact</a></h2>
		<h2><a href='index.php'>Home</a></h2>
		<h2><a href='news.php'>News</a></h2>
		<h2><a href='admin/'>Admin panel</a> </h2>
		<? if (!$_COOKIE['user_id']) {
			echo "<h2><a href='register.php'>Registration</a></h2>";
			echo "<h2><a href='login.php'>LogIn</a></h2>";
		} else {
			echo "<h2><a href='?logout=1'> Выйти  </a></h2>";
			echo "<h2><a href = 'profile.php'> Профиль </a></h2";
		}

		?>
		<h2><a href='heart.php'><i class='fa fa-heart fa-2x'></i></a></h2>

		<a href='cart.php'>
			<div class="cart">
				<a href="cart.php"><i class='fa fa-shopping-cart fa-2x'></i></a>
				<div class="number-product"><? echo $count ?></div>

			</div>
		</a>
	</div>