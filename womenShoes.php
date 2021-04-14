<?php
require 'header.php';

require_once 'dbConnect.php';


$sql = 'SELECT * FROM product_details_women WHERE category = "shoes"';

	$results = mysqli_query( $conn, $sql );

if ( $results ) {
		// Code!
		$rows = mysqli_num_rows( $results );
	if ( $rows > 0 ) {
		// Code!
		echo '<div class = "container">
		<div class="row justify-content-center">';
		while ( $women_shoes = mysqli_fetch_assoc( $results ) ) {
				// Code...
				$product_id = $women_shoes['unique_id'];
				$img        = $women_shoes['image'];

				echo '<div class="card" style="width: 18rem;">
				<img src="images/' .$img . '.jfif" class="card-img-top" alt="...">
				<div class="card-body">
				  <h5 class="card-title">' . $women_shoes['productName'] . '</h5>
				  <p class="card-text">' . $women_shoes['description'] . '</p>
				  <p class="card-text">' . $women_shoes['price'] . '</p>
				  <a href="shoppingCart.php?id='.$product_id.'" class="btn">Add to Cart</a>
				  <a href="wishlist.php?id='.$product_id.'" class="btn">Wishlist</a>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</div>
</div>
	<!-- cards-->
<div class="container">
	<div class="row justify-content-center">
		<div class="card col-md-4" style="width: 18rem;">
			<a target="" href="womenShoes.php">
				<img src="https://images.unsplash.com/photo-1499013819532-e4ff41b00669?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="">
			</a>
				<div class="card-body">
				<p>Cute boyfriend shoes</p>
				<a href="shoppingCart.php" class="btn">Add to Cart</a>
				  <a href="placeorder.php" class="btn">Order now</a>
			</div>
		  </div>
		  <div class="card col-md-4" style="width: 18rem;">
			<a target="_parent" href="#">
				<img src="https://images.unsplash.com/photo-1543163521-1bf539c55dd2?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1400&q=80" class="card-img-top" alt="">
			</a>
				<div class="card-body">
				<p>Cute boyfriend shoes</p>
				<a href="cart.php" class="btn">Add to Cart</a>
				  <a href="placeorder.php" class="btn">Order now</a>
			</div>
		  </div>
		  <div class="card col-md-4" style="width: 18rem;">
			<a target="_parent" href="#">
				<img src="https://images.unsplash.com/photo-1552867544-184c9903cddf?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="card-img-top" alt="">
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
				<img src="https://images.unsplash.com/photo-1543163521-1bf539c55dd2?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1400&q=80" class="card-img-top" alt="">
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