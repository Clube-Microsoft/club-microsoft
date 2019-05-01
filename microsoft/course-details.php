<!DOCTYPE html>
<html lang="zxx" class="no-js">
   <?php 
   
   $Url_Clean = 'test';
         /*require_once "conexao.php";

         $Url_Clean = $_GET['p'];

    $sql      = "SELECT Id_Post, Titulo, Url_Clean, Texto_Pequeno, Texto_Grande, Img_Post, date_format(Data, '%d/%m/%Y') AS Data  FROM blog_post where Url_Clean = '$Url_Clean'";
    $consulta = mysqli_query($conn, $sql);
    
    if ($consulta->num_rows > 0) {
    while($row = $consulta->fetch_assoc()) {*/
    ?>
   <head>
      <?php  require_once "links.php"; ?>
      <!-- Site Title -->
      <title>Nome Curso</title>
   </head>
   <body>
      <?php  require_once "menu.php"; ?>
      <!-- Start Banner Area -->
      <section class="banner-area relative">
         <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
               <div class="about-content col-lg-12">
                  <h1 class="text-white">
                    Nome Curso
                  </h1>
                  <p>Subtítulo Curso</p>
                  <div class="link-nav">
                     <span class="box">
                     <a href="index">Início </a>
                     <i class="lnr lnr-arrow-right"></i>
                     <a href="blog?pag=0">Blog</a>
                     <i class="lnr lnr-arrow-right"></i>
                     <a>Nome Curso</a>
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
                           <img class="img-fluid img-blog-post-dentro" src="img/blog/linkedin_blog.jpg" alt="">
                        </div>
                        <div class="col-12 col-lg-4" style="float: right;">
                           <h3 class="mt-20 mb-20">Nome Curso</h3>
                           <p class="date"><a href="#">99/99/9999</a> <span class="lnr lnr-calendar-full"></span></p>
                        </div>
                     </div>
                     <div class="col-12" style="position: unset;">
                        <p class="excert-dentro">
                           Detalhes curso Detalhes curso Detalhes curso Detalhes curso Detalhes curso Detalhes curso Detalhes curso Detalhes curso Detalhes curso Detalhes curso Detalhes curso Detalhes curso Detalhes curso Detalhes curso Detalhes curso Detalhes curso Detalhes curso Detalhes curso Detalhes curso Detalhes curso Detalhes curso
                        </p>
                        <div class="meta-details">
                           <ul class="tags">
                              <?php
                              /*$Id_Post = $row['Id_Post']; 

                             $sql1      = "SELECT * FROM hastags WHERE Id_Post = '$Id_Post' ORDER BY `hastags`.`Hastag` ASC";
                             $consulta1 = mysqli_query($conn, $sql1);
                             
                             if ($consulta1->num_rows > 0) {
                             while($row1 = $consulta1->fetch_assoc()) {*/
                             ?>

                        <li><a href='#'>hastag</a></li>

                                 <?php/*
                             }
                             } else {
                             echo "";
                             }*/
                             ?>
                           </ul>
                           <div class="user-details row">
                              <ul class="social-links col-12">
                                 <li class="fb-xfbml-parse-ignore"><i class="fa fa-facebook"></i></a></li>
                                 <li><a target="_blank"><i class="fa fa-twitter"></i></a></li>
                                 <li><a><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                 <!--<li><a href="https://plus.google.com/share?url=http://epbclubemicrosoft.com/blog-post?p=$Url_Clean"><i class="fa fa-google-plus"></i></a></li>-->
                                 <li><a target="_blank" title="Acesse de seu smartphone para enviar por WhatsApp"><i class="fa fa-whatsapp"></i></a></li>
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
         /*}
         } else {
         echo "Sem Dados";
         } */require_once "footer.php"; ?>
      <script>
         linkedin = function (event, s, a){
            event.preventDefault();
            window.open('https://www.linkedin.com/cws/share?url=' +s+ '?name=' +a, 'newwindow', 'width=680, height=450');
         };
      </script>
   </body>
</html>