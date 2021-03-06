
	<?php  require_once "links.php"; ?>
	<title>Palestras</title>
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
	<section class="banner-area relative">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
							Palestras
					</h1>
					<p>
						Envia-nos a tua ideia.
					</p>
					<div class="link-nav">
						<span class="box">
							<a href="/">Início</a>
							<i class="lnr lnr-arrow-right"></i>
							<a href="palestras">Palestras</a>
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
				<div class="col-lg-4">
					<h1>Qual a tua ideia?</h1>
					<p>Precisas de uma atividade relacionada com a informática? Descreve-nos a tua ideia o mais detalhada possível e entraremos em contacto. <br/>Caso não tenhas encontrado o que procuras podes sempre contactar-nos.</p>
					<a href="contact" class="primary-btn">Contactar</a>
				</div>
				<div class="col-lg-8 form-style-5">
					<form action="" method="post" enctype="multipart/form-data" class="form form-area">
						<fieldset>
							<legend>
								<span class="number">
									1
								</span> 
								Informação Essencial
							</legend>
							<!-- Inputs -->
							<label>Nome: <span class="error">*</span></label>
							<input placeholder="Introduza o seu nome..." type="text" name="nome" required>
							<br/><br/>
							<label>Email: <span class="error">*</span></label>
							<input placeholder="Introduza o seu email..." type="email" name="email" required>
							<br/><br/>
							<label>Tema: <span class="error">*</span></label>
							<input placeholder="Qual o tema?" type="text" name="tema" required>
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
							<label>Público-alvo:</label>
							<input placeholder="Qual o público-alvo?" type="text" name="publico">
							<br/><br/>
							<label>Observações:</label>
							<textarea name="obs" rows="5" cols="40"></textarea>
							<br/><br/>
							<span class="error">* campo obrigatório</span>
						<button type="submit" class="primary-btn" style="border-radius: 5px; float: right;" id="btn-contato">Enviar</button>
						</fieldset>
						<div class="alert-msg" style="text-align: left;"></div>
						<div class="loading" style="float: left;margin-left:20px;"></div>
					</form>
					<div class="mostrar"></div>
				</div>
			</div>
		</div>
	</section>

	<?php  require_once "footer.php"; ?>
	
<script>
	$(function(){
		$('.form').submit(function(){
			$('.loading').html("<img src='loading.gif' width='45'>");
			$.ajax({
				url: 'palestras-mail.php',
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