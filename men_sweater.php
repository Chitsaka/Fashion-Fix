<?php
require 'header.php';

require_once 'dbConnect.php';


$sql = 'SELECT * FROM product_details_men WHERE category = "sweaters"';

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

				echo '<div class="card" style="width: 18rem;">
				<img src="images/' . $img . '.jfif" class="card-img-top" alt="...">
				<div class="card-body">
				  <h5 class="card-title">' . $men_sweaters['productName'] . '</h5>
				  <p class="card-text">' . $men_sweaters['description'] . '</p>
				  <p class="card-text">' . $men_sweaters['price'] . '</p>
				  <a href="shoppingCart.php?id='.$product_id.'" class="btn">Add to Cart</a>
				  <a href="Wishlist.php?id='.$product_id.'" class="btn">Wishlist</a>
				  <a href="placeorder.php" class="btn">Order now</a>
				</div>
			  </div>';

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
