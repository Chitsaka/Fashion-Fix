<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<nav class="navbar sticky-top navbar-light bg-light">
  <div class="container-fluid">

  <h2 class="align-text-center">
    <a class="navbar-brand" href="#">Sticky top</a>
    </h2>
<div >
    <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	   <div class="modal-dialog cascading-modal" role="document">
		 <!--Content-->
		 <div class="modal-content">

		   <!--Modal cascading tabs-->
		   <div class="modal-c-tabs">

			 <!-- Nav tabs -->
			 <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
			   <li class="nav-item">
				 <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="bi bi-person-fill"></i>
				   Login</a>
			   </li>
			   <li class="nav-item">
				 <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="bi bi-person-plus-fill"></i>
				   Register</a>
			   </li>
			 </ul>

			 <!-- Tab panels -->
			 <div class="tab-content">
			   <!--Panel 7-->
			   <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

				 <!--Body-->
				 <div class="modal-body mb-1">
				   <div class="md-form form-sm mb-5">
					   <i class="bi bi-envelope-fill"></i>
					 <input type="email" id="modalLRInput10" class="form-control form-control-sm validate">
					 <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
				   </div>

				   <div class="md-form form-sm mb-4">
					   <i class="bi bi-lock-fill"></i>
					 <input type="password" id="modalLRInput11" class="form-control form-control-sm validate">
					 <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
				   </div>
				   <div class="text-center mt-2">
					 <button class="btn btn-info">Log in <i class="bi bi-sign-in ml-1"></i></button>
				   </div>
				 </div>
				 <!--Footer-->
				 <div class="modal-footer">
				   <div class="options text-center text-md-right mt-1">
					 <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
					 <p>Forgot <a href="#" class="blue-text">Password?</a></p>
				   </div>
				   <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
				 </div>

			   </div>
			   <!--/.Panel 7-->

			   <!--Panel 8-->
			   <div class="tab-pane fade" id="panel8" role="tabpanel">

				 <!--Body-->
				 <div class="modal-body">
				   <div class="md-form form-sm mb-5">
					 <i class="bi bi-envelope prefix"></i>
					 <input type="email" id="modalLRInput12" class="form-control form-control-sm validate">
					 <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
				   </div>

				   <div class="md-form form-sm mb-5">
					 <i class="bi bi-lock prefix"></i>
					 <input type="password" id="modalLRInput13" class="form-control form-control-sm validate">
					 <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
				   </div>

				   <div class="md-form form-sm mb-4">
					 <i class="bi bi-lock prefix"></i>
					 <input type="password" id="modalLRInput14" class="form-control form-control-sm validate">
					 <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>
				   </div>

				   <div class="text-center form-sm mt-2">
					 <button class="btn btn-info">Sign up <i class="bi bi-sign-in ml-1"></i></button>
				   </div>

				 </div>
				 <!--Footer-->
				 <div class="modal-footer">
				   <div class="options text-right">
					 <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
				   </div>
				   <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
				 </div>
			   </div>
			   <!--/.Panel 8-->
			 </div>

		   </div>
		 </div>
		 <!--/.Content-->
	   </div>
	</div>

    <a href="" class="btn me-3 p-3" data-toggle="modal" data-target="#modalLRForm">
		<i class="bi bi-person-fill"></i>
	</a>
    <a href="Wishlist.php" class="btn me-3 p-3">
	    <i class="bi bi-heart"></i>
    </a>
    <a href="shoppingCart.php" class="btn me-3 p-3">
    	<i class="bi bi-cart3"></i>
    </a>
</div>
</div>

</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item dropdown">
        <a type="button" class="btn btn-lg drop-toggle" id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" data-bs-women="10,20">
          Women
</a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
          <li><a class="dropdown-item" href="Accessories.html">Accessories</a></li>
						<li><a class="dropdown-item" href="Jeans.php">Jeans</a></li>
						<li><a class="dropdown-item" href="Blousers.php">Blousers</a></li>
						<li><a class="dropdown-item" href="Bras.php">Bras</a></li>
						<li><a class="dropdown-item" href="Shoes.php">Shoes</a></li>
						<li><a class="dropdown-item" href="Swimsuits.php">Swimsuits</a></li>
						<li><a class="dropdown-item" href="Dresses.php">Dresses</a></li>
						<li><a class="dropdown-item" href="Skirts.php">Skirts</a></li>
						<li><a class="dropdown-item" href="Shorts.php">Shorts</a></li>
						<li><a class="dropdown-item" href="Underwear.php">Underwear</a></li>

          </ul>
        </li>
        <li class="nav-item dropdown">
        <a type="button" class="btn btn-lg drop-toggle" id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" data-bs-men="30,20">
           Men
</a>
           <ul class="dropdown-menu" aria-labelledby="dropdownMenuWomen">
					<li><a class="dropdown-item" href="Caps.php">Caps</a></li>
					<li><a class="dropdown-item" href="Jeansmen.php">Jeans</a></li>
					<li><a class="dropdown-item" href="Khakis.php">Khakis</a></li>
					<li><a class="dropdown-item" href="Blazers.php">Blazers</a></li>
					<li><a class="dropdown-item" href="Vests.php">Vests</a></li>
					<li><a class="dropdown-item" href="Shirts.php">Shirts</a></li>
					<li><a class="dropdown-item" href="Shoes.php">Shoes</a></li>
					<li><a class="dropdown-item" href="Socks.php">Socks</a></li>
					<li><a class="dropdown-item" href="Belts.php">Belts</a></li>
					<li><a class="dropdown-item" href="Sweater.php">Sweaters</a></li>
				</ul>
        </li>
        <li class="nav-item dropdown">
        <button type="button" class="btn btn-lg drop-toggle" id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" data-bs-kids="10,20">
            Kids
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuKids">
				  <li><a class="dropdown-item" href="Boys.php">Boys</a></li>
				  <li><a class="dropdown-item" href="Girls.php">Girls</a></li>
				</ul>
        </li>
        <li class="nav-item">
          <button type="button" class="btn btn-lg" onclick="window.location.href ='Sale.php' ">Sale</button>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  </body>
        </html>