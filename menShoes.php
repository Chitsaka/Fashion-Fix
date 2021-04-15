<?php
require 'header.php';

require_once 'dbConnect.php';


$sql = 'SELECT * FROM product_details WHERE category = "shoes" AND gender ="Men"';

	$results = mysqli_query( $conn, $sql );

if ( $results ) {
		// Code!
		$rows = mysqli_num_rows( $results );
	if ( $rows > 0 ) {
		// Code!
		echo '<div class="container">
		<div class="row justify-content-center">';

		while ( $men_shoes = mysqli_fetch_assoc( $results ) ) {
				// Code...
				$product_id = $men_shoes['unique_id'];
				$img        = $men_shoes['image'];

				echo '<div class="card col-md-4" style="width: 18rem;">
				<img src="images/' . $img .'.jfif" class="card-img-top" alt="...">
				<div class="card-body">
				  <h5 class="card-title">' . $men_shoes['productName'] . '</h5>
				  <p class="card-text">' . $men_shoes['description'] . '</p>
				  <p class="card-text">' . $men_shoes['price'] . '</p>
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
		# code...
			echo 'no products available';
	}

	} else {
		# code...
		echo ( 'something went wrong' ) . mysqli_error( $conn );

	}

	?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</div>
</div>
	<!-- cards-->

<section>
	<div class="container">
		<div class="row justify-content-center">
			<div class="card col-md-4" style="width: 18rem;">
				<a target="_parent" href="#">
					<img src="https://images.unsplash.com/photo-1556048219-bb6978360b84?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80" class="card-img-top" alt="">
				</a>
					<div class="card-body">
					<p>Cute boyfriend shoes</p>
				</div>
			</div>
			<div class="card col-md-4" style="width: 18rem;">
				<a target="_parent" href="#">
					<img src="https://images.unsplash.com/photo-1586295470933-7cca2e0e3fa0?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="card-img-top" alt="">
				</a>
					<div class="card-body">
					<p>Cute boyfriend shoes</p>
				</div>
			</div>
			<div class="card col-md-4" style="width: 18rem;">
				<a target="_parent" href="#">
					<img src="https://images.unsplash.com/photo-1595341888016-a392ef81b7de?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1058&q=80" class="card-img-top" alt="">
				</a>
					<div class="card-body">
					<p>Cute boyfriend shoes</p>
				</div>
			</div>
			<div class="card col-md-4" style="width: 18rem;">
				<a target="_parent" href="#">
					<img src="https://images.unsplash.com/photo-1587502374301-1c46349e3608?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="card-img-top" alt="">
				</a>
					<div class="card-body">
					<p>Cute boyfriend shoes</p>
				</div>
			</div>
			<div class="card col-md-4" style="width: 18rem;">
				<a target="_parent" href="#">
					<img src="https://images.unsplash.com/photo-1555274175-6cbf6f3b137b?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80" class="card-img-top" alt="">
				</a>
					<div class="card-body">
					<p>Cute boyfriend shoes</p>
				</div>
			</div>
			<div class="card col-md-4" style="width: 18rem;">
				<a target="_parent" href="#">
					<img src="https://images.unsplash.com/flagged/photo-1556637640-2c80d3201be8?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80" class="card-img-top" alt="">
				</a>
					<div class="card-body">
					<p>Cute boyfriend shoes</p>
				</div>
			</div><div class="card col-md-4" style="width: 18rem;">
				<a target="_parent" href="#">
					<img src="https://images.unsplash.com/photo-1555100343-9f07be62f564?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="card-img-top" alt="">
				</a>
					<div class="card-body">
					<p>Cute boyfriend shoes</p>
				</div>
			</div>
			<div class="card col-md-4" style="width: 18rem;">
				<a target="_parent" href="#">
					<img src="https://images.unsplash.com/photo-1578116922645-3976907a7671?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1051&q=80" class="card-img-top" alt="">
				</a>
					<div class="card-body">
					<p>Cute boyfriend shoes</p>
				</div>
			</div>
			<div class="card col-md-4" style="width: 18rem;">
				<a target="_parent" href="#">
					<img src="https://images.unsplash.com/photo-1591394579434-6510605a5590?ixid=MXwxMjA3fDB8MHxzZWFyY2h8OTB8fGNsb3RoaW5nfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="">
				</a>
					<div class="card-body">
					<p>Cute boyfriend shoes</p>
				</div>
			</div>
			<div class="card col-md-4" style="width: 18rem;">
				<a target="_parent" href="#">
					<img src="https://images.unsplash.com/photo-1551107696-a4b0c5a0d9a2?ixid=MXwxMjA3fDB8MHxzZWFyY2h8ODR8fGNsb3RoaW5nfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="">
				</a>
					<div class="card-body">
					<p>Cute boyfriend shoes</p>
				</div>
			</div>
			<div class="card col-md-4" style="width: 18rem;">
				<a target="_parent" href="#">
					<img src="https://images.unsplash.com/photo-1553610851-294a26d51514?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1008&q=80" class="card-img-top" alt="">
				</a>
					<div class="card-body">
					<p>Cute boyfriend shoes</p>
				</div>
			</div>
			<div class="card col-md-4" style="width: 18rem;">
				<a target="_parent" href="#">
					<img src="https://images.unsplash.com/photo-1599392120243-c9f453489a9c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=976&q=80" class="card-img-top" alt="">
				</a>
					<div class="card-body">
					<p>Cute boyfriend shoes</p>
				</div>
			</div>
		</div>
	</div>
</section>
		 <!--end of card-->
	</body>
</html>