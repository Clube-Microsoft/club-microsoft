<!DOCTYPE html>
<html lang="zxx" class="no-js">
   <?php 
         require_once "conexao.php";

         $Titulo = $_GET['post'];

    $sql      = "SELECT * FROM blog_post where Titulo = '$Titulo'";
    $consulta = mysqli_query($conn, $sql);
    
    if ($consulta->num_rows > 0) {
    while($row = $consulta->fetch_assoc()) {
    ?> 
   <head>
      <?php  require_once "links.php"; ?>
      <!-- Site Title -->
      <title><?php echo $row['Titulo']; ?></title>
   </head>
   <body>
      <?php  require_once "menu.php"; ?>
      <!-- Start Banner Area -->
      <section class="banner-area relative">
         <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
               <div class="about-content col-lg-12">
                  <h1 class="text-white">
                    <?php echo $row['Titulo']; ?>
                  </h1>
                  <p><?php echo $row['Texto_Pequeno']; ?></p>
                  <div class="link-nav">
                     <span class="box">
                     <a href="index.php">Início </a>
                     <i class="lnr lnr-arrow-right"></i>
                     <a href="blog.php">Blog</a>
                     <i class="lnr lnr-arrow-right"></i>
                     <a <?php echo "href='blog-post.php?post=$Titulo'"; ?>><?php echo $row['Titulo']; ?></a>
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
      <section class="post-content-area single-post-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 posts-list">
                  <div class="single-post row">
                     <div class="col-lg-12">
                        <div class="feature-img col-12 col-lg-8" style="float: left;">
                           <img class="img-fluid img-blog-post-dentro"  <?php echo "src='img/blog/ ".$row['Img_Post']."'"; ?> alt="">
                        </div>
                        <div class="col-12 col-lg-4" style="float: right;">
                           <h3 class="mt-20 mb-20"><?php echo $row['Titulo']; ?></h3>
                           <p class="date"><a href="#"><?php echo $row['Data']; ?></a> <span class="lnr lnr-calendar-full"></span></p>
                        </div>
                     </div>
                     <div class="col-12">
                        <p class="excert-dentro">
                           <?php echo $row['Texto_Grande']; ?>
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
                           <div class="user-details row">
                              <ul class="social-links col-12">
                                 <li <?php echo "data-href='http://epbclubemicrosoft.com/blog-post.php?post=$Titulo'"; ?>><a target="_blank" <?php echo "href='https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fepbclubemicrosoft.com%2Fblog-post.php?post=$Titulo%2F&amp;src=sdkpreparse'";?> class="fb-xfbml-parse-ignore"><i class="fa fa-facebook"></i></a></li>
                                 <li><a target="_blank"  <?php echo " href='https://twitter.com/intent/tweet?text=http://epbclubemicrosoft.com/blog-post.php?post=$Titulo ".$row['Texto_Pequeno']."'";?>><i class="fa fa-twitter"></i></a></li>
                                 <li><a onclick="linkedin(event, <?php echo "'http://epbclubemicrosoft.com/blog-post.php?post=$Titulo'";?>, 'Clube Microsoft');return false;"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                 <!--<li><a href="https://plus.google.com/share?url=http://epbclubemicrosoft.com/exame-mos.php"><i class="fa fa-google-plus"></i></a></li>-->
                                 <li><a target="_blank" <?php echo "href='whatsapp://send?text=".$row['Texto_Pequeno']." &ndash; http://epbclubemicrosoft.com/blog-post.php?post=$Titulo'"?> title="Acesse de seu smartphone para enviar por WhatsApp"><i class="fa fa-whatsapp"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End post-content Area -->
      
      <?php
         }
         } else {
         echo "Sem Dados";
         } require_once "footer.php"; ?>
      <script>
         linkedin = function (event, s, a){
            event.preventDefault();
            window.open('https://www.linkedin.com/cws/share?url=' +s+ '?name=' +a, 'newwindow', 'width=680, height=450');
         };
      </script>
   </body>
</html>