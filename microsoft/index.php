 	
	<?php  require_once "links.php"; ?>

	<title>Clube Microsoft</title>

</head>

<body>

	<?php

	require_once "menu.php";
	require_once "conexao.php"; 

	$sql_estat = "INSERT INTO estatisticas (n_estatic_index, n_estatic_blog, n_estatic_curso, n_estatic_services) values (1, 0, 0, 0)";
    mysqli_query($conn, $sql_estat);

	?>

	<section class="home-banner-area relative">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center banner">
				<div class="banner-content col-lg-8 col-md-12" style="background: rgba(169, 167, 167, 0.4);border-radius: 30px;padding: 70px 0;">
					<h1 class="wow fadeIn" data-wow-duration="4s">Junta-te ao clube</h1>
					<p class="text-white">
						Com foco na aprendizagem e motivação de estudo, este clube engloba diversas mais valias e características importantes para o teu desenvolvimento como profissional.
					</p>

					<h4 style="margin-top: 5vh;" class="text-white">Recomendados</h4>

					<div class="courses pt-20">
						<a href="http://www.epbclubemicrosoft.pt/course-details?c=word" data-wow-duration="1s" data-wow-delay=".3s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Microsoft Word</a>
						<a href="http://epbclubemicrosoft.pt/course-details?c=visual-studio" data-wow-duration="1s" data-wow-delay=".6s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Visual Studio</a>
						<a href="http://epbclubemicrosoft.pt/course-details?c=powerpoint" data-wow-duration="1s" data-wow-delay=".9s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Microsoft PowerPoint</a>
						<a href="http://epbclubemicrosoft.pt/course-details?c=sql-server" data-wow-duration="1s" data-wow-delay="1.2s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">SQL Server</a>
						<a href="http://epbclubemicrosoft.pt/course-details?c=github" data-wow-duration="1s" data-wow-delay="1.5s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">GitHub</a>
						<a href="http://epbclubemicrosoft.pt/course-details?c=micro:bit" data-wow-duration="1s" data-wow-delay="1.8s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Micro:Bit</a>
					</div>
				</div>
			</div>
		</div>
		<div class="rocket-img go-bottom">
			<img src="img/rocket.png" alt="">
		</div>
	</section>
	
	
	
	<span class="anchor" id="sobre"></span>
	<section class="about-area section-gap">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-5 col-md-6 about-left">
					<img class="img-fluid" src="img/about.png" alt="Clube Microsoft" title="Clube Microsoft">
				</div>
				<div class="offset-lg-1 col-lg-6 offset-md-0 col-md-12 about-right">
					<h1>
						Sobre Clube Microsoft
					</h1>
					<div class="wow fadeIn" data-wow-duration="1s">
						<p>
							O Clube Microsoft disponibiliza atividades formativas, workshops e experiências que permitam uma aprendizagem mais estimulante e apropriada nas matérias relacionadas com o ecossistema “Microsoft” instalado na EPB – Escola Profissional de Braga. Pretendemos com este projeto criar um ambiente mais unido entre os participantes deste clube e projetar a divulgação deste por toda a comunidade escolar (interna e externa).
						</p>
					</div>
					<a href="courses" class="primary-btn">Explorar Cursos</a>
				</div>
			</div>
		</div>
	</section>
	
	
	
	<span class="anchor" id="missao"></span>
	<section class="about-area section-gap section-gap1">
		<span class="anchor" id="missao"></span>
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div id="lado-esquerdo" class="col-lg-6 offset-md-0 col-md-12 about-right">
					<h1>
						A nossa missão
					</h1>
					<div class="wow fadeIn" data-wow-duration="1s">
						<p>
							Com foco na aprendizagem e motivação de estudo, este clube irá englobar diversas mais valias e características importantes para o desenvolvimento de todos os alunos da comunidade escolar.
						</p>
					</div>
				</div>
				<div id="lado-direito" class="offset-lg-1 col-lg-5 col-md-6 about-left">
					<div id="img_nossa_missao" class="img-fluid" style="float: right;">
						<img width="100%" src="img/target.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	
	<section class="feature-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="section-title text-center">
						<h1>Serviços</h1>
					</div>
				</div>
			</div>
			<div class="feature-inner row">
				<div class="col-md-6">
					<div class="feature-item">						
						<img src="img/icons/workshop.png" class="icons_servicos"/> 
						<h4>Workshops</h4>
						<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
							<p>
								Serão transmitidas informações práticas através de dinâmicas de grupo, com uma duração de até 3 horas, ampliando assim os conhecimentos e competências dos alunos.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="feature-item">
						<img src="img/icons/palestras.png" class="icons_servicos"/> 
						<h4>Palestras</h4>
						<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
							<p>
								Possuem menor duração, com cerca de 1 hora, sobre um tema específico. Apresenta menor interação prática com os alunos, mas permite a atualização de novos conceitos, e aprendizagens.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="feature-item">
						<img src="img/icons/aulasdigitais.png" class="icons_servicos"/> 
						<h4>Aulas Digitais</h4>
						<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
							<p>
								É uma forma útil de obter uma aprendizagem acessível e completa, ao ritmo do aluno, integrando de forma personalizada o ensino de temáticas desde o inicial até ao avançado.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="feature-item">
						<img src="img/icons/help.png" class="icons_servicos"/> 
						<h4>Ajuda Em Tempo Real</h4>
						<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
							<p>
								É uma grande vantagem para os alunos utilizarem esta ferramenta, uma vez que permite solicitar ajuda sobre os cursos, workshops, palestras, entre outros, de forma rápida e direta.
							</p>
						</div>
					</div>
				</div>
			</div>
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
			<div class="team-more">
				<a href="team" class="primary-btn">Conhece toda a equipa</a>
			</div>
		</div>
	</section>

	<?php  require_once "footer.php"; ?>

<script>
	$(function() {
  if ($(window).width() <= 991) {
    $('#lado-esquerdo').remove().insertAfter($('#lado-direito'));
    $("#img_nossa_missao").css("float", "left");

  } else {
    $('#lado-esquerdo').remove().insertBefore($('#lado-direito'));
    $("#img_nossa_missao").css("float", "right");
  }
})
</script>

</body>

</html>