<?php
require 'header.php';

require_once 'dbConnect.php';


$sql = 'SELECT * FROM product_details_women WHERE category = "jeans"';

	$results = mysqli_query( $conn, $sql );

if ( $results ) {
		// Code!
		$rows = mysqli_num_rows( $results );
	if ( $rows > 0 ) {
		// Code!
		echo '<div class = "container">
		<div class="row justify-content-center">';
		while ( $women_jeans = mysqli_fetch_assoc( $results ) ) {
				// Code...
				$product_id = $women_jeans['unique_id'];
				$img        = $women_jeans['image'];
				echo '<div class="card" style="width: 18rem;">
				<img src="images/' . $img . '.jfif" class="card-img-top" alt="...">
				<div class="card-body">
				  <h5 class="card-title">' . $women_jeans['productName'] . '</h5>
				  <p class="card-text">' . $women_jeans['description'] . '</p>
				  <p class="card-text">' . $women_jeans['price'] . '</p>
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