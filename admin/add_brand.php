<?
include '../nav.php';
?>
<form method='POST'>
	<input type="text" placeholder='добавить брэнд' name="brand">
	<input type="submit" value="Добавить" name='oke'>
</form>
<?
if ($_POST['oke']) {
	$req = "INSERT INTO `brands`(`name`) VALUES ('" . $_POST['brand'] . "')";
	mysqli_query($link, $req);
	header('Location:index.php');
}
