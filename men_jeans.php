<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>Fashion Fix | Men | Jeans</title>
</head>
<body>
<?php
require 'header.php';

require_once 'dbConnect.php';


$sql = 'SELECT * FROM product_details WHERE category = "jeans" AND gender ="Men"';

	$results = mysqli_query( $conn, $sql );

if ( $results ) {
		// Code!
		$rows = mysqli_num_rows( $results );
	if ( $rows > 0 ) {
		// Code!
		echo '<div class="container">
		<div class="row justify-content-center">';

		while ( $men_jeans = mysqli_fetch_assoc( $results ) ) {
				// Code...
				$product_id = $men_jeans['unique_id'];
        $img        = $men_jeans['image'];

				echo '<div class="card col-md-4" style="width: 18rem;">
				<img src="images/' . $img .'.jfif" class="card-img-top" alt="...">
				<div class="card-body">
				  <h5 class="card-title">' . $men_jeans['productName'] . '</h5>
				  <p class="card-text">' . $men_jeans['description'] . '</p>
				  <p class="card-text">Ksh. ' . $men_jeans['price'] . '/=</p>
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
			echo '<strong> COMING SOON </strong>';

	}

	} else {
		# code...
		echo ( 'something went wrong' ) . mysqli_error( $conn );

	}

	?>

</body>
</html>