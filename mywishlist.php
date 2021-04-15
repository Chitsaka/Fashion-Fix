<?php include 'header.php';
require_once 'dbConnect.php';
include 'auth.php';
if (isset($user_id)){

}else{
	header('location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


<!--icons-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
 $sql = "SELECT wishlist.post_id, product_details.description, product_details.image, wishlist.unique_id, product_details.productName, product_details.price
FROM  wishlist
INNER JOIN product_details ON wishlist.post_id = product_details.unique_id
WHERE wishlist.unique_id = $user_id";

$result = $conn->query( $sql );

if ( $result-> num_rows > 0 ) {
  // output data of each row
	echo '<div class= "container">
	<div class="row justify-content-center">';

    while( $row = $result->fetch_assoc() ) {
	  $img = $row ['image'];
	  echo' <div class="card col-md-4" style="width: 18rem;">
	  <img src="images/' . $img .'.jfif" class="card-img-top" alt="...">
	  <div class="card-body">
		<h5 class="card-title">' . $row['productName'] . '</h5>
		<p class="card-text">' . $row['description'] . '</p>
		<p class="card-text">' . $row['price'] . '</p>
		<div>
							<i class="fa fa-star fa-sm text-primary"></i>

							<i class="fa fa-star fa-sm text-primary"></i>

							<i class="fa fa-star fa-sm text-primary"></i>

							<i class="fa fa-star fa-sm text-primary"></i>

							<i class="fa fa-star fa-sm text-primary"></i>
							</div>
		<a href="shoppingCart.php?id='.$user_id.'" class="btn btn-outline-secondary">Add to Cart</a>
		<a href="placeorder.phpid='.$user_id.'" class="btn btn-outline-secondary">Order now</a>
	  </div>
	</div>';
  	}
echo  '</div>
		</div>';
} else {
 echo $conn->error;
  echo '0 results';
}
?>

				</body>
				</html>