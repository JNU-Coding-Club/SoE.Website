<?php

$conn = mysqli_connect("localhost", "root", "", "SOE");
if ($conn->connect_error) {
	die("Connection failed:" . $conn->connect_error);
}
$sql = "CREATE DATABASE IF NOT EXISTS notice;";
$conn->query($sql);
$sql = "INSERT INTO notice (information, url, new)
        VALUES ('Comming from php', 'test1', 0)";
$conn->query($sql);
$sql = "INSERT INTO notice (information, url, new)
        VALUES ('Again from php', 'test2', 1)";
$conn->query($sql);
$sql = "SELECT id, information, url, new from notice";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />

	<link rel="icon" href="assets/favicon.ico">
	<title>School of Engineering &middot; JNU</title>
	<!-- fontawesome icon css -->
	<link rel="stylesheet" href="fontawesome/css/all.min.css">
	<!-- google font-family -->
	<link href='https://fonts.googleapis.com/css?family=Charm' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Charmonman' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Ceviche One' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Carter One' rel='stylesheet'>
	<!-- bootstrap-4 css -->
	<link rel="stylesheet" href="libs/bootstrap-4.5.3.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/styles.css">
	<!-- swiper.js css -->
	<link rel="stylesheet" href="css/swiper-bundle-min.css">
	<!-- <link rel="stylesheet" href="css/swiper-bundle.css"> -->
	<!-- owl-corousel css-->
	<link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css"> -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css"> -->
	<style>
		html * {
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
		}

		@font-face {
			font-family: Arya;
			src: url(fonts/Arya-Bold.ttf);
		}
	</style>
</head>

<body>
	<header class="header" id="page-wrapper">
		<div class="ribbon-wrapper">
			<div class="ribbon">Feedback</div>
		</div>
		<div class="header-top">
			<div class="container">
				<div class="row py-md-1">
					<div class="col col-sm-4 text-center">Text1</div>
					<div class="col col-sm-4 text-center">Utility Header</div>
					<div class="col col-sm-4 text-center">Text2</div>
				</div>
			</div>
		</div>
		<div class="wrapper container-fluid header-middle">
			<div class="wrapper-elm">
				<div class="logo-container">
					<div class="logo-img">
						<img src="images/jnuLogo.png" class="img-fluid">
					</div>
				</div>
				<div class="cd-intro">
					<h1 class="cd-headline slide">
						<span class="cd-words-wrapper">
							<b class="is-visible">School of Engineering &#127774;</b>
							<b>Jawaharlal Nehru University</b>
							<b style="font-family: Arya;">जवाहरलाल नेहरू विश्वविद्यालय</b>
						</span>
					</h1>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="#">
					<img src="images/jnuLogo.png" alt="" class="img-fluid">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="menu-icon-bar"></span>
					<span class="menu-icon-bar"></span>
					<span class="menu-icon-bar"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Programmes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Admission</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Faculty</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Research</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Events</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Student <i class="fa fa-caret-down" style="font-size:15px"></i></a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Clubs</a>
								<a class="dropdown-item" href="#">Start Up</a>
								<a class="dropdown-item" href="#">Research</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Facilities</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Gallary</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Contact Us</a>
						</li>
					</ul>
			</nav>
		</div>
	</header>
	<!-- Swiper -->
	<div class="container-fluid p-0">
		<img src="images/slide1.jpg" alt="" class="bg-img img-fluid" style="position: absolute; z-index: -1;">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide" style="background-image: linear-gradient(rgba(63,208,212,0.5),rgba(0,0,0,0.7)), url('images/slide1.jpg');">
					<div class="title">Slide 1</div>
					<div class="subtitle">Subtitle</div>
				</div>
				<div class="swiper-slide" data-swiper-autoplay="3000" style="background-image: linear-gradient(rgba(63,208,212,0.5),rgba(0,0,0,0.7)),  url('images/slide2.jpg');">
					<div class="title">Slide 2</div>
					<div class="subtitle">Subtitle</div>
				</div>
				<div class="swiper-slide" data-swiper-autoplay="3000" style="background-image: linear-gradient(rgba(63,208,212,0.5),rgba(0,0,0,0.7)),  url('images/slide3.jpg');">
					<div class="title">Slide 3</div>
					<div class="subtitle">Subtitle</div>
				</div>
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination swiper-pagination-white">

			</div>
			<!-- Add Navigation -->
			<div class="prev-btn swiper-button-prev">
				<img src="images/slide1.jpg" alt="">
			</div>
			<div class="next-btn swiper-button-next">
				<img src="images/slide1.jpg" alt="">
			</div>
		</div>
	</div>
	<section class="updates mt-5">
		<div class="container">
			<div class="section-content">
				<div class="row">
					<div class="col-12">
						<div class="row">
							<div class="col-md-2  text-md-right">
								<div class="News ">
									<div class="bn-title d-none d-sm-block">
										<p style="font-size: 1.4em;" class="badge badge-danger">Bulletin</p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-8 events pt-1 ml-2 ml-md-0">
								<p><a href="" class="typewrite" data-period="2000" data-type='[ "Hi, we are from JNU.", "I am Creative.", "I Love Design.", "I Love to Develop." ]'><span class="wrap"></span></a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="container mt-5">
		<div class="row pt-2">
			<div class="col-md-6 col-sm-12 bg-bag  ">
				<div class="line mt-3 "></div>
				<h4 class="ml-4 pt-3">ADMISSION <span class="h5 font-weight-bold" style="color: #8B4513;">ZONE</span></h4>
				<h5 class="text-center bg-info text-white p-1 mt-3" style="height: 30px;">B.Tech+M.Tech/MS Admissions 2020</h5>
				<div class="col-12 mt-4">
					<div class="well font-weight-bold h6" style="max-height: 216px;overflow: auto;">
						<ul class="list-group checked-list-box">
							<li class="list-group-item" style="background-color: #FAF0E6">Admissions through CSAB-2020/JOSAA-2020</li>
							<li class="list-group-item" style="background-color: #FAF0E6 ">Admissions through DASA scheme-2020</li>
							<li class="list-group-item" style="background-color: #FAF0E6 ">School of Engineering facilitates online
								reporting of selected candidates under DASA scheme</li>
							<li class="list-group-item" style="background-color: #FAF0E6 ">Guidelines for online verification of
								documents for admission into dual degree (B.Tech + M.Tech/MS)program at JNU</li>
							<li class="list-group-item" style="background-color: #FAF0E6 ">Schedule for admission under DASA
								Scheme-Information Brochure</li>
							<li class="list-group-item" style="background-color: #FAF0E6 ">Fee detail for admission under DASA Scheme
							</li>
							<li class="list-group-item" style="background-color: #FAF0E6 ">Certificates to be produced at the time of
								Admission for JNU 2020</li>
							<li class="list-group-item" style="background-color: #FAF0E6 ">2019 opening and closing ranks (Category
								Wise) </li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 bg-bag ">
				<div class="line mt-3"></div>
				<h4 class="ml-4 pt-3">NOTICE <span class="h5 font-weight-bold" style="color: #8B4513;">BOARD</span></h4>
				<h5 class="text-center bg-info text-white p-1 mt-3" style="height: 30px;">Informatiion</h5>
				<div class="col-12 mt-4">
					<div class="well font-weight-bold h6" style="max-height: 216px;overflow: auto;">
						<ul class="list-group checked-list-box">
							<?php
							if ($result->num_rows > 0) {
								while ($row = $result->fetch_assoc()) {
									$new = "";
									if ($row['new']) {
										$new = "<span>This is New Symbol</span>";
									}
									echo "<li class='list-group-item' style='background-color: #FAF0E6'> <a class='notice' href='" . $row["url"] . ".php'>" . $row["information"] . " " . $new . "</a></li>";
								}
							}
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="container mt-5">
		<div class="row pt-5">
			<div class="col-md-8 col-sm-12 bg-bag">
				<div class="line mt-3"></div>
				<h4 class="ml-4 pt-3">ACADEMIC <span class="h5 font-weight-bold" style="color: #8B4513;">ACTIVITIES</span></h4>
				<h5 class="text-center bg-info text-white p-1 mt-3" style="height: 30px;">CAMPUS EVENTS</h5>
				<div class="col-12 mt-4">
					<div id="owl-demo" class="owl-carousel owl-theme owl-1">
						<div class="item"><img src="images/slide4.jpg" alt="Owl Image"></div>
						<div class="item"><img src="images/slide5.jpg" alt="Owl Image"></div>
						<div class="item"><img src="images/slide6.jpg" alt="Owl Image"></div>
					</div>
					<div class="owl-controls">
						<div class="owl-nav">
							<div class="owl-prev"></div>
							<div class="owl-next"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 bg-bag">
				<div class="line mt-3"></div>
				<h4 class="ml-4 pt-3">RESEARCH <span class="h5 font-weight-bold" style="color: #8B4513;">UPDATES</span></h4>
				<h5 class="text-center bg-info text-white p-1 mt-3" style="height: 30px;">Informatiion</h5>
				<div class="col-12 mt-4">
					<div id="owl-demo" class="owl-carousel owl-theme owl-2">
						<div class="item"><img src="images/slide4.jpg" alt="Owl Image"></div>
						<div class="item"><img src="images/slide5.jpg" alt="Owl Image"></div>
						<div class="item"><img src="images/slide6.jpg" alt="Owl Image"></div>
					</div>
					<div class="owl-controls">
						<div class="owl-nav">
							<div class="owl-prev"></div>
							<div class="owl-next"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="container mt-5">
		<div class="row">
			<div class="blog_section col-md-8 bg-bag">
				<div class="line mt-3"></div>
				<h4 class="ml-4 pt-3">EVENTS <span class="h5 font-weight-bold" style="color: #8B4513;">SEMINARS</span></h4>
				<h5 class="text-center bg-info text-white p-1 mt-3" style="height: 30px;">LATEST</h5>
				<div class="blog_content mt-4">
					<div class="owl-carousel owl-theme owl-4">
						<div class="blog_item">
							<div class="blog_image">
								<img class="img-fluid" src="https://cdn.pixabay.com/photo/2019/03/10/18/31/hong-kong-4046913_960_720.jpg" alt="images not found">
								<span><i class="icon ion-md-create"></i></span>
							</div>
							<div class="blog_details">
								<ul>
									<li><i class="icon ion-md-person"></i>Alex</li>
									<li><i class="icon ion-md-calendar"></i>August 1, 2018</li>
								</ul>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem...</p>
								<a href="#">Read More<i class="icofont-long-arrow-right"></i></a>
							</div>
						</div>
						<div class="blog_item">
							<div class="blog_image">
								<img class="img-fluid" src="https://cdn.pixabay.com/photo/2015/07/09/22/45/tree-838667_960_720.jpg" alt="images not found">
								<span><i class="icon ion-md-create"></i></span>
							</div>
							<div class="blog_details">
								<ul>
									<li><i class="icon ion-md-person"></i>Alex</li>
									<li><i class="icon ion-md-calendar"></i>August 1, 2018</li>
								</ul>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem...</p>
								<a href="#">Read More<i class="icofont-long-arrow-right"></i></a>
							</div>
						</div>
						<div class="blog_item">
							<div class="blog_image">
								<img class="img-fluid" src="https://cdn.pixabay.com/photo/2015/10/30/20/13/sunrise-1014712_960_720.jpg" alt="images not found">
								<span><i class="icon ion-md-create"></i></span>
							</div>
							<div class="blog_details">
								<ul>
									<li><i class="icon ion-md-person"></i>Alex</li>
									<li><i class="icon ion-md-calendar"></i>August 1, 2018</li>
								</ul>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem...</p>
								<a href="#">Read More<i class="icofont-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">

				<!-- Fluid width widget -->
				<div class="line mt-3"></div>
				<h4 class="ml-4 pt-3">NEWS <span class="h5 font-weight-bold" style="color: #8B4513;">UPDATES</span></h4>
				<h5 class="text-center bg-info text-white p-1 mt-3" style="height: 30px;">SOE IN MEDIA</h5>
				<div class="panel panel-danger mt-4">
					<div class="panel-body">
						<ul class="media-list">
							<li class="media bg-bag">
								<div class="media-left">
									<div class="panel panel-danger text-center date">
										<div class="panel-heading month">
											<span class="panel-title strong ">
												Mar
											</span>
										</div>
										<div class="panel-body day text-info">
											23
										</div>
									</div>
								</div>
								<div class="media-body">
									<h4 class="media-heading text-danger">
										Pulvinar Mauris Eu
									</h4>
									<p>
										Vivamus pulvinar mauris eu placerat blandit. In euismod tellus vel ex vestibulum congue.
									</p>
								</div>
							</li>
							<li class="media bg-bag">
								<div class="media-left">
									<div class="panel panel-danger text-center date">
										<div class="panel-heading month">
											<span class="panel-title strong">
												Jan
											</span>
										</div>
										<div class="panel-body text-info day">
											16
										</div>
									</div>
								</div>
								<div class="media-body">
									<h4 class="media-heading text-danger">
										Aenean Consectetur Ultricies
									</h4>
									<p>
										Curabitur vel malesuada tortor, sit amet ultricies mauris. Aenean consectetur ultricies luctus.
									</p>
								</div>
							</li>
							<li class="media bg-bag">
								<div class="media-left">
									<div class="panel panel-danger text-center date">
										<div class="panel-heading month">
											<span class="panel-title strong">
												Jan
											</span>
										</div>
										<div class="panel-body text-info day">
											16
										</div>
									</div>
								</div>
								<div class="media-body">
									<h4 class="media-heading text-danger">
										Aenean Consectetur Ultricies
									</h4>
									<p>
										Curabitur vel malesuada tortor, sit amet ultricies mauris. Aenean consectetur ultricies luctus.
									</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<!-- End fluid width widget -->
			</div>
		</div>
	</section>
	<!--footer starts from here-->
	<footer class="footer">
		<div class="container p-2 p-md-3 bottom_border">
			<div class="row">
				<div class="col col-md-8">
					<div class="row">
						<div class="col-sm-6 col-12 col">
							<h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
							<!--headin5_amrc-->
							<p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
								Lorem
								Ipsum
								has been the industry's standard dummy text ever since the 1500s</p>
							<p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
							<p><i class="fa fa-phone"></i> +91-9999878398 </p>
							<p><i class="fa fa fa-envelope"></i> info@example.com </p>


						</div>


						<div class="col-sm-6 col-12 col">
							<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
							<!--headin5_amrc-->
							<ul class="footer_ul_amrc">
								<li><a href="http://webenlance.com">Image Rectoucing</a></li>
								<li><a href="http://webenlance.com">Clipping Path</a></li>
								<li><a href="http://webenlance.com">Hollow Man Montage</a></li>
								<li><a href="http://webenlance.com">Ebay & Amazon</a></li>
								<li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
								<li><a href="http://webenlance.com">Image Cropping</a></li>
							</ul>
							<!--footer_ul_amrc ends here-->
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-12 col">
							<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
							<!--headin5_amrc-->
							<ul class="footer_ul_amrc">
								<li><a href="http://webenlance.com">Remove Background</a></li>
								<li><a href="http://webenlance.com">Shadows & Mirror Reflection</a></li>
								<li><a href="http://webenlance.com">Logo Design</a></li>
								<li><a href="http://webenlance.com">Vectorization</a></li>
								<li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
								<li><a href="http://webenlance.com">Image Cropping</a></li>
							</ul>
							<!--footer_ul_amrc ends here-->
						</div>


						<div class="col-sm-6 col-12 col">
							<h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
							<!--headin5_amrc ends here-->

							<ul class="footer_ul2_amrc">
								<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
									<p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a>
									</p>
								</li>
								<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
									<p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a>
									</p>
								</li>
								<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
									<p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a>
									</p>
								</li>
							</ul>
							<!--footer_ul2_amrc ends here-->
						</div>
					</div>
				</div>
				<div class="col col-md-4 p-0 d-flex align-items-center justify-content-center">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.9830929899003!2d77.16402671440491!3d28.540227895004897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1dc0ea0183b7%3A0xefd8d19ac7f061e7!2sJawaharlal%20Nehru%20University!5e0!3m2!1sen!2sin!4v1604925043200!5m2!1sen!2sin" width="350" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>
		</div>



		<div class="container">
			<ul class="foote_bottom_ul_amrc">
				<li><a href="http://webenlance.com">Home</a></li>
				<li><a href="http://webenlance.com">About</a></li>
				<!-- <li><a href="http://webenlance.com">Services</a></li>
                <li><a href="http://webenlance.com">Pricing</a></li> -->
				<li><a href="http://webenlance.com">Blog</a></li>
				<li><a href="http://webenlance.com">Contact</a></li>
			</ul>
			<!--foote_bottom_ul_amrc ends here-->
			<p class="text-center">Copyright @2017 | Designed With by <a href="#">Your Company Name</a></p>

			<ul class="social_footer_ul">
				<li><a href="http://webenlance.com"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="http://webenlance.com"><i class="fab fa-twitter"></i></a></li>
				<li><a href="http://webenlance.com"><i class="fab fa-linkedin"></i></a></li>
				<li><a href="http://webenlance.com"><i class="fab fa-instagram"></i></a></li>
			</ul>
			<!--social_footer_ul ends here-->
		</div>
	</footer>
	<div class="to-top-link">
		<a href="#page-wrapper" class="top-link">
			<i class="fas fa-arrow-up"></i>
		</a>
	</div>
	<script src="libs/jquery-3.5.1.js"></script>
	<script src="libs/popper-2.5.3.js"></script>
	<script src="libs/bootstrap-4.5.3.js"></script>
	<!-- Swiper JS -->
	<script src="js/swiper-bundle-min.js"></script>
	<!-- Owl Corousel -->
	<script src="owlcarousel/owl.carousel.min.js"></script>
	<script src="js/owl-corousel.js"></script>

	<!-- Initialize Swiper -->
	<script>
		window.onresize = function() {
			location.reload();
		}
		window.onload = function() {
			setTransform();
		}
		var swiper = new Swiper('.swiper-container', {
			speed: 1500,
			spacebetween: 30,
			loop: true,
			slidesperview: 1,
			effect: 'fade',
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			autoplay: {
				delay: 5000,
				disableOnInteraction: false,
			},
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
				hideOnClick: false,
			},
		});

		swiper.on('slideChange', setTransform);

		function setTransform() {
			let curSlide = swiper.slides[swiper.activeIndex];
			let title = curSlide.querySelector('.title');
			let subtitle = curSlide.querySelector('.subtitle');

			let moveUp = String(-0.5 * h - title.offsetHeight + 40) + 'px';
			let moveDown = String(0.5 * h + subtitle.offsetHeight + 40) + 'px';


			title.style.transform = `translateY(${moveUp})`;
			subtitle.style.transform = `translateY(${moveDown})`;
			swiper.slides.forEach(slide => {
				if (slide !== swiper.slides[swiper.activeIndex]) {
					slide.querySelector('.title').style.transform = 'none';
					slide.querySelector('.subtitle').style.transform = 'none';
				}
			});
		}
		let h = document.querySelector('.bg-img').offsetHeight;
		document.querySelector('.swiper-container').style.height = h + 'px';
		console.log(h);
	</script>
	<script>
		$(document).ready(function() {
			if ($(window).width() <= 768) {
				// $('.navbar-brand img').attr('src', 'images/jnu-logo.png');
				$(".logo-container img").attr('src', 'images/jnuLogo.png'); // ??
				$("#img-navbar").attr('src', 'images/jnuLogo.png')
			}
		})
	</script>
	<script>
		var hoheader = document.querySelector(".header-top").offsetHeight + document.querySelector(".header-middle").offsetHeight;
		console.log(hoheader);
		$(function($) {
			$(window).on('scroll', function() {
				if ($(this).scrollTop() >= hoheader) {
					$('.navbar').addClass('fixed-top');
				} else if ($(this).scrollTop() < hoheader) {
					$('.navbar').removeClass('fixed-top');
				}
			});

			function adjustNav() {
				var winWidth = $(window).width(),
					dropdown = $('.dropdown'),
					dropdownMenu = $('.dropdown-menu');

				if (winWidth >= 768) {
					dropdown.on('mouseenter', function() {
						$(this).addClass('show')
							.children(dropdownMenu).addClass('show');
					});

					dropdown.on('mouseleave', function() {
						$(this).removeClass('show')
							.children(dropdownMenu).removeClass('show');
					});
				} else {
					dropdown.off('mouseenter mouseleave');
				}
			}

			$(window).on('resize', adjustNav);

			adjustNav();
		});
	</script>
	<script>
		jQuery(document).ready(function($) {
			//set animation timing
			var animationDelay = 2500,
				//loading bar effect
				barAnimationDelay = 3800,
				barWaiting = barAnimationDelay - 3000, //3000 is the duration of the transition on the loading bar - set in the scss/css file
				//letters effect
				lettersDelay = 50,
				//type effect
				typeLettersDelay = 150,
				selectionDuration = 500,
				typeAnimationDelay = selectionDuration + 800,
				//clip effect 
				revealDuration = 600,
				revealAnimationDelay = 1500;

			initHeadline();


			function initHeadline() {
				//insert <i> element for each letter of a changing word
				singleLetters($('.cd-headline.letters').find('b'));
				//initialise headline animation
				animateHeadline($('.cd-headline'));
			}

			function singleLetters($words) {
				$words.each(function() {
					var word = $(this),
						letters = word.text().split(''),
						selected = word.hasClass('is-visible');
					for (i in letters) {
						if (word.parents('.rotate-2').length > 0) letters[i] = '<em>' + letters[i] + '</em>';
						letters[i] = (selected) ? '<i class="in">' + letters[i] + '</i>' : '<i>' + letters[i] + '</i>';
					}
					var newLetters = letters.join('');
					word.html(newLetters).css('opacity', 1);
				});
			}

			function animateHeadline($headlines) {
				var duration = animationDelay;
				$headlines.each(function() {
					var headline = $(this);

					if (headline.hasClass('loading-bar')) {
						duration = barAnimationDelay;
						setTimeout(function() {
							headline.find('.cd-words-wrapper').addClass('is-loading')
						}, barWaiting);
					} else if (headline.hasClass('clip')) {
						var spanWrapper = headline.find('.cd-words-wrapper'),
							newWidth = spanWrapper.width() + 10
						spanWrapper.css('width', newWidth);
					} else if (!headline.hasClass('type')) {
						//assign to .cd-words-wrapper the width of its longest word
						var words = headline.find('.cd-words-wrapper b'),
							width = 0;
						words.each(function() {
							var wordWidth = $(this).width();
							if (wordWidth > width) width = wordWidth;
						});
						headline.find('.cd-words-wrapper').css('width', width);
					};

					//trigger animation
					setTimeout(function() {
						hideWord(headline.find('.is-visible').eq(0))
					}, duration);
				});
			}

			function hideWord($word) {
				var nextWord = takeNext($word);

				if ($word.parents('.cd-headline').hasClass('type')) {
					var parentSpan = $word.parent('.cd-words-wrapper');
					parentSpan.addClass('selected').removeClass('waiting');
					setTimeout(function() {
						parentSpan.removeClass('selected');
						$word.removeClass('is-visible').addClass('is-hidden').children('i').removeClass('in').addClass('out');
					}, selectionDuration);
					setTimeout(function() {
						showWord(nextWord, typeLettersDelay)
					}, typeAnimationDelay);

				} else if ($word.parents('.cd-headline').hasClass('letters')) {
					var bool = ($word.children('i').length >= nextWord.children('i').length) ? true : false;
					hideLetter($word.find('i').eq(0), $word, bool, lettersDelay);
					showLetter(nextWord.find('i').eq(0), nextWord, bool, lettersDelay);

				} else if ($word.parents('.cd-headline').hasClass('clip')) {
					$word.parents('.cd-words-wrapper').animate({
						width: '2px'
					}, revealDuration, function() {
						switchWord($word, nextWord);
						showWord(nextWord);
					});

				} else if ($word.parents('.cd-headline').hasClass('loading-bar')) {
					$word.parents('.cd-words-wrapper').removeClass('is-loading');
					switchWord($word, nextWord);
					setTimeout(function() {
						hideWord(nextWord)
					}, barAnimationDelay);
					setTimeout(function() {
						$word.parents('.cd-words-wrapper').addClass('is-loading')
					}, barWaiting);

				} else {
					switchWord($word, nextWord);
					setTimeout(function() {
						hideWord(nextWord)
					}, animationDelay);
				}
			}

			function showWord($word, $duration) {
				if ($word.parents('.cd-headline').hasClass('type')) {
					showLetter($word.find('i').eq(0), $word, false, $duration);
					$word.addClass('is-visible').removeClass('is-hidden');

				} else if ($word.parents('.cd-headline').hasClass('clip')) {
					$word.parents('.cd-words-wrapper').animate({
						'width': $word.width() + 10
					}, revealDuration, function() {
						setTimeout(function() {
							hideWord($word)
						}, revealAnimationDelay);
					});
				}
			}

			function hideLetter($letter, $word, $bool, $duration) {
				$letter.removeClass('in').addClass('out');

				if (!$letter.is(':last-child')) {
					setTimeout(function() {
						hideLetter($letter.next(), $word, $bool, $duration);
					}, $duration);
				} else if ($bool) {
					setTimeout(function() {
						hideWord(takeNext($word))
					}, animationDelay);
				}

				if ($letter.is(':last-child') && $('html').hasClass('no-csstransitions')) {
					var nextWord = takeNext($word);
					switchWord($word, nextWord);
				}
			}

			function showLetter($letter, $word, $bool, $duration) {
				$letter.addClass('in').removeClass('out');

				if (!$letter.is(':last-child')) {
					setTimeout(function() {
						showLetter($letter.next(), $word, $bool, $duration);
					}, $duration);
				} else {
					if ($word.parents('.cd-headline').hasClass('type')) {
						setTimeout(function() {
							$word.parents('.cd-words-wrapper').addClass('waiting');
						}, 200);
					}
					if (!$bool) {
						setTimeout(function() {
							hideWord($word)
						}, animationDelay)
					}
				}
			}

			function takeNext($word) {
				return (!$word.is(':last-child')) ? $word.next() : $word.parent().children().eq(0);
			}

			function takePrev($word) {
				return (!$word.is(':first-child')) ? $word.prev() : $word.parent().children().last();
			}

			function switchWord($oldWord, $newWord) {
				$oldWord.removeClass('is-visible').addClass('is-hidden');
				$newWord.removeClass('is-hidden').addClass('is-visible');
			}
		});
	</script>
	<script>
		// ********** smooth scroll ************
		$(document).ready(() => {
			$(window).scroll(() => {
				console.log($(window).scrollTop());
				if ($(window).scrollTop() >= 500) {
					console.log($('.to-top-link'));
					$('.to-top-link').addClass('show-link');
				} else {
					$('.to-top-link').removeClass('show-link');
				}
			});

			$('.to-top-link').click(() => {
				$(window).scrollTo({
					// left: 0,
					top: 0,
				});
			});
		});
	</script>
	<script src="js/responsive-navbar.js"></script>
</body>

</html>