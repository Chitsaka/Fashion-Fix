<?php
require 'auth.php';
require 'dbConnect.php';
if (isset($user_id)){

}else{
   header('location: index.php');
}

if (isset($_POST['addproduct'])) {
	// Code!
	$unique_id = rand(time(), 100000000);
	$productname = $_POST['prod_name'];
	$image       = $_FILES['prod_image']['name'];
	$description = $_POST['prod_desc'];
	$price       = $_POST['prod_price'];
	$category    = $_POST['category'];
	$fileerror = $_FILES['prod_image']['error'];

	if (is_array($category)){
		$category = implode(',', $category);

	}

	// Code to check whether the radio button has been clicked!
	if (isset($_POST['section'])) {
		// Code to check the value.
		$section = $_POST['section'];
	} else {
		// Code when there is no value.
		$section = null;
	}
	// Code when the button has a value.
	if ($section !== null) {
		// Code when the button has a section men.


					// Get images!
			$target_dir  = 'images/';
			$target_file = $target_dir . basename($_FILES['prod_image']['name']);

			// Select file type!
			$image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

			// Valid file extensions!
			$extensions_arr = array( 'jpg', 'jpeg', 'png', 'gif', 'jfif' );
			// get the extension of the file
			$fileext = explode('.', $image);
			//change the extension to a lowercase
			$fileactualext =strtolower(end($fileext));
			// change the name of the file to the product id for easy retrieval


			if (in_array($fileactualext, $extensions_arr)) {
				if ($fileerror=== 0) {
					$filenamenew = "".$image.".".$fileactualext;
					$filedestination = 'images/'.$filenamenew;

					// Upload file!
					move_uploaded_file($_FILES['prod_image']['tmp_name'], $filedestination);


					// Insert record!
					$sql = 'INSERT INTO product_details ( productName, image, description, price, category,unique_id, gender, sellerId ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ? )';

					// Prepare query!
					if ($stmt = mysqli_prepare($conn, $sql)) {
						// Binding ???
						mysqli_stmt_bind_param($stmt, 'sssisiss', $param_name, $param_image, $param_desc, $param_cost, $param_category, $param_uniqueid, $param_gender, $param_sellerid);

						$param_name     = $productname;
						$param_image    = $image;
						$param_desc     = $description;
						$param_cost     = $price;
						$param_category = $category;
						$param_uniqueid = $unique_id;
						$param_gender   = $section;
						$param_sellerid = $user_id;

						// Executing query!
						if (mysqli_stmt_execute($stmt)) {
							// Code!
							header("location: addproduct.php");
							exit;
						} else {
							// Code...
							echo mysqli_error($conn);
						}
					} else {
						// Code...
						echo 'there is an issue with your query command' . mysqli_error($conn);
					}
				}
			}

	} else {
		// code...
		echo 'section has not been selected';
	}
}
?>