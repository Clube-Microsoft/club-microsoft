
	<?php  require_once "links.php"; ?>
	
	<title>Blog</title>
	 
</head>

<body>

	<?php  require_once "menu.php"; ?>

	<section class="banner-area relative">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Blog
					</h1>
					<div class="link-nav">
						<span class="box">
							<a href="index.php">Início </a>
							<i class="lnr lnr-arrow-right"></i>
							<a href="blog-home.php">Blog</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="rocket-img go-bottom">
			<img src="img/rocket.png" alt="" style="margin-bottom:-8px;">
		</div>
	</section>
	
	
	
	<section class="post-content-area" style="padding-top: 10vh;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 posts-list">
					<div class="single-post row col-xl-4 col-lg-6 col-12">
						<div class="col-lg-12 col-md-12">
							<a class="posts-title" href="linkedin.php">
								<div class="feature-img">
									<img class="img-fluid img-blog-post" src="img/blog/linkedin_blog.jpg" alt="">
								</div>
								<h3>Linkedin</h3>
							</a>
							<p class="date col-lg-12 col-md-12 col-6"><a href="#">26 fev 2019</a> <span class="lnr lnr-calendar-full"></span></p>
							<p class="excert">
                  				Dotar os alunos de conhecimentos e competências para a utilização eficaz do LinkedIn. No final do workshop, o aluno deverá ser capaz de formular o seu perfil de maneira a efetuar a suacandidatura às ofertas de emprego.</p>
							<div class="meta-details">
							<ul class="tags">
								<li><a href="#">Eventos</a></li>
                              	<li><a href="#">Workshop</a></li>
							</ul>
						</div>
							<a href="linkedin.php" class="primary-btn">Ler Mais</a>
						</div>
					</div>
					<div class="single-post row col-xl-4 col-lg-6 col-12">
						<div class="col-lg-12 col-md-12">
							<a class="posts-title" href="segurança-na-internet.php">
								<div class="feature-img">
									<img class="img-fluid img-blog-post" src="img/blog/palestra_jorandas_blog.png" alt="">
								</div>
								<h3>Segurança na Internet</h3>
							</a>
							<p class="date col-lg-12 col-md-12 col-6"><a href="#">01 fev 2019</a> <span class="lnr lnr-calendar-full"></span></p>
							<p class="excert">
                  				Esta palestra tem como objetivo sensibilizar e educar os participantes a praticarem melhores hábitos no uso da Internet. Temos uma aproximação prática para que todos possam beneficiar de novos conhecimentos.</p>
							<div class="meta-details">
							<ul class="tags">
								<li><a href="#">Eventos</a></li>
                              	<li><a href="#">Palestra</a></li>
                              	<li><a href="#">Segurança</a></li>
                              	<li><a href="#">Internet</a></li>
							</ul>
						</div>
							<a href="segurança-na-internet.php" class="primary-btn">Ler Mais</a>
						</div>
					</div>
					<div class="single-post row col-xl-4 col-lg-6 col-12">
						<div class="col-lg-12 col-md-12">
							<a class="posts-title" href="exame-mos.php">
								<div class="feature-img">
									<img class="img-fluid img-blog-post" src="img/blog/mos_blog.png" alt="">
								</div>
								<h3>Exame MOS</h3>
							</a>
							<p class="date col-lg-12 col-md-12 col-6"><a href="#">16 jan 2019</a> <span class="lnr lnr-calendar-full"></span></p>
							<p class="excert">
								Este exame pode ser feito por qualquer aluno da EPB - Escola Profissional de Braga sem qualquer custo, podendo ser fornecido uma certificação em MOS (Microsoft Office Specialist).
							</p>
							<div class="meta-details">
							<ul class="tags">
								<li><a href="#">Eventos</a></li>
								<li><a href="#">Microsoft Office</a></li>
							</ul>
						</div>
							<a href="exame-mos.php" class="primary-btn">Ler Mais</a>
						</div>
					</div>
				</div>
				<nav class="blog-pagination justify-content-center d-flex">
						<ul class="pagination">
							<li class="page-item">
								<a href="blog-home.php" class="page-link" aria-label="Previous">
									<span aria-hidden="true">
										<span class="lnr lnr-chevron-left"></span>
									</span>
								</a>
							</li>
							<li class="page-item active"><a href="blog-home.php" class="page-link">01</a></li>
							<li class="page-item">
								<a href="blog-home.php" class="page-link" aria-label="Next">
									<span aria-hidden="true">
										<span class="lnr lnr-chevron-right"></span>
									</span>
								</a>
							</li>
						</ul>
					</nav>
			</div>
		</div>
	</section>
	
	<?php  require_once "footer.php"; ?>



 
</body>

</html>