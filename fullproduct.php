<?php
$id = $_GET['id'];
$link = mysqli_connect('localhost', 'root', '', 'shop');
$req = "SELECT * FROM `product` WHERE `id` =" . $id;
$result = mysqli_query($link, $req);
$product = mysqli_fetch_assoc($result);
if ($_COOKIE['user_id']) {
	$req = "SELECT * FROM `favorite` WHERE `product_id` =" . $id . " AND `user_id` =" . $_COOKIE['user_id'];
} else {
	$req = "SELECT * FROM `favorite` WHERE `product_id` =" . $id;
}

$result = mysqli_query($link, $req) or die(mysqli_error($link));



$req = "SELECT AVG(`rating`) AS `allRating` FROM `feedback` WHERE `product_id` =" . $id;
$result = mysqli_query($link, $req);
$rating = (mysqli_fetch_assoc($result)['allRating']);
$req = "SELECT COUNT(*) FROM `feedback` WHERE `product_id` = $id";
$result = mysqli_query($link, $req);
$counter = mysqli_fetch_assoc($result)["COUNT(*)"];
include "nav.php";

?>
<!DOCTYPE html>
<html lang='ru'>



<body>
	<section class="fullproduct">
		<div class="name">
			<p><? echo $product['name'] ?></p>
		</div>
		<div class="content_all">
			<div class="content_box">
				<div class="text_box">
					<div class="price">
						<p><? echo $product['price'] ?>&#8381</p>
					</div>
					<div class="description">
						<p><? echo $product['description'] ?> </p>
					</div>

					<?
					if ($_COOKIE['user_id']) {
						echo "<div class = 'cartadd' id =" . $product['id'] . "><div class='cart'><img src='..\assets\img\shopping-cart.png'></div><p>Добавить в корзину</p></div>";
					} else {
						echo "<h4>Для того, чтобы добавить товар в корзину необходимо атворизоваться!</h4>";
					}
					?>
					<div class="ico_box">
						<?
						if ($rating) {
							echo "<div class = 'rating'><i class= 'fa fa-star'></i>" . bcdiv($rating, '1', '2') . "</div>";
							echo "<div class = count>&nbsp<a href ='#feedback'>" . $counter . " отзывов</a></div>";
						} else {
							echo "<div class = 'no-rating'><i class= 'fa fa-star'></i></div>";
						}
						if (mysqli_fetch_assoc($result)) {
							echo "<div class = 'heart pink' id =" . $product['id'] . "><i class='fa fa-heart' aria-hidden='true'></i> добавить в избранное</div>";
						} else {
							echo "<div class = 'heart' id =" . $product['id'] . "><i class='fa fa-heart' aria-hidden='true'></i> В избраное</div>";
						}
						?>
					</div>
				</div>
				<div class="photo"> <img src="assets/img/<? echo $product['photos'] ?>"> </div>
			</div>



			<?
			$req = "SELECT * FROM `feedback` WHERE `product_id` = $id";
			$result = mysqli_query($link, $req);
			$feedback = [];
			while ($row = mysqli_fetch_assoc($result))
				$feedback[] = $row;


			echo "<div class = 'feedback'><h2 id='feedback'>Отзывы</h2>";
			echo "<div class='feed_box'>";
			echo "<div class = 'left_box'>";
			$j = 0;
			echo "<div class = 'open_box'>";
			echo "<div class = 'stars'>";
			for ($i = 0; $i < 5; $i++) {
				if ($j < round($rating)) {
					$j++;
					echo "<img src = 'assets/img/star.png'>";
				} else {
					echo "<img src = 'assets/img/star-gray.png'>";
				}
			}
			echo "</div>";
			echo "<div class = 'rating'>" . round($rating) . " из 5 </div>";
			echo "</div>";
			echo "<div class='line_box'>";
			for ($i = 5; $i != 0; $i--) {
				$req = "SELECT COUNT(*) FROM `feedback` WHERE `rating` =" . $i . " AND `product_id` =" . $id;
				$result = mysqli_query($link, $req);
				$count_r = mysqli_fetch_assoc($result)['COUNT(*)'];
				$j = $i;
				echo "<div class= 'line'>";
				echo "<div class = 'rating'>"  . $i . "</div>";
				echo "<div class = 'stars'>";
				for ($x = 0; $x < 5; $x++) {
					if ($j > $x) {

						echo "<img src = 'assets/img/star.png'>";
					} else {
						echo "<img src = 'assets/img/star-gray.png'>";
					}
				}
				$j = 0;
				echo "</div>";
				echo "<div class= 'rating'>$count_r</div>";
				echo "</div>";
			}
			echo "</div>";


			echo "</div>";
			?>
			<div class='user_box'>
				<form method='POST' enctype="multipart/form-data" class='form'>
					<div class='txt_box'>

						<div class='txt'>
							<p>Ваша оценка </p>
						</div>
						<div class='rating-area'><input type="radio" id="star-5" name="rating" value="5">
							<label for="star-5" title="Оценка «5»"></label>
							<input type="radio" id="star-4" name="rating" value="4">
							<label for="star-4" title="Оценка «4»"></label>
							<input type="radio" id="star-3" name="rating" value="3">
							<label for="star-3" title="Оценка «3»"></label>
							<input type="radio" id="star-2" name="rating" value="2">
							<label for="star-2" title="Оценка «2»"></label>
							<input type="radio" id="star-1" name="rating" value="1">
							<label for="star-1" title="Оценка «1»"></label>

						</div>
					</div>
					<div class='form_box'>
						<textarea type='text' name='feedback' class='form'>Отзыв</textarea>
						<div class='btn'><input type='submit' name='ok' value='добавить'></div>
					</div>
				</form>
				<div class='comment_box'>
					<? for ($i = 0; $i < count($feedback); $i++) {
						if ($feedback[$i]['text'] != '' && $feedback[$i]['text'] != 'Отзыв') {
							$req = "SELECT `name` FROM `users` WHERE `id` =" . $feedback[$i]['user_id'];
							$result = mysqli_query($link, $req);
							$user = mysqli_fetch_assoc($result)['name'];

							$date = $feedback[$i]['date'];
							$text = $feedback[$i]['text'];
							$rating = $feedback[$i]['rating'];
							echo
							"<div class = 'comment_line'>
								<div class = 'first_row'>
									<div class='ico_el'> <img src='assets/img/ico.png'></div>
									<div class='user-name'> <p>" . $user . "</p></div>
								</div>
								<div class = 'second_row'> 
									<div class= 'stars'>";
							for ($j = 0; $j < 5; $j++) {
								if ($j < $rating) {
									echo "<img src = 'assets/img/star.png'>";
								} else {
									echo "<img src = 'assets/img/star-gray.png'>";
								}
							}
							echo
							"</div>
									<div class='date'><p>" . $date . "</p></div>
								
								</div>
								<div class = 'comment'><p>" . $text . "</p></div>
							
						</div>
						";
						}
					} ?>
				</div>
			</div>
			<?
			if ($_POST['ok'] && $_POST['rating'] != '') {
				$idUser = $_COOKIE['user_id'];
				$feedback = $_POST['feedback'];
				$rate = $_POST['rating'];
				$date = date('Y-m-d' /*H:i:s*/);
				$req = "INSERT INTO `feedback` (`user_id` , `product_id`, `text`, `rating`, `date`)  VALUES (" . $idUser . "," . $id . ",'" . $feedback . "'," . $rate . ",'" . $date . "')";
				mysqli_query($link, $req) or die(mysqli_error($link));
				echo "<script>window.location = 'fullproduct.php?id=" . $id . "'</script>";
			};

			?>

			<? echo "</div></div></section>";

			include "footer.php"
			?>