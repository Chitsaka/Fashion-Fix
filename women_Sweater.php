<?php
require 'header.php';

require_once 'dbConnect.php';


$sql = 'SELECT * FROM product_details_women WHERE category = "sweater"';

	$results = mysqli_query( $conn, $sql );

if ( $results ) {
		// Code!
		$rows = mysqli_num_rows( $results );
	if ( $rows > 0 ) {
		// Code!
		echo '<div class = "container">
		<div class="row justify-content-center">';
		while ( $women_sweater = mysqli_fetch_assoc( $results ) ) {
				// Code...
				$product_id = $women_sweater['unique_id'];
				$img        = $women_sweater['image'];

				echo '<div class="card" style="width: 18rem;">
				<img src="images/' . $img . '.jfif" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">' . $women_sweater['productName'] . '</h5>
					<p class="card-text">' . $women_sweater['description'] . '</p>
					<p class="card-text">' . $women_sweater['price'] . '</p>
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
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!--icons-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!--css styles-->
<link rel="stylesheet" href="styles.css">
<title>Fashion Fix</title>
</head>
	<body>
		<!-- cards-->
		<div class="container">
				<div class="row justify-content-center">
						<div class="card col-md-4" style="width: 18rem;">
								<a target="_parent" href="#">
										<img src="https://images.unsplash.com/photo-1610901157620-340856d0a50f?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDQzNnx0b3dKWkZza3BHZ3x8ZW58MHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="">
								</a>
										<div class="card-body">
										<p>Cute boyfriend shoes</p>
								</div>
							</div>
							<div class="card col-md-4" style="width: 18rem;">
								<a target="_parent" href="#">
										<img src="https://images.unsplash.com/photo-1574722772849-7b249c18a2fd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=621&q=80" class="card-img-top" alt="">
								</a>
										<div class="card-body">
										<p>Cute boyfriend shoes</p>
								</div>
							</div>
							<div class="card col-md-4" style="width: 18rem;">
								<a target="_parent" href="#">
										<img src="https://images.unsplash.com/photo-1600630242764-41cf7d951ac4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" class="card-img-top" alt="">
								</a>
										<div class="card-body">
										<p>Cute boyfriend shoes</p>
								</div>
							</div>
							<div class="card col-md-4" style="width: 18rem;">
								<a target="_parent" href="#">
										<img src="https://images.unsplash.com/photo-1611246164691-97f352683561?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" class="card-img-top" alt="">
								</a>
										<div class="card-body">
										<p>Cute boyfriend shoes</p>
								</div>
							</div>
							<div class="card col-md-4" style="width: 18rem;">
								<a target="_parent" href="#">
										<img src="https://images.unsplash.com/photo-1582337832132-b1df9234f9cb?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=676&q=80" class="card-img-top" alt="">
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
										<img src="" class="card-img-top" alt="">
								</a>
										<div class="card-body">
										<p>Cute boyfriend shoes</p>
								</div>
							</div>
</body>
</html>