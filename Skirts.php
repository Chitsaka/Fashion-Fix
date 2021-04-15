<?php
require 'header.php';

require_once 'dbConnect.php';


$sql = 'SELECT * FROM product_details_men WHERE category = "skirts" AND gender ="Women"';

	$results = mysqli_query( $conn, $sql );

if ( $results ) {
		// Code!
		$rows = mysqli_num_rows( $results );
	if ( $rows > 0 ) {
		// Code!
		echo '<div class = "container">
		<div class="row justify-content-center">';
		while ( $women_skirts = mysqli_fetch_assoc( $results ) ) {
				// Code...
				$product_id = $women_skirts['unique_id'];
                $img        = $women_skirts['image'];
                echo $img;

				echo '<div class="card" style="width: 18rem;">
				<img src="images/' . $img .'.jfif" class="card-img-top" alt="...">
				<div class="card-body">
				  <h5 class="card-title">' . $women_skirts['productName'] . '</h5>
				  <p class="card-text">' . $women_skirts['description'] . '</p>
				  <p class="card-text">' . $women_skirts['price'] . '</p>
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
	<!-- cards-->
<div class="container">
    <div class="row justify-content-center">
        <div class="card col-md-4" style="width: 18rem;">
            <a target="_parent" href="#">
                <img src="https://images.unsplash.com/photo-1594633313515-7ad9334a2349?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" class="card-img-top" alt="">
            </a>
                <div class="card-body">
                <p>Miniskirt</p>
            </div>
        </div>
        <div class="card col-md-4" style="width: 18rem;">
            <a target="_parent" href="#">
                <img src="https://images.unsplash.com/photo-1594633313515-7ad9334a2349?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" class="card-img-top" alt="">
            </a>
        <div class="card-body">
            <p>Miniskirt</p>
        </div>
        </div>
        <div class="card col-md-4" style="width: 18rem;">
            <a target="_parent" href="#">
                <img src="https://images.unsplash.com/photo-1594633313515-7ad9334a2349?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" class="card-img-top" alt="">
            </a>
        <div class="card-body">
            <p>Miniskirt</p>
        </div>
        </div>
        <div class="card col-md-4" style="width: 18rem;">
            <a target="_parent" href="#">
                <img src="https://images.unsplash.com/photo-1594633313515-7ad9334a2349?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" class="card-img-top" alt="">
            </a>
            <div class="card-body">
                <p>Miniskirt</p>
            </div>
        </div>
        <div class="card col-md-4" style="width: 18rem;">
            <a target="_parent" href="#">
                <img src="https://images.unsplash.com/photo-1594633313515-7ad9334a2349?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" class="card-img-top" alt="">
            </a>
            <div class="card-body">
                <p>Miniskirt</p>
            </div>
        </div>
        <div class="card col-md-4" style="width: 18rem;">
            <a target="_parent" href="#">
                <img src="https://images.unsplash.com/photo-1594633313515-7ad9334a2349?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" class="card-img-top" alt="">
            </a>
            <div class="card-body">
                <p>Miniskirt</p>
            </div>
        </div>
	</div>
		</div>

   <!--end of card-->

 </body>
</html>