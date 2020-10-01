
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Home: Unilever Tea </title>

	<!--meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Husbandry Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//meta tags ends here-->

	<!--booststrap-->

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<!--//booststrap end-->

	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<!--stylesheets-->
	<link href="css/style.css" rel='stylesheet' type='text/css' media="all">
	<!--//stylesheets-->
	<link rel="stylesheet" href="css/lightbox.css">
	<!--gallery-->

	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">

</head>

<body>
	<div class="header-outs">
		<div class="w3-agile-logo">
			<div class=" head-wl">
				<div class="headder-w3">
					<h1><a href="index.html">Unilever Tea Co. Ltd</a></h1>
				</div>


				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="top-nav">
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">

					<!-- //header -->

					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
						 aria-controls="navbar">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
                </button>
					</div>

					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav ">
							<li><a href="index.php " class="scroll">Home</a></li>
							<li><a href="#services" class="scroll">Services</a></li>
							<li><a href="../login/farmer_login/index.php">Farmer login</a></li>
							<li><a href="mavcontact/index.php">Contact US</a></li>
							<li><a href="../login/staff_login/index.php">Staff Login</a></li>
						</ul>
					</div>

				</div>
			</nav>
		</div>
		<!-- Slideshow 4 -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider4">
					<li>
						<div class="slider-img">
							<div class="container">
								<div class="slider-info">
									<h4>Top Quality Tea Leaves. </h4>
									<p>We get access to best tea leaves from our farmers. We buy and bring them on time</p>

								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="slider-img ">
							<div class="container">
								<div class="slider-info">
									<h4>Real And Natural Tea Leaves</h4>
									<p>Highland Tea. This is indeed the best crops within our reach.  </p>

								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="slider-img">
							<div class="container">
								<div class="slider-info">
									<h4>A farmers' taste of Top grade Tea.</h4>
									<p>Direct from production. We give the farmer the first taste of their crop. </p>

								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- This is here just to demonstrate the callbacks -->
	<!-- <ul class="events">
      <li>Example 4 callback events</li>
    </ul>-->
	<!-- //banner -->
	<!--Services-->
	<div class="services" id="services">
		<div class="container">
			<h2 class="sub-title">Why Choose Us</h2>

			<div class="banner-bottom-girds">
				<div class="col-md-6  col-sm-6 col-xs-6  its-banner-grid">
					<div class="white-shadow">

						<div class=" col-md-8 white-right">
							<h4>Best Logistic</h4>
							<p> We collect Your Tea straight from the buying center without any delay.</p>
							<div class="w3layouts_more-buttn ser-buttn">

							</div>

						</div>
						<div class="col-md-4 white-left">
							<span class="fa fa-truck banner-icon" aria-hidden="true"></span>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6  col-sm-6 col-xs-6  its-banner-grid">
					<div class="white-shadow">

						<div class=" col-md-8 white-right">
							<h4>Best Quality</h4>
							<p>Our Tea Supply is with no doubt the best brand you can test.</p>
							<div class="w3layouts_more-buttn ser-buttn">

							</div>

						</div>
						<div class="col-md-4 white-left">
							<span class="fa fa-flask banner-icon" aria-hidden="true"></span>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6  col-sm-6 col-xs-6  its-banner-grid">

				</div>
				<div class="col-md-6  col-sm-6 col-xs-6  its-banner-grid">

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<!--//Services-->


	<!-- counter-->
	<div class="rate" id="rate">
		<div class="container">
			<h3 class="title clr">Our Facilities</h3>
			<div class="stats-info agileits w3layouts">
				<div class="col-md-3 col-sm-3 col-xs-6 agileits w3layouts stats-grid stats-grid-1">
					<div class="ser-icone"> <span class="fa fa-users font" aria-hidden="true"></span>
					</div>
					<?php
					include_once '../admin/dashb.php';
           echo "<div class='agileits-w3layouts counter'>$Fnum_rows</div>";
					?>

					<div class="stat-info-w3ls">
						<h4 class="agileits w3layouts">Farmers</h4>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 agileits w3layouts stats-grid stats-grid-2">
					<div class="ser-icone"> <span class="fa fa-pagelines font" aria-hidden="true"></span>
					</div>
					<?php
					include_once '../admin/dashb.php';
           echo "<div class='agileits-w3layouts counter'>$Anum_rows</div>";
					?>
					<div class="stat-info-w3ls">
						<h4 class="agileits w3layouts ">Transactions</h4>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 stats-grid agileits w3layouts stats-grid-4">
					<div class="ser-icone"> <span class="fa fa-truck font" aria-hidden="true"></span>
					</div>
					<?php
					include_once '../admin/dashb.php';
					 echo "	<div class='agileits-w3layouts counter'>$Pnum_rows</div>";
					?>
					<div class="stat-info-w3ls">

						<h4 class="agileits w3layouts">Collections</h4>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //counter-->

	<footer>
		<div class="container">
			<div class="col-md-7 col-sm-8 header-side">
				<p>© 2020 Unilever Co.Ltd. All Rights Reserved | Designed by  Admin</p>
			</div>
			<div class="col-md-5 col-sm-4 header-side">
				<div class="buttom-social-grids">

					<ul>
						<li><a href="#"><span class="fa fa-facebook"></span></a></li>
						<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						<li><a href="#"><span class="fa fa-rss"></span></a></li>
						<li><a href="#"><span class="fa fa-vk"></span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!--//contact-->
	<!--js working-->
	<script src='js/jquery-2.2.3.min.js'></script>

	<!-- //js  working-->

	<!-- gallery -->
	<script src="js/lightbox-plus-jquery.min.js"></script>
	<!-- //gallery -->
	<script src="js/responsiveslides.min.js"></script>

	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 900,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!--// banner-->
	<!-- OnScroll-Number-Increase-JavaScript -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //OnScroll-Number-Increase-JavaScript -->
	<!-- start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- for-bottom-to-top smooth scrolling -->
	<script>
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //for-bottom-to-top smooth scrolling -->

	<!--bootstrap-->
	<script src="js/bootstrap.js"></script>
	<!--// bootstrap-->
</body>

</html>
