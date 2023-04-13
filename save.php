<?
$productId = $_POST['info'];
$idUsers = $_COOKIE['user_id'];
$link = mysqli_connect("localhost", "root", "", "shop");


if ($_POST['idProduct']) {
	$idProduct = $_POST['idProduct'];
	$idUsers = $_COOKIE['user_id'];
	$req = "INSERT INTO `cart` (`product_id` , `user_id` ) VALUES
(" . $idProduct . "," . $idUsers . ")";
	mysqli_query($link, $req) or die(mysqli_error($link));
	echo ('ok');
}


// if ($_POST['productId']) {
// 	$productId = $_POST['productId'];
// 	$req = "INSERT INTO `favorite` (`product_id` , `user_id` ) VALUES (" . $productId . "," . $idUsers . ")";
// 	mysqli_query($link, $req) or die(mysqli_error($link));
// 	echo ('ok');
// }
if ($_POST['info']) {
	$productId = $_POST['info'];
	$req = "SELECT * FROM `favorite` WHERE `product_id` =" . $productId . " AND `user_id` =" . $idUsers;

	$result = mysqli_query($link, $req) or die(mysqli_error($link));
	if (mysqli_fetch_assoc($result)) {
		$req = "DELETE FROM `favorite` WHERE `product_id` =" . $productId . " AND `user_id` =" . $idUsers;

		mysqli_query($link, $req) or die(mysqli_error($link));
		echo ('ok');
	} else {
		$req = "INSERT INTO `favorite` (`product_id` , `user_id` ) VALUES (" . $productId . "," . $idUsers . ")";

		mysqli_query($link, $req) or die(mysqli_error($link));
		echo ('ok');
	}
}
// if ($_POST['delete']) {
// 	$productId = $_POST['delete'];
// 	$req = "DELETE * FROM `favorite` WHERE `product_id` =" . $productId . "AND `user_id` =" . $idUsers;
// }
