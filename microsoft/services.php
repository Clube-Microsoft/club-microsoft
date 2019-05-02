
		<?php  require_once "links.php"; ?>
	<title>Serviços</title>

	 
</head>

<body>

	<?php  require_once "menu.php";
	require_once "conexao.php"; 
$sql_estat = "INSERT INTO estatisticas (n_estatic_index, n_estatic_blog, n_estatic_curso, n_estatic_services) values (0, 0, 0, 1)";
    mysqli_query($conn, $sql_estat);
	 ?>

	<section class="banner-area relative">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Os nossos serviços
					</h1>
					<div class="link-nav">
						<span class="box">
							<a href="/">Início</a>
							<i class="lnr lnr-arrow-right"></i>
							<a href="about.php">Serviços</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="rocket-img go-bottom">
			<img src="img/rocket.png" alt="" style="margin-bottom:-8px;">
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


	<?php  require_once "footer.php"; ?>


 
</body>

</html>