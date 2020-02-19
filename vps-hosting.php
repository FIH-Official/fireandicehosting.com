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
						<h2>VPS Hosting</h2>
						<div class="custom-hero-breadcrumb">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li>VPS Hosting</li>
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

	<!--Services Area-->
	<section class="services-area section-padding bf-none af-none">
		<div class="container">
			<div class="row single-services pb-0 mb-0 mt-0">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
					<h2 class="mb-20">VPS Hosting</h2>
					<p>As absolute is by amounted repeated entirely ye returned. These ready timed enjoy might sir yet
						one since. Years drift never if could forty being no. On estimable dependent as suffering on my.
					</p>
					<ul>
						<li>Terrible Secrets Your Grandmother Thinks About In.</li>
						<li>Dirty Things That Make Therapists Work Harder.</li>
						<li>Mila Kunis's Top 10 Surprising Microsoft Excel Tips.</li>
						<li>Scary Facts About Treasury Secretary Jack Lew.</li>
					</ul>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay="0.4s">
					<div class="hosting-image-right">
						<img src="assets/images/vps-hosting.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/Services Area-->

	<!--Promo Video Area-->
	<section class="promo-video-area dark-overlay section-padding"
		style="background: url(assets/images/promo-video-bg.jpg) no-repeat">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 centered wow fadeInUp" data-wow-delay="0.3s">
					<div class="promo-video">
						<a class="video-popup" href="https://www.youtube.com/watch?v=GT6-H4BRyqQ"><i
								class="fa fa-play"></i></a>
						<h2 class="cl-white">Play Video</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/Promo Video Area-->

	<!--Filter Pricing Area-->
	<section class="filter-pricing section-padding">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 centered wow fadeInUp" data-wow-delay="0.3s">
					<div class="section-title">
						<h2 class="cl-black">VPS Server Price</h2>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 centered wow fadeInUp" data-wow-delay="0.3s">

					<div class="row justify-content-center wow fadeInUp" data-wow-delay="0.4s">
						<ul id="tabsJustified" class="nav nav-tabs hosting-tab-btns mb-40">
							<li><a href="" data-target="#monthly" data-toggle="tab"
									class="active bor-radius-lft">Monthly</a></li>
							<li><a href="" data-target="#yearly" data-toggle="tab" class="bor-radius-rgt">Yearly</a>
							</li>
						</ul>
					</div>

					<div id="tabsJustifiedContent" class="tab-content">
						<div id="monthly" class="tab-pane fade active show">

							<div class="range-slider range-slider--dotted">
								<input class="range-slider__input js-dotted-range-slider" type="range" value="0" min="0"
									max="2">
								<div class="row range-items">
									<div class="col">
										<b>VPS 1 GB SSD</b>
									</div>
									<div class="col">
										<b>VPS 5 GB SSD</b>
									</div>
									<div class="col">
										<b>VPS 10 GB SSD</b>
									</div>
								</div>
							</div>

							<div class="range-slider range-slider--dotted">
								<input class="range-slider__input js-dotted-range-slider" type="range" value="1" min="0"
									max="2">
								<div class="row range-items">
									<div class="col">
										<b>Bandwidth 1 TB</b>
									</div>
									<div class="col">
										<b>Bandwidth 2 TB</b>
									</div>
									<div class="col">
										<b>Bandwidth 5 TB</b>
									</div>
								</div>
							</div>

							<ul class="range-price-btn">
								<li><span>$44.49</span></li>
								<li><a href="">Order Now</a></li>
							</ul>

						</div>


						<div id="yearly" class="tab-pane fade">

							<div class="range-slider range-slider--dotted">
								<input class="range-slider__input js-dotted-range-slider" type="range" value="0" min="0"
									max="2">
								<div class="row range-items">
									<div class="col">
										<b>VPS 10 GB SSD</b>
									</div>
									<div class="col">
										<b>VPS 50 GB SSD</b>
									</div>
									<div class="col">
										<b>VPS 100 GB SSD</b>
									</div>
								</div>
							</div>

							<div class="range-slider range-slider--dotted">
								<input class="range-slider__input js-dotted-range-slider" type="range" value="1" min="0"
									max="2">
								<div class="row range-items">
									<div class="col">
										<b>Bandwidth 10 TB</b>
									</div>
									<div class="col">
										<b>Bandwidth 20 TB</b>
									</div>
									<div class="col">
										<b>Bandwidth 50 TB</b>
									</div>
								</div>
							</div>

							<ul class="range-price-btn">
								<li><span>$440.49</span></li>
								<li><a href="">Order Now</a></li>
							</ul>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/Filter Pricing Area-->
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
	<script src="assets/js/vps-range.js"></script>
	<script src="assets/js/script.js"></script>
</body>

</html>