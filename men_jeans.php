<?php
require 'header.php';

require_once 'dbConnect.php';


$sql = 'SELECT * FROM product_details_men WHERE category = "jeans" AND gender ="Men"';

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

				echo '<div class="card" style="width: 18rem;">
				<img src="images/' . $img .'.jfif" class="card-img-top" alt="...">
				<div class="card-body">
				  <h5 class="card-title">' . $men_jeans['productName'] . '</h5>
				  <p class="card-text">' . $men_jeans['description'] . '</p>
				  <p class="card-text">' . $men_jeans['price'] . '</p>
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
			echo '<a href="addproduct.php" class="btn"> add product</a>';
	}

	} else {
		# code...
		echo ( 'something went wrong' ) . mysqli_error( $conn );

	}

	?>

	<!-- cards-->
		<div class="container">
    <div class="row justify-content-center">
        <div class="card" style="width: 18rem;">
            <a target="_parent" href="#">
                <img src="https://images.unsplash.com/photo-1499013819532-e4ff41b00669?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="">
            </a>
                <div class="card-body">
                <p>Cute boyfriend shoes</p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <a target="_parent" href="#">
                <img src="https://images.unsplash.com/photo-1499013819532-e4ff41b00669?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="">
            </a>
                <div class="card-body">
                <p>Cute boyfriend shoes</p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <a target="_parent" href="#">
                <img src="https://images.unsplash.com/photo-1499013819532-e4ff41b00669?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="">
            </a>
                <div class="card-body">
                <p>Cute boyfriend shoes</p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <a target="_parent" href="#">
                <img src="https://images.unsplash.com/photo-1499013819532-e4ff41b00669?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="">
            </a>
                <div class="card-body">
                <p>Cute boyfriend shoes</p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <a target="_parent" href="#">
                <img src="https://images.unsplash.com/photo-1499013819532-e4ff41b00669?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="">
            </a>
                <div class="card-body">
                <p>Cute boyfriend shoes</p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <a target="_parent" href="#">
                <img src="https://images.unsplash.com/photo-1499013819532-e4ff41b00669?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="">
            </a>
                <div class="card-body">
                <p>Cute boyfriend shoes</p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <a target="_parent" href="#">
                <img src="https://images.unsplash.com/photo-1499013819532-e4ff41b00669?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="">
            </a>
                <div class="card-body">
                <p>Cute boyfriend shoes</p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <a target="_parent" href="#">
                <img src="https://images.unsplash.com/photo-1499013819532-e4ff41b00669?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="">
            </a>
                <div class="card-body">
                <p>Cute boyfriend shoes</p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <a target="_parent" href="#">
                <img src="https://images.unsplash.com/photo-1499013819532-e4ff41b00669?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="">
            </a>
                <div class="card-body">
                <p>Cute boyfriend shoes</p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
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