<?php include 'header.php';
//require_once 'dbConnect.php';
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

$sql = "SELECT checkout.post_id, product_details.description, product_details.image, checkout.unique_id,
product_details.productName, product_details.price, checkout.status
FROM  checkout
INNER JOIN product_details ON checkout.post_id = product_details.unique_id
WHERE checkout.unique_id = $user_id AND checkout.status ='0'";

$result = $conn->query( $sql );

if ( $result-> num_rows > 0 ) {
	echo '<div class = "container">
	<div class="row justify-content-center">';
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $img = $row ['image'];

		echo' <div class="card col-md-4" style="width: 18rem;">
		<img src="images/' . $img .'.jfif" class="card-img-top" alt="...">
		<div class="card-body">
		  <h5 class="card-title">' . $row['productName'] . '</h5>
		  <p class="card-text">' . $row['description'] . '</p>
		  <p class="card-text">Ksh. ' . $row['price'] . '/=</p>
		</div>
	  </div>';

    }

	echo '	</div>
	</div>
	<button type="button" class="btn btn-outline-secondary">go to checkout</button>';
}
else {
	echo mysqli_error($conn);
	 echo "0 results";
   }

?>

  </body>
</html>