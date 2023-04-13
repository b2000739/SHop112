<?
include '../nav.php';
?>
<form method='POST'>
	<input type="text" placeholder="добавить категорию" name="category">
	<input type="submit" value="Добавить" name='ok'>
</form>
<?

if ($_POST['ok']) {
	$req = "INSERT INTO `categories`(`name`) VALUES ('" . $_POST['category'] . "')";
	mysqli_query($link, $req);
	header('Location:index.php');
}
