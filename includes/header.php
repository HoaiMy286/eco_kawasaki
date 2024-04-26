<?php
include 'lib/session.php';
Session::init();
?>
<?php
include_once 'lib/database.php';
include_once 'helpers/format.php';

spl_autoload_register(function ($class) {
	include_once "classes/$class.php";
});

$db = new Database();
$fm = new Format();
$category = new category();
$product = new product();
$cart = new cart();
$user = new user();
?>

<!DOCTYPE html>
<html>

<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<link rel="stylesheet" href="css/styles.css" />
	<link rel="stylesheet" href="css/header.css" />
	<link rel="stylesheet" href="css/main_index.css" />
	<link rel="stylesheet" href="css/footer.css" />
	<link rel="stylesheet" href="css/productdetail.css" />

	<!-- <script src="js/dashboard.js"></script> -->

	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery library -->

	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
	<div class="header-top d-flex align-items-center justify-content-between">
		<div class="logo">
			<a href="index.php">
			<img src="images/Kawasaki-Logo.jpg" alt="Logo" style="max-width: 150px; max-height: 75px;">
			</a>
		</div>
		<div class="header_top_right d-flex align-items-center">
			<div class="search_box me-3">
				<form action="search.php" method="GET">
					<div class="input-group">
						<input type="text" class="form-control" name="search" placeholder="Search for Products" required>
						<button class="btn btn-outline-secondary" type="submit">SEARCH</button>
					</div>
				</form>
			</div>
			<div class="shopping_cart me-3">
				<div class="cart">
					<a href="#" title="View my shopping cart" rel="nofollow" class="text-decoration-none">
						<span class="cart_icon"><i class="bi bi-cart-fill"></i></i></span>	
						<span class="cart_title">Cart</span>
						<!-- <span class="no_product">(empty)</span> -->
					</a>
				</div>
			</div>
			<div class="login me-3">
				<a href="login.php" class="text-decoration-none">
					<span class="login_icon"><i class="bi bi-person-circle"></i></span>
					Login
				</a>
			</div>
		</div>
	</div>

	<div class="header-menu" id="headerMenu">
		<a href="index.php"><h4>HOME</h4></a>
		<a href="products.php"><h4>PRODUCTS</h4></a>
		<a href="topbrands.php"><h4>TOP BRANDS</h4></a>
		<a href="cart.php"><h4>CART</h4></a>
		<a href="contact.php"><h4>CONTACT</h4></a>
	</div>
