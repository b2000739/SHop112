<?
$link = mysqli_connect('localhost', 'root', '', 'shop');
$req = "SELECT * FROM `product`";
$result = mysqli_query($link, $req);
$product = [];
while ($row = mysqli_fetch_assoc($result))
	$product[] = $row;
echo '<pre>';
var_dump($product[0]);
echo '<pre>';
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
	<table>
		<tr>
			<th>ID</th>
			<th>name</th>
			<th>price</th>
			<th>description</th>
			<th>photos</th>
			<th>category</th>
			<th>brand</th>
		</tr>
		<?
		for ($i = 0; $i < count($product); $i++) {
			echo "<tr><td>" . $product[$i]["id"] . "</td><td>" . $product[$i]["name"] . "</td><td>" . $product[$i]["price"] . "</td><td>" . $product[$i]["description"] . "</td><td><img src='../assets/img/" . $product[$i]["photos"] . "'</td><td>" . $product[$i]["category"] . "</td><td>" . $product[$i]["brand"] . "</td><tr>";
		} ?>



	</table>


</body>

</html>