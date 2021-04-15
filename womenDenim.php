<?php
require 'header.php';

require_once 'dbConnect.php';


$sql = 'SELECT * FROM product_details_men WHERE category = "shoes" AND gender ="Women"';

	$results = mysqli_query( $conn, $sql );

if ( $results ) {
		// Code!
		$rows = mysqli_num_rows( $results );
	if ( $rows > 0 ) {
		// Code!
		echo '<div class = "container">
		<div class="row justify-content-center">';
		while ( $women_denim = mysqli_fetch_assoc( $results ) ) {
				// Code...
				$product_id = $women_denim['unique_id'];
				$img        = $women_denim['image'];


				echo '<div class="card" style="width: 18rem;">
				<img src="images/' . $img .'.jfif" class="card-img-top" alt="...">
				<div class="card-body">
				  <h5 class="card-title">' . $women_denim['productName'] . '</h5>
				  <p class="card-text">' . $women_denim['description'] . '</p>
				  <p class="card-text">' . $women_denim['price'] . '</p>
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
  <div class="container">
	<div class="row justify-content-center">
		<div class="card col-md-4" style="width: 18rem;">
			<a target="_parent" href="#">
				<img src="https://images.unsplash.com/photo-1599947983408-fa707c9214ca?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" class="card-img-top" alt="">
			</a>
				<div class="card-body">
				<p>Cute boyfriend shoes</p>
			</div>
		  </div>
		  <div class="card col-md-4" style="width: 18rem;">
			<a target="_parent" href="#">
				<img src="https://images.unsplash.com/photo-1610659774000-a08ba21ffc95?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" class="card-img-top" alt="">
			</a>
				<div class="card-body">
				<p>Cute boyfriend shoes</p>
			</div>
		  </div>
		  <div class="card col-md-4" style="width: 18rem;">
			<a target="_parent" href="#">
				<img src="https://images.unsplash.com/photo-1610901191701-150bd35fc422?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTI5fHx8ZW58MHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="">
			</a>
				<div class="card-body">
				<p>Cute boyfriend shoes</p>
			</div>
		  </div>
		  <div class="card col-md-4" style="width: 18rem;">
			<a target="_parent" href="#">
				<img src="https://images.unsplash.com/photo-1522512115668-c09775d6f424?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" class="card-img-top" alt="">
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
	</div>
  </div>
		 <!--end of card-->

	</body>
</html>