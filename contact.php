<!doctype html>
<html lang="en">

<?php require_once ("./php_include/header.php");?>

<body>
<?php require_once ("./php_include/nav-bar.php");?>

	<!--Custom Hero Area-->
	<section class="custom-hero">
		<div class="container">
			<div class="row cl-white">
				<div class="col-lg-8 col-md-6">
					<div class="custom-hero-title">
						<h2>Contact us</h2>
						<div class="custom-hero-breadcrumb">
							<ul>
								<li><a href="index">Home</a></li>
								<li> Contact</li>
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

	<!--Contact Area-->
	<section class="contact-area pb-0 section-padding">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
					<div class="contact-form">
						<form action="contact_me.php" id="contact_form_submit">
							<input type="text" id="name" name="name" placeholder="Your name" required>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<input type="email" id="email" name="email" placeholder="Your email address"
										required>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<input type="text" id="number" name="number" placeholder="Your phone number"
										required>
								</div>
							</div>
							<textarea name="message" id="message" rows="6" name="message"
								placeholder="Message"></textarea>
							<button class="bttn btn-fill" type="submit">Send Message</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/Contact Area-->

	<!--Contact Map-->
	<section class="contact-area section-padding">
	<!--	<div id="map" class="map-area"></div> -->
	</section>
	<!--/Contact Map-->

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
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/magnific-popup.min.js"></script>
	<script src="assets/js/contact.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi4wppP2kn3BHzI99FMCwl-wyss7Sh6qs"></script>
	<script src="assets/js/script.js"></script>
</body>

</html>
