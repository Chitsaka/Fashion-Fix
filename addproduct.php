<?php
/**
 * File
 *
 * Main navigation of the website
 *
 * @Category Components
 * @package  WordPress
 * @author   Lucky Katana <luckykatana73@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     https://fashionfix.netlify.app
 * @since    1.0.0
 */

 require 'auth.php';
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
	<link rel="stylesheet" href="styles.css">
	<title>Fashion-Fix | Add Product</title>
	<?php include 'header.php'; ?>
	<style>

.container.addprodpage{
			box-sizing:border-box;
			border:1px black solid;
			border-radius:10px;

			display:flex;
		}
		/*form{
		padding:40px;
		margin-left:30px;
		}*/
	.img-fluid{
		padding: 10px;
	}
	input{
		border-radius:50px;
	}
	/*
	button.btn{
		background-color:purple;
		border: 2px white solid;
		border-radius:20px;
		margin: 10px;
		font-size:15px;
	}
	button.btn:hover{
		cursor: pointer;
	}*/

</style>
</head>
<body>
<div class="container addprodpage">
	<div class=" col-4">
			<img src="card.jfif" alt="" class="img-fluid" width="400px" height="400px">
		</div>
    <form method="POST" action="addproduct1.php" enctype="multipart/form-data">
			<div class="form-elements col-12">
				<div class ="col-mb-4">
					<label for="name">Product Name</label>
					<input type="text" name="prod_name" id="name" class="form-control form-control-sm validate" required>
				</div>
				<div class ="col-mb-3">
					<label for="image">Product Image</label>
					<input type="file" accept="image/*" name="prod_image" id="image" class="form-control form-control-sm validate" required>
				</div>
				<div class ="col-mb-3">
					<label for="description">Product Description</label>
					<input type="text" name="prod_desc" id="description" class="form-control form-control-sm validate" required>
				</div>
				<div class ="col-mb-3">
					<label for="cost">Product Price</label>
					<input type="number" name="prod_price" id="cost" class="form-control form-control-sm validate" required>
				</div>
				<div class ="col-mb-3">
					<p>Section</p>
					<input type="radio" id="men" name="section" value="Men" required><label for="men">Men</label>
					<input type="radio" id="women" name="section" value="Women" required><label for="women">Women</label>

				</div>
				<div class ="col-mb-3">
				<label for="categorydropdown">Category</label>
				<select name="category[]" id="categorydropdown">
				<option disabled selected>Select Category</option>
				<option value="Shoes">Shoes</option>
				<option value="Skirts">Skirt</option>
				<option value="Jeans">Jeans</option>
				<option value="Tops">Tops</option>
				<option value="Sweater">Sweater</option>
				<option value="Denim">Denim</option>
				<option value="swimsuits">Swimsuits</option>
				<option value="Tshirts">Tshirts</option>
				<option value="Dresses">Dresses</option>
				<option value="Shorts">Shorts</option>
				<option value="Hoodies">hoodies</option>
				</select>
				</div>

				<button type="submit" name="addproduct" class="btn btn-outline-secondary">Save</button>
			</div>
	</form>

</div>
	</body>
	</html>