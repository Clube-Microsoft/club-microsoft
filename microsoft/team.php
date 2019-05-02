
	<?php  require_once "links.php"; ?>
	<title>Equipa</title>
    <script src="jsx/sweetalert.js"></script>
</head>

<body>
	<?php  require_once "menu.php"; ?>
	<section class="banner-area relative">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
							Conhece a equipa
					</h1>
					<p>
						Unidos pelo crescimento deste clube.
					</p>
					<div class="link-nav">
						<span class="box">
							<a href="/">Início</a>
							<i class="lnr lnr-arrow-right"></i>
							<a href="team">Equipa</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="rocket-img go-bottom">
			<img src="img/rocket.png" alt="" style="margin-bottom:-8px;">
		</div>
	</section>
	
	
	
	<section class="faculty-area section-gap">
		<span class="anchor" id="equipa"></span>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="section-title text-center">
						<h1>Equipa</h1>
					</div>
				</div>
			</div>
			<div class="row justify-content-center d-flex align-items-center">
				<div class="col-lg-3 col-md-6 col-sm-12 single-faculty">
					<div class="thumb d-flex justify-content-center">
						<img class="img-fluid wow fadeIn" data-wow-duration="1s" src="img/faculty/f1.jpg" alt="Leandro Pereira">
					</div>
					<div class="meta-text text-center">
						<h4 class="wow fadeIn" data-wow-duration="1s">Leandro Pereira</h4>
						<p class="designation">Fundador | Desenvolvedor Web</p>

						<div class="align-items-center justify-content-center d-flex">
							<a href="https://www.linkedin.com/in/leandrojfpereira/" target="blank"><i class="fa fa-linkedin" target="blank"></i></a>
							<a href="https://www.instagram.com/leandrojfpereira" target="blank"><i class="fa fa-instagram"></i></a>
							<a href="https://twitter.com/leandrojfpereir" target="blank"><i class="fa fa-twitter" target="blank"></i></a>
							<a href="https://www.facebook.com/leandrojferreirap" target="blank"><i class="fa fa-facebook"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 single-faculty">
					<div class="thumb d-flex justify-content-center">
						<img class="img-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s" src="img/faculty/f2.jpg" alt="Rúben Príncipe">
					</div>
					<div class="meta-text text-center">
						<h4 class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">Rúben Príncipe</h4>
						<p class="designation">Fundador | Web Designer</p>

						<div class="align-items-center justify-content-center d-flex">
							<a href=" https://www.linkedin.com/in/ruben-principe/" target="blank"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 single-faculty">
					<div class="thumb d-flex justify-content-center">
						<img class="img-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay=".6s" src="img/faculty/f3.jpg" alt="Rui Pereira">
					</div>
					<div class="meta-text text-center">
						<h4 class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".6s">Rui Pereira</h4>
						<p class="designation">Fundador | Consultor</p>
						
						<div class="align-items-center justify-content-center d-flex">
							<a href="https://www.linkedin.com/in/rmbp-rui/" target="blank"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Faculty Area -->

	<?php  require_once "footer.php"; ?>
	
<script>
	$(function(){
		$('.form').submit(function(){
			$('.loading').html("<img src='loading.gif' width='45'>");
			$.ajax({
				url: 'send-form.php',
				type: 'POST',
				data: $('.form').serialize(),
				success: function(data){
					$('.mostrar').html(data);
					$('.loading').hide();
					$('.form')[0].reset();
				}
			});
			return false;
		});
	});
</script>
</body>
</html>