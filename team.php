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
						<h2>Our Team</h2>
						<div class="custom-hero-breadcrumb">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li>Team</li>
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

	<!--Team Area-->
	<section class="team-area section-padding">
		<div class="container">
			<div class="row justify-content-center wow fadeInUp" data-wow-delay="0.3s">
				<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 centered">
					<div class="section-title">
						<h2 class="cl-black mb-40">Meet Our Professionals</h2>
					</div>
				</div>
			</div>
			<?php
			require_once ("./php_include/team.php");
			?>
		</div>
	</section>-->
	<!--/Team Area-->

	<!--Faq Area-->
	<section class="faq-area section-padding">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 centered wow fadeInUp" data-wow-delay="0.3s">
					<div class="section-title">
						<h2 class="cl-black">Questions & Answers</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.4s">
					<div class="faq-contents">
						<ul class="accordion">
							<li>
								<a>Which do you like better pirates?</a>
								<p>Pellentesque justo lectus, a ipsum morbi at dui at, libero fusce tortorSed magna
									aliquet ridiculus lacus euismod porttitor, dolor nec vestilum sed aliquam, sem
									mauris pellentesque per volutpat sociis nec. Neque urna tempor conubia lorem, in
									morbi justo eleifend augu.</p>
							</li>
							<li>
								<a>Are you friends with women?</a>
								<p>Pellentesque justo lectus, a ipsum morbi at dui at, libero fusce tortorSed magna
									aliquet ridiculus lacus euismod porttitor, dolor nec vestilum sed aliquam, sem
									mauris pellentesque per volutpat sociis nec. Neque urna tempor conubia lorem, in
									morbi justo eleifend augu.</p>
							</li>
							<li>
								<a>Can I get update in future?</a>
								<p>Pellentesque justo lectus, a ipsum morbi at dui at, libero fusce tortorSed magna
									aliquet ridiculus lacus euismod porttitor, dolor nec vestilum sed aliquam, sem
									mauris pellentesque per volutpat sociis nec. Neque urna tempor conubia lorem, in
									morbi justo eleifend augu.</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay="0.5s">
					<div class="faq-contents">
						<ul class="accordion">
							<li>
								<a>Which do you like better, irates?</a>
								<p>Pellentesque justo lectus, a ipsum morbi at dui at, libero fusce tortorSed magna
									aliquet ridiculus lacus euismod porttitor, dolor nec vestilum sed aliquam, sem
									mauris pellentesque per volutpat sociis nec. Neque urna tempor conubia lorem, in
									morbi justo eleifend augu.</p>
							</li>
							<li>
								<a>Are you friends with women?</a>
								<p>Pellentesque justo lectus, a ipsum morbi at dui at, libero fusce tortorSed magna
									aliquet ridiculus lacus euismod porttitor, dolor nec vestilum sed aliquam, sem
									mauris pellentesque per volutpat sociis nec. Neque urna tempor conubia lorem, in
									morbi justo eleifend augu.</p>
							</li>
							<li>
								<a>Can I get update in future?</a>
								<p>Pellentesque justo lectus, a ipsum morbi at dui at, libero fusce tortorSed magna
									aliquet ridiculus lacus euismod porttitor, dolor nec vestilum sed aliquam, sem
									mauris pellentesque per volutpat sociis nec. Neque urna tempor conubia lorem, in
									morbi justo eleifend augu.</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/Faq Area-->

	<!--Testimonial Area-->
	<?php
    require_once ("./php_include/testimonial.php");
	?>
	<!--/Testimonial Area-->


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
	<script src="assets/js/script.js"></script>
</body>

</html>