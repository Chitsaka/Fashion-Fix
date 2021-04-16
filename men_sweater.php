<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>Fashion Fix | Men | Sweaters</title>
</head>
<body>
<?php
require 'header.php';

require_once 'dbConnect.php';


$sql = 'SELECT * FROM product_details WHERE category = "Sweater" AND gender ="Men"';

	$results = mysqli_query( $conn, $sql );

if ( $results ) {
		// Code!
		$rows = mysqli_num_rows( $results );
	if ( $rows > 0 ) {
		// Code!
		echo '<div class = "container">
		<div class="row justify-content-center">';
		while ( $men_sweaters = mysqli_fetch_assoc( $results ) ) {
				// Code...
				$product_id = $men_sweaters['unique_id'];
				$img        = $men_sweaters['image'];

				echo '<div class="card col-md-4" style="width: 18rem;">
				<img src="images/' . $img .'.jfif" class="card-img-top" alt="...">
				<div class="card-body">
				  <h5 class="card-title">' . $men_sweaters['productName'] . '</h5>
				  <p class="card-text">' . $men_sweaters['description'] . '</p>
				  <p class="card-text">Ksh.' . $men_sweaters['price'] . '/=</p>
				  <a href="shoppingCart.php?id='.$product_id.'" class="btn btn-outline-secondary">Add to Cart</a>
				  <a href="Wishlist.php?id='.$product_id.'" class="btn btn-outline-secondary">Wishlist</a>
				  <a href="checkout.php" class="btn btn-outline-secondary">Order now</a>
				</div>
			  </div>';
			}
			echo '	</div>
			</div>
			';
	} else {
		// Code...
		echo '<strong> COMING SOON </strong>';

	}
} else {
		// Code...
		echo ( 'something went wrong' ) . mysqli_error( $conn );

}
?>
