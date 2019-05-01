<?php require_once "links.php"; ?>
<!-- Site Title -->
<title>Cursos</title>


</head>

<body>

	<?php require_once "menu.php";
	require_once "conexao.php";
	$sql_estat = "INSERT INTO estatisticas (n_estatic_index, n_estatic_blog, n_estatic_curso, n_estatic_services) values (0, 0, 1, 0)";
	mysqli_query($conn, $sql_estat);

	$sql      = "SELECT * FROM cursos ORDER BY nome_curso ASC";
	$consulta = mysqli_query($conn, $sql);

	?>



	<!-- Start Banner Area -->
	<section class="banner-area relative">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Cursos
					</h1>
					<p>
						Conhece os nossos cursos e aprende com o clube.
					</p>
					<div class="link-nav">
						<span class="box">
							<a href="index">Início</a>
							<i class="lnr lnr-arrow-right"></i>
							<a href="courses">Cursos</a>
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


	<!-- Start Courses Area -->
	<section class="courses-area section-gap">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 about-right">
					<h1>Cursos</h1>
					<div class="wow fadeIn" data-wow-duration="1s">
						<p>
							Os cursos desenvolvidos pelo Clube Microsoft estão relacionados com informática nas suas mais diversas ferramentas, e visam preparar os alunos para aquisição de competências nesta área. De referir que, as tecnologias de informação são hoje em dia uma mais valia ao nível da geração de empregos e oportunidades de trabalho, por isso vem aprender connosco!
						</p>
					</div>
					<!--<a href="courses.php" class="primary-btn">Saber Mais</a>-->
				</div>
				<div class="offset-lg-1 col-lg-6">
					<div class="courses-right">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<ul class="courses-list">

									<?php
									if ($consulta->num_rows > 0) {
										while ($row = $consulta->fetch_assoc()) {
											echo "<li class='li_cursos'>
														 <a class='wow fadeInRight' href='course-details?c=" . $row["nome_clear"] . "' data-wow-duration='1s' data-wow-delay='.1s'>
															 <img src='img/courses/" . $row["icon_curso"] . "' class='icons'/>" . $row["nome_curso"] .
												"</a>
													";


											$id_curso = $row['id_curso'];

											$sql1      = "SELECT * FROM sub_cursos WHERE id_curso = '$id_curso' ORDER BY sub_cursos.nome_sub_curso ASC";
											$consulta1 = mysqli_query($conn, $sql1);

											if ($consulta1->num_rows > 0) {?>
												<ul class="dropdown" >
											<?php	while ($row1 = $consulta1->fetch_assoc()) {
												
													
													
									      echo"  <li><a href='course-details?c=" . $row1["nome_sub_clear"] . "' style='color: black;'>
												<img src='img/courses/". $row1['icon_sub_curso'] ." ' class='icons'/>". $row1['nome_sub_curso']."
													</a></li>";



												
											}
											?>
											</ul>
											<?php
										} else {
											echo "";
										}
										echo"	</li>";
									}
								} else {
									echo "Sem Dados";
								} ?>

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Courses Area -->


	<style>
		.courses-list {
			display: flex;
			flex-direction: row;
			justify-content: space-between;
			flex-wrap: wrap;
		}

		.courses-list .li_cursos {
			width: 100%;
			flex: 0 45%;
			margin: 2.5%;
		}

		.icons {
			height: 25px;
			margin-right: 5px;
		}
	</style>


	<?php require_once "footer.php"; ?>




</body>

</html>