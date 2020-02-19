<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://kit.fontawesome.com/705de00ff8.js"></script>
	<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">


	<title>Account - Hosting Business HTML Template</title>

	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">

	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/magnific-popup.css" rel="stylesheet">

	<link href="assets/css/animate.css" rel="stylesheet">
	<link href="assets/css/owl.carousel.min.css" rel="stylesheet">


	<!-- Main css -->
	<link href="assets/css/main.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<?php require_once("./php_include/header.php"); ?>
</head>

<body>
<?php require_once ("./php_include/nav-bar.php"); ?>

	<!--Custom Hero Area-->
	<section class="custom-hero">
		<div class="container">
			<div class="row cl-white">
				<div class="col-lg-8 col-md-6">
					<div class="custom-hero-title">
						<h2>Account</h2>
						<div class="custom-hero-breadcrumb">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li>Account</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<img src="assets/images/reliable.png" alt="">
				</div>
			</div>
		</div>
	</section>
	<!--/Custom Hero Area-->

	<!--Account Area-->
	<section class="account-area section-padding">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="account-form">
								<h2>Registration</h2>
								<form action="#">
									<input type="text" placeholder="*First Name" required>
									<input type="text" placeholder="*Last Name" required>
									<select name="countries">
										<option value="">Country</option>
										<option value="">Country</option>
										<option value="">Country</option>
										<option value="">Country</option>
										<option value="">Country</option>
									</select>
									<input type="text" placeholder="*Street Address" required>
									<input type="text" placeholder="City" required>
									<input type="text" placeholder="*Phone Number" required>
									<input type="email" placeholder="*Email Address" required>
									<button type="submit" class="bttn btn-fill">Submit</button>
								</form>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="account-form">
								<h2>Login</h2>
								<form action="#">
									<input type="email" placeholder="*Email Address" required>
									<input type="password" placeholder="*Password" required>
									<button type="submit" class="bttn btn-fill">Login</button>
									<a href="">Forgot password</a>
								</form>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!--/Account Area-->

<?php require_once ("./php_include/footer.php"); ?>



	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/jquery-migrate.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>

	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	<script src="assets/js/scrollUp.min.js"></script>
	<script src="assets/js/magnific-popup.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>

</html>