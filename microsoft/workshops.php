
	<?php  require_once "links.php"; ?>
	<!-- Site Title -->
	<title>Contacto</title>
    <script src="jsx/sweetalert.js"></script>
	<link rel="stylesheet" href="css/form-style.css">
</head>

<body>
	<?php  
		require_once "menu.php";
require_once "conexao.php"; 
			$sql_estat = "INSERT INTO estatisticas (n_estatic_index, n_estatic_blog, n_estatic_curso, n_estatic_services) values (0, 0, 0, 1)";
    mysqli_query($conn, $sql_estat);




		?>
    <!-- Start Banner Area -->
	<section class="banner-area relative">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
							Workshops
					</h1>
					<p>
						Envia-nos a tua ideia.
					</p>
					<div class="link-nav">
						<span class="box">
							<a href="index">Início</a>
							<i class="lnr lnr-arrow-right"></i>
							<a href="workshops">Workshops</a>
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
				<div class="col-lg-4">
					<h1>Qual a tua ideia?</h1>
					<p>Descreve-nos a tua ideia e entraremos em contacto.</p>
				</div>
				<div class="col-lg-8 form-style-5">
					<form action="" method="post" enctype="multipart/form-data" class="form form-area">
						<fieldset>
							<legend>
								<span class="number">
									1
								</span> 
								Informação Pessoal
							</legend>
							<!-- Inputs -->
							<label>Nome: <span class="error">*</span></label>
							<input placeholder="Introduza o seu nome..." type="text" name="nome" required>
							<br/><br/>
							<label>Email: <span class="error">*</span></label>
							<input placeholder="Introduza o seu email..." type="email" name="email" required>
							<br/><br/>
							<label>Tema: <span class="error">*</span></label>
							<input placeholder="Define o tema..." type="text" name="tema" required>
							<br/><br/>
							<label>Descrição: <span class="error">*</span></label>
							<textarea name="desc" rows="5" cols="40" required></textarea>
							<br/><br/>
							<legend>
								<span class="number">
									2
								</span> 
								Informação Adicional
							</legend>
							<label>Duração</label>
							<input type="number" name="duracao">	minutos
							<br/><br/>
							<label>Observações:</label>
							<textarea name="obs" rows="5" cols="40"></textarea>
							<br/><br/>
							<span class="error">* campo obrigatório</span>
						</fieldset>
						<div class="alert-msg" style="text-align: left;"></div>
						<button type="submit" id="btn-workshops">Enviar</button>
						<div class="loading" style="float: left;margin-left:20px;"></div>
					</form>
					<div class="mostrar"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- End contact-page Area -->

	<?php  require_once "footer.php"; ?>
	
<script>
	$(function(){
		$('.form').submit(function(){
			$('.loading').html("<img src='loading.gif' width='45'>");
			$.ajax({
				url: 'workshops-mail.php',
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