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
 $sql = "SELECT wishlist.post_id, product_details_men.description, product_details_men.image, wishlist.unique_id, product_details_men.productName, product_details_men.price
FROM  wishlist
INNER JOIN product_details_men ON wishlist.post_id = product_details_men.unique_id
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
		<a href="shoppingCart.php?id='.$user_id.'" class="btn">Add to Cart</a>
		<a href="placeorder.phpid='.$user_id.'" class="btn">Order now</a>
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
<!--Section: Block Content-->
<section>

		<!-- Grid row -->
		<div class="row">

			<!-- Grid column -->
			<div class="col-md-4 mb-5">

				<!-- Card -->
				<div class="">

					<div class="view zoom overlay z-depth-2 rounded">
						<img class="img-fluid w-100"
							src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" alt="Sample">
							</div>

					<div class="text-center pt-4">

						<h5>Blue denim shirt</h5>
						<p class="mb-2 text-muted text-uppercase small">Shirts</p>
							<div>
							<i class="fa fa-star fa-sm text-primary"></i>

							<i class="fa fa-star fa-sm text-primary"></i>

							<i class="fa fa-star fa-sm text-primary"></i>

							<i class="fa fa-star fa-sm text-primary"></i>

							<i class="fa fa-star fa-sm text-primary"></i>
							</div>
						<hr>

						<h6 class="mb-3">17.99 $</h6>
						<button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i
								class="bi bi-shopping-cart pr-2"></i>Add to cart</button>
						<button type="button" class="btn btn-light btn-sm mr-1 mb-2"><i
								class="bi bi-info-circle pr-2"></i>Details</button>
						<button type="button" class="btn btn-elegant btn-sm px-3 mb-2 material-tooltip-main"
							data-toggle="tooltip" data-placement="top" title="Remove from wishlist"><i
								class="bi bi-times"></i></button>

					</div>

				</div>
				<!-- Card -->
				</body>
				</html>