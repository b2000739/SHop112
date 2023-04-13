<?
include '../nav.php';
?>
<form method='POST'>
	<input type="text" name="category">
	<input type="submit" value="ok" name='ok'>
</form>
<form method='POST'>
	<input type="text" name="brand">
	<input type="submit" value="oke" name='oke'>
</form>
<?
if ($_POST['ok']) {
	$req = "INSERT INTO `categories`(`name`) VALUES ('" . $_POST['category'] . "')";
	mysqli_query($link, $req);
}
if ($_POST['oke']) {
	$req = "INSERT INTO `brands`(`name`) VALUES ('" . $_POST['brand'] . "')";
	mysqli_query($link, $req);
}
