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
/*$sql = "SELECT checkout.post_id, product_details.description, product_details.image, checkout.unique_id,
product_details.productName, product_details.price, checkout.status
FROM  checkout
INNER JOIN product_details ON checkout.post_id = product_details.unique_id
WHERE checkout.unique_id = $user_id AND checkout.status ='0'"; */

$sql = "SELECT checkout.post_id, product_details.description, product_details.image, checkout.unique_id,
product_details.productName, product_details.price
FROM  checkout
INNER JOIN product_details ON checkout.post_id = product_details.unique_id
WHERE checkout.unique_id = $user_id";


/*$result = $conn->query( $sql );

if ( $result-> num_rows > 0 ) {

    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $img = $row ['image'];

		echo' <div class="card col-md-4" style="width: 18rem;">
		<img src="images/' . $img .'.jfif" class="card-img-top" alt="...">
		<div class="card-body">
		  <h5 class="card-title">' . $row['productName'] . '</h5>
		  <p class="card-text">' . $row['description'] . '</p>
		  <p class="card-text">' . $row['price'] . '</p>
		  <a href="shoppingCart.php?id='.$user_id.'" class="btn btn-outline-secondary">Add to Cart</a>
		  <a href="placeorder.phpid='.$user_id.'" class="btn btn-outline-secondary">Order now</a>
		</div>
	  </div>';

    }
	echo '';
}
else {
	echo mysqli_error($conn);
	 echo "0 results";
   } */


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
<!--Section: Block Content-->
<section>

	<!--Grid row-->
	<div class="row">

	  <!--Grid column-->
	  <div class="col-lg-8">

		<!-- Card -->
		<div class="mb-3">
		  <div class="pt-4 wish-list">

			<h5 class="mb-4">Cart (<span>2</span> items)</h5>

			<div class="row mb-4">
			  <div class="col-md-5 col-lg-3 col-xl-3">
				<div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
				  <img class="img-fluid w-100"
					src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" alt="Sample">
				  <a href="#!">
					<div class="mask">
					  <img class="img-fluid w-100"
						src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12.jpg">
					  <div class="mask rgba-black-slight"></div>
					</div>
				  </a>
				</div>
			  </div>
			  <div class="col-md-7 col-lg-9 col-xl-9">
				<div>
				  <div class="d-flex justify-content-between">
					<div>
					  <h5>Blue denim shirt</h5>
					  <p class="mb-3 text-muted text-uppercase small">Shirt - blue</p>
					  <p class="mb-2 text-muted text-uppercase small">Color: blue</p>
					  <p class="mb-3 text-muted text-uppercase small">Size: M</p>
					</div>
					<div>
					  <div class="def-number-input number-input safari_only mb-0 w-100">
						<button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
						  class="minus decrease"></button>
						<input class="quantity" min="0" name="quantity" value="1" type="number">
						<button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
						  class="plus increase"></button>
					  </div>
					  <small id="passwordHelpBlock" class="form-text text-muted text-center">
						(Note, 1 piece)
					  </small>
					</div>
				  </div>
				  <div class="d-flex justify-content-between align-items-center">
					<div>
					  <a href="#!" type="button" class="card-link-secondary small text-uppercase mr-3"><i
						  class="fas fa-trash-alt mr-1"></i> Remove item </a>
					  <a href="#!" type="button" class="card-link-secondary small text-uppercase"><i
						  class="fas fa-heart mr-1"></i> Move to wish list </a>
					</div>
					<p class="mb-0"><span><strong id="summary">$17.99</strong></span></p class="mb-0">
				  </div>
				</div>
			  </div>
			</div>
			<hr class="mb-4">
			<div class="row mb-4">
			  <div class="col-md-5 col-lg-3 col-xl-3">
				<div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
				  <img class="img-fluid w-100"
					src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg" alt="Sample">
				  <a href="#!">
					<div class="mask">
					  <img class="img-fluid w-100"
						src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg">
					  <div class="mask rgba-black-slight"></div>
					</div>
				  </a>
				</div>
			  </div>
			  <div class="col-md-7 col-lg-9 col-xl-9">
				<div>
				  <div class="d-flex justify-content-between">
					<div>
					  <h5>Red hoodie</h5>
					  <p class="mb-3 text-muted text-uppercase small">Shirt - red</p>
					  <p class="mb-2 text-muted text-uppercase small">Color: red</p>
					  <p class="mb-3 text-muted text-uppercase small">Size: M</p>
					</div>
					<div>

					</div>
				  </div>
				  <div class="d-flex justify-content-between align-items-center">
					<div>
					  <a href="#!" type="button" class="card-link-secondary small text-uppercase mr-3"><i
						  class="fas fa-trash-alt mr-1"></i> Remove item </a>
					  <a href="#!" type="button" class="card-link-secondary small text-uppercase"><i
						  class="fas fa-heart mr-1"></i> Move to wish list </a>
					</div>
					<p class="mb-0"><span><strong>$35.99</strong></span></p class="mb-0">
				  </div>
				</div>
			  </div>
			</div>
			<p class="text-primary mb-0"><i class="fas fa-info-circle mr-1"></i> Do not delay the purchase, adding
			  items to your cart does not mean booking them.</p>

		  </div>
		</div>
		<!-- Card -->

		<!-- Card -->
		<div class="mb-3">
		  <div class="pt-4">

			<h5 class="mb-4">Expected shipping delivery</h5>

			<p class="mb-0"> Thu., 12.03. - Mon., 16.03.</p>
		  </div>
		</div>
		<!-- Card -->

		<!-- Card -->
		<div class="mb-3">
		  <div class="pt-4">

			<h5 class="mb-4">We accept</h5>

			<img class="mr-2" width="45px"
			  src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
			  alt="Visa">
			<img class="mr-2" width="45px"
			  src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
			  alt="American Express">
			<img class="mr-2" width="45px"
			  src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
			  alt="Mastercard">
			<img class="mr-2" width="45px"
			  src="https://mdbootstrap.com/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.png"
			  alt="PayPal acceptance mark">
		  </div>
		</div>
		<!-- Card -->

	  </div>
	  <!--Grid column-->

	  <!--Grid column-->
	  <div class="col-lg-4">

		<!-- Card -->
		<div class="mb-3">
		  <div class="pt-4">

			<h5 class="mb-3">The total amount of</h5>

			<ul class="list-group list-group-flush">
			  <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
				Temporary amount
				<span>$25.98</span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center px-0">
				Shipping
				<span>Gratis</span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
				<div>
				  <strong>The total amount of</strong>
				  <strong>
					<p class="mb-0">(including VAT)</p>
				  </strong>
				</div>
				<span><strong>$53.98</strong></span>
			  </li>
			</ul>

			<button type="button" class="btn btn-primary btn-block">go to checkout</button>

		  </div>
		</div>
		<!-- Card -->

		<!-- Card -->
		<div class="mb-3">
		  <div class="pt-4">

			<a class="dark-grey-text d-flex justify-content-between" data-toggle="collapse" href="#collapseExample"
			  aria-expanded="false" aria-controls="collapseExample">
			  Add a discount code (optional)
			  <span><i class="fas fa-chevron-down pt-1"></i></span>
			</a>

			<div class="collapse" id="collapseExample">
			  <div class="mt-3">
				<div class="md-form md-outline mb-0">
				  <input type="text" id="discount-code" class="form-control font-weight-light"
					placeholder="Enter discount code">
				</div>
			  </div>
			</div>
		  </div>
		</div>
		<!-- Card -->

	  </div>
	  <!--Grid column-->

	</div>
	<!-- Grid row -->

  </section>
  <!--Section: Block Content-->
  </body>
</html>