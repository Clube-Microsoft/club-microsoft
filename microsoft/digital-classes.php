
	<?php  require_once "links.php"; ?>
	<title>Workshops</title>
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
							Aulas Digitais
					</h1>
					<p>
						Marca a tua aula.
					</p>
					<div class="link-nav">
						<span class="box">
							<a href="/">Início</a>
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
	
	
	
	<section class="contact-page-area section-gap">
		<div class="container">
			<div class="row" style="text-align:center;">
				<img src="img/maintenance.jpg" style="width:70%; height:70%; margin: 0 auto;"/>
			</div>
		</div>
	</section>

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