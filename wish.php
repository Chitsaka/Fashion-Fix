<?php include 'header.php';
require_once 'dbConnect.php';
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

<!--css styles-->
<link rel="stylesheet" href="styles.css">
	<title>Document</title>
</head>
<body>
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
						<a href="#!">
							<div class="mask">
								<img class="img-fluid w-100"
									src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12.jpg">
								<div class="mask rgba-black-slight"></div>
							</div>
						</a>
					</div>

					<div class="text-center pt-4">

						<h5>Blue denim shirt</h5>
						<p class="mb-2 text-muted text-uppercase small">Shirts</p>
						<ul class="rating">
							<li>
								<i class="bi bi-star bi-sm text-primary"></i>
							</li>
							<li>
								<i class="bi bi-star bi-sm text-primary"></i>
							</li>
							<li>
								<i class="bi bi-star bi-sm text-primary"></i>
							</li>
							<li>
								<i class="bi bi-star bi-sm text-primary"></i>
							</li>
							<li>
								<i class="bi bi-star bi-sm text-primary"></i>
							</li>
						</ul>
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

			</div>
			<!-- Grid column -->

			<!-- Grid column -->
			<div class="col-md-4 mb-5">

				<!-- Card -->
				<div class="">

					<div class="view zoom overlay z-depth-2 rounded">
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

					<div class="text-center pt-4">

						<h5>Red hoodie</h5>
						<p class="mb-2 text-muted text-uppercase small">Hoodies</p>
						<ul class="rating">
							<li>
								<i class="bi bi-star bi-sm text-primary"></i>
							</li>
							<li>
								<i class="bi bi-star bi-sm text-primary"></i>
							</li>
							<li>
								<i class="bi bi-star bi-sm text-primary"></i>
							</li>
							<li>
								<i class="bi bi-star bi-sm text-primary"></i>
							</li>
							<li>
								<i class="bi bi-star bi-sm text-primary"></i>
							</li>
						</ul>
						<hr>
						<h6 class="mb-3">35.99 $</h6>
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

			</div>
			<!-- Grid column -->

			<!-- Grid column -->
			<div class="col-md-4 mb-5">

				<!-- Card -->
				<div class="">

					<div class="view zoom overlay z-depth-2 rounded">
						<img class="img-fluid w-100"
							src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg" alt="Sample">
						<h4 class="mb-0"><span class="badge badge-primary badge-pill badge-news">Sale</span></h4>
						<a href="#!">
							<div class="mask">
								<img class="img-fluid w-100"
									src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14.jpg">
								<div class="mask rgba-black-slight"></div>
							</div>
						</a>
					</div>

					<div class="text-center pt-4">

						<h5>Grey sweater</h5>
						<p class="mb-2 text-muted text-uppercase small">Sweaters</p>
						<ul class="rating">
							<li>
								<i class="bi bi-star bi-sm text-primary"></i>
							</li>
							<li>
								<i class="bi bi-star bi-sm text-primary"></i>
							</li>
							<li>
								<i class="bi bi-star bi-sm text-primary"></i>
							</li>
							<li>
								<i class="bi bi-star bi-sm text-primary"></i>
							</li>
							<li>
								<i class="bi bi-star bi-sm text-primary"></i>
							</li>
						</ul>
						<hr>
						<h6 class="mb-3">
							<span class="text-danger mr-1">$21.99</span>
							<span class="text-grey"><s>$36.99</s></span>
						</h6>
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

			</div>
			<!-- Grid column -->

		</div>
		<!-- Grid row -->

	</section>
	<!--Section: Block Content-->
</body>
</html>