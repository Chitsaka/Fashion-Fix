<?php
require 'header.php';

require_once 'dbConnect.php';


$sql = 'SELECT * FROM product_details_women WHERE category = "swimsuit"';

	$results = mysqli_query( $conn, $sql );

if ( $results ) {
		// Code!
		$rows = mysqli_num_rows( $results );
	if ( $rows > 0 ) {
		// Code!
		echo '<div class = "container">
		<div class="row justify-content-center">';
		while ( $women_swimsuit = mysqli_fetch_assoc( $results ) ) {
				// Code...
				$product_id = $women_swimsuit['unique_id'];
				$img        = $women_swimsuit['image'];
				echo '<div class="card" style="width: 18rem;">
				<img src="' . $img. '.jfif" class="card-img-top" alt="...">
				<div class="card-body">
				  <h5 class="card-title">' . $women_swimsuit['productName'] . '</h5>
				  <p class="card-text">' . $women_swimsuit['description'] . '</p>
				  <p class="card-text">' . $women_swimsuit['price'] . '</p>
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
	<!-- cards-->
		<div class="container">
	<div class="row justify-content-center">
		<div class="card col-md-4" style="width: 18rem;">
			<a target="_parent" href="#">
				<img src="https://images.unsplash.com/photo-1543616154-aa1656f044d0?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="card-img-top" alt="">
			</a>
				<div class="card-body">
				<p>Cute boyfriend shoes</p>
			</div>
			</div>
			<div class="card col-md-4" style="width: 18rem;">
			<a target="_parent" href="#">
				<img src="https://images.unsplash.com/photo-1608209790651-4efa5b72e1e5?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" class="card-img-top" alt="">
			</a>
				<div class="card-body">
				<p>Cute boyfriend shoes</p>
			</div>
			</div>
			<div class="card col-md-4" style="width: 18rem;">
			<a target="_parent" href="#">
				<img src="https://images.unsplash.com/photo-1590279298791-4ab55bd74e8e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80" class="card-img-top" alt="">
			</a>
				<div class="card-body">
				<p>Cute boyfriend shoes</p>
			</div>
		  </div>
		  <div class="card col-md-4" style="width: 18rem;">
			<a target="_parent" href="#">
				<img src="https://images.unsplash.com/photo-1607031768232-0cece130f885?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=634&q=80" class="card-img-top" alt="">
			</a>
				<div class="card-body">
				<p>Cute boyfriend shoes</p>
			</div>
		  </div>
		  <div class="card col-md-4" style="width: 18rem;">
			<a target="_parent" href="#">
				<img src="https://images.unsplash.com/photo-1546970224-d4335ed40a22?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80" class="card-img-top" alt="">
			</a>
				<div class="card-body">
				<p>Cute boyfriend shoes</p>
			</div>
		  </div>
		  <div class="card col-md-4" style="width: 18rem;">
			<a target="_parent" href="#">
				<img src="https://images.unsplash.com/photo-1607031767897-ee1b423fe88d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" class="card-img-top" alt="">
			</a>
				<div class="card-body">
				<p>Cute boyfriend shoes</p>
			</div>
		  </div>
		  <div class="card col-md-4" style="width: 18rem;">
			<a target="_parent" href="#">
				<img src="https://images.unsplash.com/photo-1573718493871-995cf09c9bd3?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Nzd8fHNleHklMjBkcmVzc2VzfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="">
			</a>
				<div class="card-body">
				<p>Cute boyfriend shoes</p>
			</div>
		  </div>
		  <div class="card col-md-4" style="width: 18rem;">
			<a target="_parent" href="#">
				<img src="https://images.unsplash.com/photo-1581544697726-30c6f9d401da?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=605&q=80" class="card-img-top" alt="">
			</a>
				<div class="card-body">
				<p>Cute boyfriend shoes</p>
			</div>
		  </div>
		  <div class="card col-md-4" style="width: 18rem;">
			<a target="_parent" href="#">
				<img src="https://images.unsplash.com/photo-1549915362-eb1ca88a057a?ixid=MXwxMjA3fDB8MHxzZWFyY2h8M3x8bW9ub2tpbml8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="">
			</a>
				<div class="card-body">
				<p>Cute boyfriend shoes</p>
			</div>
		  </div>
		  <div class="card col-md-4" style="width: 18rem;">
			<a target="_parent" href="#">
				<img src="" class="card-img-top" alt="">
			</a>
				<div class="card-body">
				<p>Cute boyfriend shoes</p>
			</div>
		  </div>
			</div>
		</div>
		 <!--end of card-->

</body>
</html>