<?
$link = mysqli_connect('localhost', 'root', '', 'shop');;
include "nav.php";
?>
<form method="POST" class='buy_form'>
	<input name='r_name' type='text' placeholder="Введите свое имя">
	<input name='surname' type='text' placeholder="Введите свою Фамилию">
	<input name='address' type='text' placeholder="Ваше место проживания">
	<input name='ph_number' type='text' placeholder="Введите номер телефона">
	<input type='submit' name='ok' value='добавить'>
</form>
<?
if ($_POST['ok']) {
	$name = $_POST['r_name'];
	$surname = $_POST['surname'];
	$adress = $_POST['address'];
	$phone = $_POST['ph_number'];
	$id = $_COOKIE['user_id'];
	$id_product = 1;
	$req = "INSERT INTO `orders` (`id_user`, `id_product`) VALUES (" . $id . "," . $id_product . ")";
	mysqli_query($link, $req) or die(mysqli_error($link));
	$req = "UPDATE `users` SET `r_name` = '$name', `surname` = '$surname', `phone` = '$phone', `adress` = '$adress' WHERE `id` = $id";
	mysqli_query($link, $req) or die(mysqli_error($link));
	header('Location:index.php');
}

include "footer.php";
?>