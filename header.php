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

?>

<?php
include ('dbConnect.php');
include ('auth.php');
?>
<!doctype html>
<html lang="en" >
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!--icons
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
-->
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
<title>Fashion Fix </title>
<button type="button" class="btn btn-outline-rgba-black-slight" Onclick="window.location.href='openshop.php'">Seller Section</button>




<nav class="navbar navbar-expand-lg" style="background-color:#bf0854; font-family: sans-serif;">
	<div class="container-fluid">
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
	    <div class="col-md-6 flex-direction-row flex-justify-center flex-align-center">
				<h2 class="align-text-center">
				<a class="navbar-brand" href="index.php">
					<h2 style="color: rgb(0, 0, 0);"> FASHION FIX</h2>
				</a>
				</h2>
				</div>

<?php if ( isset( $firstname ) ) : ?>

<?php
$sql = "SELECT * FROM customer_info WHERE unique_id = $user_id";
 $result = mysqli_query($conn, $sql);
									$rows = mysqli_num_rows($result);
									$row = mysqli_fetch_assoc($result);
                        if ($rows > 0) {
							$role = $row['role'];
                            if ($role === "1"|| $role ==="2") {
					echo '<div class="session_data">
					<a class="nav-link " href="addproduct.php" aria-disabled="true" style="color: rgb(0, 0, 0);">Add Product</a>
					</div>
					<div class="navbarbrand" >
					<a class="nav-link " href="viewproduct.php" aria-disabled="true" style="color: rgb(0, 0, 0);">View Product</a>
					</div>
					';

                            }
                        }


?>

<div>
<a class="nav-link " href="logout.php" aria-disabled="true" style="color: rgb(0, 0, 0);">Logout</a>

</div>
<div>

<a class="nav-link " href="" tabindex="-1" aria-disabled="true" style="color: rgb(0, 0, 0);" ><?php echo ''.$firstname.'  '.$lastname.''; ?></a>

</div>
<div>
<a href="myWishlist.php">
<i  class="bi bi-heart" style="color: rgb(0, 0, 0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist"></i>
</a>
</div>

<div>

<a href="shopcart.php">
<i class="bi bi-cart3" style="color: rgb(0, 0, 0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Shopping"></i>
</a>
</div>

<?php else : ?>
						<!--begin of modal-->
		<div >
			<!--Modal: Login / Register Form-->
			<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog cascading-modal" role="document">
					<!--Content-->
					<div class="modal-content">

						<!--Modal cascading tabs-->
						<div class="modal-c-tabs">

							<!-- Nav tabs -->
							<ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">

							<li class="nav-item" id="loginlist">
									<a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="bi bi-person-fill"></i>
									Login</a>
							</li>
							<li class="nav-item" id="signuplist">
								<a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="bi bi-person-plus-fill"></i>
								Sign Up</a>
							</li>
							</ul>

							<!-- beginning of Tab panels -->
								<div class="tab-content">
								<!--login panel-->
								<div class="tab-pane fade show active" id="panel7" role="tabpanel">

									<!--Body-->

									<form method="POST" action="login.php">
									<div class="modal-body mb-1">
									<div class="md-form form-sm mb-5">
										<i class="bi bi-envelope-fill"></i>
										<label data-error="wrong" data-success="right" for="modalLRInput10">Email</label>
										<input type="email" id="modalLRInput10" class="form-control form-control-sm validate" name="email">
										</div>

									<div class="md-form form-sm mb-4">
										<i class="bi bi-lock-fill"></i>
										<label data-error="wrong" data-success="right" for="modalLRInput11">Password</label>
										<input type="password" id="modalLRInput11" class="form-control form-control-sm validate" name="password">
										<span id = "message" style="color:red"> </span>
										</div>

									<div class="text-center mt-2">
										<button class="btn btn-info" name="login">Log in</button>
									</div>
									</form>
									</div>
									<!--Footer-->
									<div class="modal-footer">
									<div class="options text-center text-md-right mt-1">
										<!--<p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>-->
										<p>Forgot <a href="resetpassword.php" class="blue-text">Password?</a></p>
									</div>
									<button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
									</div>
								<!--/.end of login panel-->
								</div>

								<!--sign up panel-->
								<div class="tab-pane fade" id="panel8" role="tabpanel">

										<!--Body-->
										<div class="modal-body">
										<form method="POST" action="signup.php" Onsubmit="return verifyPassword()">
										<div class="md-form form-sm mb-5">
										<i class="bi bi-person-fill"></i>
										<label data-error="wrong" data-success="right" for="fname">First Name</label>
										<input type="text" name="FirstName" id="fname" class="form-control form-control-sm validate">
										</div>

										<div class="md-form form-sm mb-5">
										<i class="bi bi-person-fill"></i>
										<label data-error="wrong" data-success="right" for="lname">Last Name</label>
										<input type="text" name="LastName" id="lname" class="form-control form-control-sm validate">
										</div>

										<div class="md-form form-sm mb-5">
											<i class="bi bi-envelope-fill"></i>
											<label data-error="wrong" data-success="right" for="email">Email</label>
											<input type="email" id="email" name="email" class="form-control form-control-sm validate">
										</div>

										<div class="md-form form-sm mb-5">
										<i class="bi bi-phone"></i>
										<label data-error="wrong" data-success="right" for="phone_number">Phone Number</label>
										<input type="text" name="phonenumber" id="phone_number" class="form-control form-control-sm validate">
										</div>

										<div class="md-form form-sm mb-5">
											<i class="bi bi-lock-fill"></i>
											<label data-error="wrong" data-success="right" for="password">Password</label>
											<input type="password" id="password" name="password" class="form-control form-control-sm validate">

										</div>

										<div class="md-form form-sm mb-4">
											<i class="bi bi-lock-fill"></i>
											<label data-error="wrong" data-success="right" for="rpassword">Confirm Password</label>
											<input type="password" id="rpassword" name="rpassword"class="form-control form-control-sm validate">
										</div>

										<div class="text-center form-sm mt-2">
											<button class="btn btn-info" name="signup">Sign up</button>
										</div>
										</form>
										</div>
										<!--Footer-->
										<div class="modal-footer">
										<div class="options text-right">

											<p class="pt-1">Are you a seller? <a href="openshop.php" class="blue-text">Sign Up</a></p>

										</div>
										<button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
										</div>
									</div>
									<!--/.end of signup Panel-->
									</div>

									<!--end of Tab panels -->
									</div>
									<!--end of Modal cascading tabs-->
									</div>
									<!--/.Content-->
									</div>

									</div>
									</div>
										<!--Modal: Login / Register Form modal button-->

						<a href="" class="btn btn-default btn-rounded my-3" data-toggle="modal" data-target="#modalLRForm" data-bs-toggle="tooltip" data-bs-placement="top" title="login/signup">
															<i class="bi bi-person-fill"></i>
						</a>
						<?php endif ?>
</div>
<!--end of container-->
<!--navigation-->
</nav>

			<!--dropdown menu-->
	<nav class="navbar navbar-expand-lg d-flex">
		<div class="container-fluid">
				<div class="d-flex">
					<div class="dropdown">
						<a type="button" class="btn btn-lg drop-toggle" id="dropdownMenuwomen" data-bs-toggle="dropdown" aria-expanded="false" data-bs-women="10,20">
						Women
						</a>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenuWomen">
						<li><a class="dropdown-item" href="women_tshirts.php">Tshirts</a></li>
						<li><a class="dropdown-item" href="women_jeans.php">Jeans</a></li>
						<li><a class="dropdown-item" href="Blousers.php">Tops</a></li>
						<li><a class="dropdown-item" href="Bras.php">Bras</a></li>
						<li><a class="dropdown-item" href="womenShoes.php">Shoes</a></li>
						<li><a class="dropdown-item" href="womendenim.php">Denim</a></li>
						<li><a class="dropdown-item" href="women_sweater.php">sweaters</a></li>
						<li><a class="dropdown-item" href="Dresses.php">Dresses</a></li>
						<li><a class="dropdown-item" href="Skirts.php">Skirts</a></li>
						<li><a class="dropdown-item" href="women_Shorts.php">Shorts</a></li>
						<li><a class="dropdown-item" href="swimsuits.php">swimsuits</a></li>
						<li><a class="dropdown-item" href="women_hoodies.php">Hoodies</a></li>
					</ul>
					</div>

				<div class="dropdown me-1">
				<a type="button" class="btn btn-lg drop-toggle" id="dropdownMenumen" data-bs-toggle="dropdown" aria-expanded="false" data-bs-women="10,20">
				Men
					</a>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenuMen">
					<li><a class="dropdown-item" href="men_jeans.php">Jeans</a></li>
					<li><a class="dropdown-item" href="men_shorts.php">shorts</a></li>
					<li><a class="dropdown-item" href="men_tshirts.php">Shirts</a></li>
					<li><a class="dropdown-item" href="menshoes.php">Shoes</a></li>
					<li><a class="dropdown-item" href="men_denim.php">denim</a></li>
					<li><a class="dropdown-item" href="men_hoodies.php">Hoodies</a></li>
					<li><a class="dropdown-item" href="men_sweater.php">sweaters</a></li>
				</ul>

				</div>

				<button type="button" class="btn btn-lg" Onclick="window.location.href='Sale.php'"> Sales</button>

				<div id="searchform">
					<form class="d-flex">
				<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-secondary" type="submit">Search</button>
			</form>
			</div>
		</div>
		<!--end of container-->
		</div>

	<!--end of navigation-->
	</nav>
	</head>

	<body>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script>
function verifyPassword() {
	var pvalue = '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/';
	var password = document.getElementById("password").value;
	var rpassword = document.getElementById("rpassword").value;
	//check empty password field
	if(password == null) {
	document.getElementById("message").innerHTML = "**Fill the password please!";
	return false;
	}

	if(password === pvalue) {
		document.getElementById("message").innerHTML = "Password must contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character";
	}

	//minimum password length validation
	if(password.length < 8) {
	document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";
	return false;
	}

	//maximum length of password validation
	if(password.length > 15) {
	document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";
	return false;
	} else {
	alert("Password is correct");
	}

	if( password !== rpassword )
	{
	alert("Passwords did not match");
	} else {
	alert("Password created successfully");
	}
}
</script>
</body>
</html>