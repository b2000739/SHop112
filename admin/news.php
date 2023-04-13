<?php
$link = mysqli_connect('localhost', 'root', '', 'shop');
$req = 'SELECT `n` .`id` AS `news_id`, `n` .`Header`, `n` .`under_header`, `n` .`author_id`, `n` .`views`, `n` .`reads_count`, `n` .`likes`, `n` .`dislikes`, `n` .`key_words`, `n` .`time`, `u`.`id` AS `user_id`, `u`.`name` FROM `News` `n` , `users` `u` WHERE `u`.`id` = `n`.`author_id`';
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
	<table border="1">
		<tr>
			<th>id</th>
			<th>Название</th>
			<th>Подзаголовок</th>
			<th>ID автора</th>
			<th>Имя автора</th>
			<th>Просмотры</th>
			<th>Колличество дочитываний</th>
			<th>Лайки</th>
			<th>Дизлайки</th>
			<th>Ключевые слова</th>
			<th>Время публикации</th>
			<th>Опции</th>
		</tr>
		<?php
		for ($i = 0; $i < count($product); $i++) {


			echo '<tr>';
			echo '<td>' . $product[$i]['news_id'] . '</td><td>' . $product[$i]['Header'] . '</td><td>' . $product[$i]['under_header'] . '</td><td>' . $product[$i]['author_id'] . '</td><td>' . $product[$i]['name'] . '</td><td>' . $product[$i]['views'] . '</td><td>' . $product[$i]['reads_count'] . '</td><td>' . $product[$i]['likes'] . '</td><td>' . $product[$i]['dislikes'] . '</td><td>' . $product[$i]['key_words'] . '</td><td>' . $product[$i]['time'] . '</td><td>
			
			<i class="fa fa-trash-o fa-fw gds-delete_n" id="' . $product[$i]['news_id'] . '"></i>
			
			<a href="edit_news.php?id=' . $product[$i]['news_id'] . '">
			<i class="fa fa-wrench fg fw" ></i>
			</td>';
			echo '</tr>';
		}
		?>
		<script type="text/javascript" src="jquery-3.6.1.min.js"></script>
		<script type='text/javascript' src='js.js'></script>

</body>

</html>