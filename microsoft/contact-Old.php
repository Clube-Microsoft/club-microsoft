
	<?php  require_once "links.php"; ?>
	<title>Contacto</title>

	 
</head>

<body>
	<?php  require_once "menu.php"; ?>


	<section class="banner-area relative">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
							Contacte-nos
					</h1>
					<p>
						Entre em contacto com o clube ou visite-nos.
					</p>
					<div class="link-nav">
						<span class="box">
							<a href="/">Início</a>
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
	
	
	<section class="contact-page-area section-gap">
		<div class="container">
			<div class="row">
				<iframe class="map-wrap" style="width:100%; height: 500px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d978.203458505185!2d-8.424773584025896!3d41.53831794708731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf0e2389973067be0!2sEPB+Professional+Braga+School!5e1!3m2!1sen!2spt!4v1546365222202" frameborder="0" style="border:0" allowfullscreen></iframe>
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
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-envelope"></span>
						</div>
						<div class="contact-details">
							<h5><a href="mailto:clubemicrosoft@epb.pt">clubemicrosoft@epb.pt</a></h5>
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



 
</body>

</html>