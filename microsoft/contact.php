<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/Logo/logo.png">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Contacto</title>

	<!--
			Google Font
			============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500i" rel="stylesheet">

	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<?php  require_once "menu.php"; ?>


	<!-- Start Banner Area -->
	<section class="banner-area relative">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
							Contacta-nos
					</h1>
					<p>
						Entre em contacto com o clube ou visita-nos.
					</p>
					<div class="link-nav">
						<span class="box">
							<a href="index.php">Home </a>
							<i class="lnr lnr-arrow-right"></i>
							<a href="contact.php">Contacto</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="rocket-img go-bottom">
			<img src="img/rocket.png" alt="" style="margin-bottom:-8px;">
		</div>
	</section>
	<!-- End Banner Area -->

	<!-- Start contact-page Area -->
	<section class="contact-page-area section-gap">
		<div class="container">
			<div class="row">
				<iframe class="map-wrap" style="width:100%; height: 445px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d978.203458505185!2d-8.424773584025896!3d41.53831794708731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf0e2389973067be0!2sEPB+Professional+Braga+School!5e1!3m2!1sen!2spt!4v1546365222202" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				<div class="col-lg-4 d-flex flex-column address-wrap">
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-home"></span>
						</div>
						<div class="contact-details">
							<h5>EPB - Escola Profissional de Braga</h5>
							<p>
								Rua Augusto Veloso, Nº 140 <br> 4705-082 Braga <br>
								<a href="http://www.epb.pt">www.epb.pt</a>
							</p>
						</div>
					</div>
					<!--<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-phone-handset"></span>
						</div>
						<div class="contact-details">
							<h5>00 (958) 9865 562</h5>
							<p>Mon to Fri 9am to 6 pm</p>
						</div>
					</div>-->
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-envelope"></span>
						</div>
						<div class="contact-details">
							<h5>clube.microsoft.epb@gmail.com</h5>
							<p>Envia-nos as tuas questões!</p>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">
						<div class="row">
							<div class="col-lg-6 form-group">
								<input name="name" placeholder="Introduz o teu nome" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Introduz o teu nome'"
								 class="common-input mb-20 form-control" required="" type="text">

								<input name="email" placeholder="Introduz o teu email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Introduz o teu email'" class="common-input mb-20 form-control" required="" type="email">

								<input name="subject" placeholder="Introduz o assunto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Introduz o assunto'"
								 class="common-input mb-20 form-control" required="" type="text">
							</div>
							<div class="col-lg-6 form-group">
								<textarea class="common-textarea form-control" name="message" placeholder="Introduz a mensagem" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Introduz a mensagem'" required=""></textarea>
							</div>
							<div class="col-lg-12">
								<div class="alert-msg" style="text-align: left;"></div>
								<button class="primary-btn" style="float: right;">Enviar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- End contact-page Area -->

	<?php  require_once "footer.php"; ?>


	<!-- ####################### Start Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Topo" href="#"></a>
	</div>
	<!-- ####################### End Scroll to Top Area ####################### -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/owl-carousel-thumb.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/main.js"></script>
</body>

</html>