<head>
	<link rel="stylesheet" href="../assets/css/style.css?<?php echo time() ?>">
</head>


<? include 'nav.php'; ?>



</form>
<section class='catalog'>
	<div class='product-list'>

		<? include 'catalog.php' ?>

		<?
		$req = "SELECT `product_id`,COUNT(`product_id`) AS `product_h`
	FROM `cart`
	GROUP BY `product_id`
	ORDER BY `product_h` DESC
	LIMIT 5";
		$result = mysqli_query($link, $req) or die(mysqli_error($link));
		while ($row = mysqli_fetch_assoc($result))
			$product_id[] = $row['product_id'];


		for ($i = 0; $i < count($product_id); $i++) {
			$req = "SELECT * FROM `product` WHERE `id` =" . $product_id[$i];
			$top[] = mysqli_fetch_assoc(mysqli_query($link, $req)) or die(mysqli_error($link));
		}
		for ($i = 0; $i < count($product_id); $i++) {
			echo "<div class='product-item'>";

			if ($_COOKIE['user_id']) {
				$req = "SELECT * FROM `favorite` WHERE `product_id` =" . $top[$i]['id'] . " AND `user_id` =" . $_COOKIE['user_id'];

				$result = mysqli_query($link, $req) or die(mysqli_error($link));


				if (mysqli_fetch_assoc($result)) {
					echo "<div class = 'heart pink' id ='" . $top[$i]['id'] . "'><i class='fa fa-heart' aria-hidden='true'></i></div>";
				} else {
					echo "<div class = 'heart' id ='" . $top[$i]['id'] . "'><i class='fa fa-heart' aria-hidden='true'></i></div>";
				}
			} else {
				echo "<div class = 'heart' id ='" . $top[$i]['id'] . "'><i class='fa fa-heart' aria-hidden='true'></i></div>";
			}

			$req = "SELECT AVG(`rating`) AS `allRating` FROM `feedback` WHERE `product_id` =" . $top[$i]['id'];
			$result = mysqli_query($link, $req);
			$rating = (mysqli_fetch_assoc($result)['allRating']);

			if ($rating) {
				echo "<div class = 'rating'><i class= 'fa fa-star'></i>" . bcdiv($rating, '1', '2') . "</div>";
			} else {
				echo "<div class = 'no-rating'><i class= 'fa fa-star'></i></div>";
			}

			//	if()



			echo "<div class='product-img'>
						<img src='../assets/img/" . $top[$i]['photos'] . "'>
					</div> 
					<div class='product-text'>
						<h3>" . $top[$i]['name'] . "</h3>
			<div class='block'><div class='description'><a href='fullproduct.php?id=" . $top[$i]['id'] . "'><p>Описание</p></a></div><span class='price'>" . $top[$i]['price'] . "&#8381</span>";
			echo "</div></div></div>";
		}
		for ($i = 0; $i < count($product); $i++) {
			echo "<div class='product-item'>";

			if ($_COOKIE['user_id']) {
				$req = "SELECT * FROM `favorite` WHERE `product_id` =" . $product[$i]['id'] . " AND `user_id` =" . $_COOKIE['user_id'];

				$result = mysqli_query($link, $req) or die(mysqli_error($link));


				if (mysqli_fetch_assoc($result)) {
					echo "<div class = 'heart pink' id ='" . $product[$i]['id'] . "'><i class='fa fa-heart' aria-hidden='true'></i></div>";
				} else {
					echo "<div class = 'heart' id ='" . $product[$i]['id'] . "'><i class='fa fa-heart' aria-hidden='true'></i></div>";
				}
			} else {
				echo "<div class = 'heart' id ='" . $product[$i]['id'] . "'><i class='fa fa-heart' aria-hidden='true'></i></div>";
			}

			$req = "SELECT AVG(`rating`) AS `allRating` FROM `feedback` WHERE `product_id` =" . $product[$i]['id'];
			$result = mysqli_query($link, $req);
			$rating = (mysqli_fetch_assoc($result)['allRating']);

			if ($rating) {
				echo "<div class = 'rating'><i class= 'fa fa-star'></i>" . bcdiv($rating, '1', '2') . "</div>";
			} else {
				echo "<div class = 'no-rating'><i class= 'fa fa-star'></i></div>";
			}

			//	if()



			echo "<div class='product-img'>
						<img src='../assets/img/" . $product[$i]['photos'] . "'>
					</div> 
					<div class='product-text'>
						<h3>" . $product[$i]['name'] . "</h3>
			<div class='block'><div class='description'><a href='fullproduct.php?id=" . $product[$i]['id'] . "'><p>Описание</p></a></div><span class='price'>" . $product[$i]['price'] . "&#8381</span>";
			echo "</div></div></div>";
		}
		?>
	</div>
</section>
<?php
include "footer.php"
?>