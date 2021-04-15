
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>Fashion-Fix | Women | Tops</title>
</head>
<body>

<?php
/**
 * File
 *
 * File to display women's products(tops)
 *
 * @Category Components
 * @package  WordPress
 * @author   Lucky Katana <luckykatana73@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     https://fashionfix.netlify.app
 * @since    1.0.0
 */

?>

<?php
require 'header.php';

require_once 'dbConnect.php';


$sql = 'SELECT * FROM product_details_men WHERE category = "tops" AND gender ="Women"';

	$results = mysqli_query( $conn, $sql );

if ( $results ) {
		// Code!
		$rows = mysqli_num_rows( $results );
	if ( $rows > 0 ) {
		// Code!
		echo '<div class = "container">
		<div class="row justify-content-center">';
		while ( $women_tops = mysqli_fetch_assoc( $results ) ) {
				// Code...
				$product_id = $women_tops['unique_id'];
				$img        = $women_tops['image'];

				echo '<div class="container">
				<div class="row justify-content-center">
				<div class="card col-md-4" style="width: 18rem;">
				<img src="images/' . $img .'.jfif" class="card-img-top" alt="...">
				<div class="card-body">
				  <h5 class="card-title">' . $women_tops['productName'] . '</h5>
				  <p class="card-text">' . $women_tops['description'] . '</p>
				  <p class="card-text">Ksh. ' . $women_tops['price'] . '/=</p>
				  <a href="shoppingCart.php?id=' . $product_id . '" class="btn">Add to Cart</a>
				  <a href="Wishlist.php?id=' . $product_id . '" class="btn">Wishlist</a>
				  <a href="placeorder.php" class="btn">Order now</a>
				</div>
			  </div>
			  </div>
			  </div>
			  ';

			}
			echo '	</div>
			</div>
			';
	} else {
		// Code...
			echo 'no products available';
			echo '<a href="addproduct.php" class="btn"> add product</a>';
	}
} else {
		// Code...
		echo ( 'something went wrong' ) . mysqli_error( $conn );

}
?>
</body>
</html>