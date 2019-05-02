
		<?php  require_once "links.php"; ?>

	<title>Help</title>

	 
</head>

<body>

	<?php  require_once "menu.php";
		require_once "conexao.php"; 
	require_once "bbot/bbot.php"; 

		$sql_estat = "INSERT INTO estatisticas (n_estatic_index, n_estatic_blog, n_estatic_curso, n_estatic_services) values (0, 0, 0, 1)";
    mysqli_query($conn, $sql_estat);

?>

	<section class="banner-area relative">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Ajuda em tempo real
					</h1>
					<p>Conhece o nosso chat bot e esclarece as tuas dúvidas.</p>
					<div class="link-nav">
						<span class="box">
							<a href="/">Início</a>
							<i class="lnr lnr-arrow-right"></i>
							<a href="help">Ajuda em tempo real</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="rocket-img">
			<img src="img/rocket.png" alt="" style="margin-bottom:-8px;">
		</div>
	</section>
	
	
	
	<section class="about-area section-gap">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-5 col-md-6 about-left">
					<iframe src="txt_bot" style="height: 100%; width: 100%; border: none;"></iframe>
				</div>
				<div class="offset-lg-1 col-lg-6 offset-md-0 col-md-12 about-right">
					<h1>
						Bbot Software
					</h1>
					<div class="wow fadeIn" data-wow-duration="1s">
						<p>
							Para que seja feita a ajuda em tempo real, um dos nossos fundadores (Leandro Pereira) desenvolveu para a sua PAP (Prova de Aptidão Profissional) uma ferramenta que permite a resposta imediata por parte de um <i>bot</i>.
							<br/>Caso não encontres o que estavas à procura podes sempre entrar em contacto.
						</p>
					</div>
					<a href="contact" class="primary-btn">Contactar</a>
				</div>
			</div>
		</div>
	</section>
	

	<?php  require_once "footer.php"; ?>


 
</body>

</html>