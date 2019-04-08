
		<?php  require_once "links.php"; ?>
	<!-- Site Title -->
	<title>Blog</title>

	 
</head>

<body>

	<?php  
		require_once "menu.php";
		include('conexao.php'); 
		//numero de itens por pag
		$posts_pag = 9;
		//pag atual
		$pag = intval($_GET['pag']);
	?>



	<!-- Start Banner Area -->
	<section class="banner-area relative">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Blog
					</h1>
					<div class="link-nav">
						<span class="box">
							<a href="index">Início </a>
							<i class="lnr lnr-arrow-right"></i>
							<a href="blog?pag=0">Blog</a>
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

	<!-- Start post-content Area -->
	
	<section class="post-content-area" style="padding-top: 10vh;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 posts-list">
					<?php 
                        $sql      = "SELECT * FROM blog_post ORDER BY blog_post.Data DESC LIMIT $pag, $posts_pag ";
	                    $consulta = mysqli_query($conn, $sql);
                        $sql1      = "SELECT * FROM blog_post";
	                    $consulta1 = mysqli_query($conn, $sql1);
	                    
	                    //sabe quantos posts existem
	                    $post_total = $consulta1->num_rows;

	                    //definir numero de pags
	                    $num_pags = ceil($post_total/$posts_pag);

	                    if ($consulta->num_rows > 0) {
	                    while($row = $consulta->fetch_assoc()) {
	                    ?>
					<div class="single-post row col-xl-4 col-lg-6 col-12">
						<div class="col-lg-12 col-md-12">
							<a class="posts-title" <?php echo "href='blog-post?p=" .$row['Url_Clean']."'"; ?>>
								<div class="feature-img" style="min-height: 27vh;">
									<img class="img-fluid img-blog-post"  <?php echo "src='img/blog/ ".$row['Img_Post']."'"; ?> alt="">
								</div>
								<h3 style="min-height: 60px;"><?php echo $row['Titulo']; ?></h3>
							</a>
							<p class="date col-lg-12 col-md-12 col-6"><a href="#"><?php echo $row['Data']; ?></a> <span class="lnr lnr-calendar-full"></span></p>
							<p class="excert" style="min-height: 120px;">
                  				<?php echo $row['Texto_Pequeno']; ?>
                  				</p>
							<div class="meta-details">
							<ul class="tags">
								<?php
								$Id_Post = $row['Id_Post']; 

			                    $sql1      = "SELECT * FROM hastags WHERE Id_Post = '$Id_Post' ORDER BY `hastags`.`Hastag` ASC";
			                    $consulta1 = mysqli_query($conn, $sql1);
			                    
			                    if ($consulta1->num_rows > 0) {
			                    while($row1 = $consulta1->fetch_assoc()) {
			                    ?>

								<li><a href='#'><?php echo $row1['Hastag']; ?></a></li>

                              	<?php
			                    }
			                    } else {
			                    echo "";
			                    }
			                    ?>
							</ul>
						</div>
							<a <?php echo "href='blog-post?p=" .$row['Url_Clean']."'"; ?>  class="primary-btn">Ler Mais</a>
						</div>
					</div>
					<?php
                    }?>
				</div>
				<nav class="blog-pagination justify-content-center d-flex">
						<ul class="pagination">
							<li class="page-item">
								<a href="blog?pag=0" class="page-link" aria-label="Previous">
									<span aria-hidden="true">
										<span class="lnr lnr-chevron-left"></span>
									</span>
								</a>
							</li>
							<?php for($i = 0; $i<$num_pags; $i++){
								$ativo = "";
								if($pag == $i)
									$ativo = "active" ?>
								<li class="page-item <?php echo $ativo ?>"><a href="blog?pag=<?php echo $i; ?>" class="page-link"><?php echo $i+1; ?></a></li>
							<?php } ?>
							
							<li class="page-item">
								<a href="blog?pag=<?php echo $num_pags-1; ?>" class="page-link" aria-label="Next">
									<span aria-hidden="true">
										<span class="lnr lnr-chevron-right"></span>
									</span>
								</a>
							</li>
						</ul>
					</nav>
			<?php
            } else {
            echo "Sem Dados";
            }
            ?>
			</div>
		</div>
	</section>
	
	<!-- End post-content Area -->
	
	<?php  require_once "footer.php"; ?>



 
</body>

</html>