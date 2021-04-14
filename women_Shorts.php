<?php
require 'header.php';

require_once 'dbConnect.php';


$sql = 'SELECT * FROM product_details_women WHERE category = "shorts"';

	$results = mysqli_query( $conn, $sql );

if ( $results ) {
		// Code!
		$rows = mysqli_num_rows( $results );
	if ( $rows > 0 ) {
		// Code!
		echo '<div class = "container">
		<div class="row justify-content-center">';
		while ( $women_shorts = mysqli_fetch_assoc( $results ) ) {
				// Code...
				$product_id = $women_shorts['unique_id'];
				$img        = $women_shorts['image'];

				echo '<div class="card" style="width: 18rem;">
				<img src="images/' .$img . '.jfif" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">' . $women_shorts['productName'] . '</h5>
					<p class="card-text">' . $women_shorts['description'] . '</p>
					<p class="card-text">' . $women_shorts['price'] . '</p>
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
								<img src="https://images.unsplash.com/photo-1590894682026-b63db5766135?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1162&q=80" class="card-img-top" alt="">
						</a>
								<div class="card-body">
								<p>Cute boyfriend shoes</p>
						</div>
					</div>
					<div class="card col-md-4" style="width: 18rem;">
						<a target="_parent" href="#">
								<img src="https://images.unsplash.com/photo-1591195853828-11db59a44f6b?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80" class="card-img-top" alt="">
						</a>
								<div class="card-body">
								<p>Cute boyfriend shoes</p>
						</div>
					</div>
					<div class="card col-md-4" style="width: 18rem;">
						<a target="_parent" href="#">
								<img src="https://images.unsplash.com/photo-1598831093943-ee2cb8a80f54?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=701&q=80" class="card-img-top" alt="">
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
					<div class="card col-md-4" style="width: 18rem;">
						<a target="_parent" href="#">
								<img src="" class="card-img-top" alt="">
						</a>
								<div class="card-body">
								<p>Cute boyfriend shoes</p>
						</div>
					</div>
					<div class="card col-md-4" style="width: 18rem;">
						<a target="_parent" href="#">
								<img src="https://images.unsplash.com/photo-1499013819532-e4ff41b00669?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="">
						</a>
								<div class="card-body">
								<p>Cute boyfriend shoes</p>
						</div>
					</div>
					<div class="card col-md-4" style="width: 18rem;">
						<a target="_parent" href="#">
								<img src="https://images.unsplash.com/photo-1499013819532-e4ff41b00669?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="">
						</a>
								<div class="card-body">
								<p>Cute boyfriend shoes</p>
						</div>
					</div>
					<div class="card col-md-4" style="width: 18rem;">
						<a target="_parent" href="#">
								<img src="https://images.unsplash.com/photo-1499013819532-e4ff41b00669?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="">
						</a>
								<div class="card-body">
								<p>Cute boyfriend shoes</p>
						</div>
					</div>
					<div class="card col-md-4" style="width: 18rem;">
						<a target="_parent" href="#">
								<img src="https://images.unsplash.com/photo-1499013819532-e4ff41b00669?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="">
						</a>
								<div class="card-body">
								<p>Cute boyfriend shoes</p>
						</div>
					</div>
					<div class="card col-md-4" style="width: 18rem;">
						<a target="_parent" href="#">
								<img src="https://images.unsplash.com/photo-1499013819532-e4ff41b00669?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="">
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