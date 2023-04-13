<?
$link = mysqli_connect('localhost', 'root', '', 'shop');
// "SELECT * FROM `product` WHERE `id` = `product_id` FROM `cart` WHERE `user_id`  = $_COOKIE['user_id']"
$req = "SELECT c.product_id, p.id, p.photos, p.name, p.price, p.description, p.category, p.brand
	FROM cart c, product p
	WHERE c.product_id = p.id AND c.user_id =" . $_COOKIE['user_id'];
$result = mysqli_query($link, $req);
$product = [];
while ($row = mysqli_fetch_assoc($result))
	$product[] = $row;
$all_price = 0;
echo "<a href='buy.php'>Оформить заказ</a>";
for ($i = 0; $i < count($product); $i++) {
	echo "<div class='cart-line'>
				<div class='cart-img'>
					<img src='../assets/img/" . $product[$i]['photos'] . "'>
				</div> 
				<div class='line'>
					<p>" . $product[$i]['name'] . "</p>
		<div class='block'><a href='fullproduct.php?id=" . $product[$i]['id'] . "'><p>Описание</p></a></div><span class='price'>" . $product[$i]['price'] . "</span>";
	$all_price += $product[$i]['price'];
	echo "</div></div></div>";
}
echo "Общая сумма товаров = " . $all_price . '<br>';
echo "Всего " . count($product) . " товаров";
include 'footer.php';
// Все get параметром