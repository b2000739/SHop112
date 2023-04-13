<? $link = mysqli_connect('localhost', 'root', '', 'shop');
// $req = "SELECT * FROM `product`";

$minPrice = ($_GET['from']) ? (int)$_GET['from'] : 0;
$maxPrice =    ($_GET['to']) ?  (int)$_GET['to']  :  10000000;
$brands = ($_GET['brands']) ? implode(',', $_GET['brands']) : null;
$categories =  ($_GET['categories']) ? (int)$_GET['categories'] : 0;
$categoryWhere =  ($categories !== 0) ? " `category` = $categories and " : '';
$brandsWhere = ($brands  !== null) ? " `brand` in ($brands)  and" : ' ';
$sort = ($_GET['sort']) ? " ORDER BY " . explode('-',  $_GET['sort'])[0] . " " . explode('-', $_GET["sort"])[1] :  ' ';
$req = "SELECT *   FROM  `product` WHERE  $categoryWhere $brandsWhere (`price` BETWEEN $minPrice AND $maxPrice) $sort";
if (isset($_GET['search'])) {
	$search = $_GET['search'];
	$req = "SELECT * FROM `product` WHERE `name` LIKE '%$search%' OR `description` LIKE '%$search%'";
}

// ! справка 
// if ($a>0){
// $sum = $a
// }else{
// 	$sum=0
// } 
// $sum  =  ($a>0)? $a : 0 //кратское условие вышенаписаннного 

$result = mysqli_query($link, $req);
$product = [];
while ($row = mysqli_fetch_assoc($result))
	$product[] = $row;


?>

<form method='GET'>
	<div class='filters'>
		<ul class='categories filters-line'>
			<h3>Категории</h3>
			<?
			$req = "SELECT * FROM `categories`";
			$result = mysqli_query($link, $req);
			$categories = array();
			while ($row = mysqli_fetch_assoc($result))
				$categories[] = $row;
			for ($i = 0; $i < count($categories); $i++) {
				echo "<li><label><input type = 'radio' name = 'categories'
			value=" . $categories[$i]['id'] . ">" . $categories[$i]['name'] . "</label></li>";
			}

			?>

		</ul>
		<ul class='filter-checkbox filters-line'>
			<h3>Бренды<h3>
					<?
					$req = "SELECT * FROM `brands`";
					$result = mysqli_query($link, $req);
					$brands = array();
					while ($row = mysqli_fetch_assoc($result))
						$brands[] = $row;
					for ($i = 0; $i < count($brands); $i++) {
						echo "<li><label><input type ='checkbox' name='brands[]' value=" . $brands[$i]['id'] . ">" . $brands[$i]['name'] . "</label></li>";
					}
					?>
		</ul>
		<div class="filters-price filters-line">
			<h3>Цена</h3>
			<input type="number" name='from' placeholder="500"> - <input type='number' name='to' placeholder="5000000">
		</div>

		<div class="sort filter-line">
			<select name="sort">
				<option value="name-ASC">По названию А-Я
				<option></option>
				<option value="name-DESC">По названию Я-А
				<option></option>
				<option value="price-ASC">По названию По возрастанию цены
				<option></option>
				<option value="price-DESC">По убыванию цены
				<option></option>
			</select>
		</div>
		<input type="submit" name="okprice">
	</div>
</form>
<form method='GET' class='last_child'>
	<div class='search'>
		<input type="search" name="search" placeholder="Поиск..." class="search-input">
		<input type='submit' name="oksearch" value='Искать' class="submit-search">

	</div>
</form>
<script src="admin/jquery-3.6.1.min.js"></script>
<script type="text/javascript" src='js.js'></script>