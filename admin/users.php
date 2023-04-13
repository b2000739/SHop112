<?php
$link = mysqli_connect('localhost', 'root', '', 'shop');
$req = "SELECT * FROM `users`";
$result = mysqli_query($link, $req);

$users = [];
while ($row = mysqli_fetch_assoc($result))
	$users[] = $row;
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
			<th>ID</th>
			<th>Ник</th>
			<th>Почта</th>
			<th>Имя</th>
			<th>Фамилия</th>
			<th>Телефон</th>
			<th>Адресс</th>
			<th>Роль</th>
			<p><?

				?>
			</p>
		</tr>
		<?
		for ($i = 0; $i < count($users); $i++) {
			echo "<tr>";
			echo "<td>" . $users[$i]['id'] . "</td><td>" . $users[$i]['name'] . "</td><td>" . $users[$i]['mail'] . "</td><td>" . $users[$i]['r_name'] . "</td><td>" . $users[$i]['surname'] . "</td><td>" . $users[$i]['phone'] . "</td><td>" . $users[$i]['adress'] . "</td><td class='role' id = " . $users[$i]['id'] . ">" . $users[$i]['role'];
			echo "</tr>";
		}
		?>
	</table>
	<script type="text/javascript" src="jquery-3.6.1.min.js"></script>
	<script type='text/javascript' src='js.js'></script>
</body>

</html>