<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>Fashion Fix | Women | Skirts</title>
</head>
<body>
<?php
require 'header.php';

require_once 'dbConnect.php';


$sql = 'SELECT * FROM product_details WHERE category = "skirts" AND gender ="Women"';

	$results = mysqli_query( $conn, $sql );

if ( $results ) {
		// Code!
		$rows = mysqli_num_rows( $results );
	if ( $rows > 0 ) {
		// Code!
		echo '<div class = "container">
		<div class="row justify-content-center">';
		while ( $women_skirts = mysqli_fetch_assoc( $results ) ) {
				// Code...
				$product_id = $women_skirts['unique_id'];
                $img        = $women_skirts['image'];
                echo $img;

				echo '<div class="card col-md-4" style="width: 18rem;">
				<img src="images/' . $img .'.jfif" class="card-img-top" alt="...">
				<div class="card-body">
				  <h5 class="card-title">' . $women_skirts['productName'] . '</h5>
				  <p class="card-text">' . $women_skirts['description'] . '</p>
				  <p class="card-text">Ksh. ' . $women_skirts['price'] . '/=</p>
				  <a href="shoppingCart.php?id='.$product_id.'" class="btn">Add to Cart</a>
                  <a href="Wishlist.php?id='.$product_id.'" class="btn">Wishlist</a>
				  <a href="checkout.php" class="btn">Order now</a>
				</div>
			  </div>';

			}
			echo '	</div>
			</div>
			';
	} else {
		// Code...
			echo 'no products available';

	}
} else {
		// Code...
		echo ( 'something went wrong' ) . mysqli_error( $conn );

}
?>

 </body>
</html>