<!DOCTYPE html>
<html lang="pt-pt" class="no-js">
   <head>
      <?php  require_once "links.php"; ?>
	  
      <title>LinkedIn - Evento</title>
   </head>
   <body>
      <?php  require_once "menu.php"; ?>
	  
      <section class="banner-area relative">
         <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
               <div class="about-content col-lg-12">
                  <h1 class="text-white">
                     Linkedin
                  </h1>
                  <p>Dotar os alunos de conhecimentos e competências para a utilização eficaz do LinkedIn. No final do workshop, o aluno deverá ser capaz de formular o seu perfil de maneira a efetuar a suacandidatura às ofertas de emprego.</p>
                  <div class="link-nav">
                     <span class="box">
                     <a href="index.php">Início </a>
                     <i class="lnr lnr-arrow-right"></i>
                     <a href="blog-home.php">Blog</a>
                     <i class="lnr lnr-arrow-right"></i>
                     <a href="linkedin.php">Linkedin</a>
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
                           <h3 class="mt-20 mb-20">Linkedin</h3>
                           <p class="date"><a href="#">26 fev 2019</a> <span class="lnr lnr-calendar-full"></span></p>
                        </div>
                     </div>
                     <div class="col-12">
                        <p class="excert-dentro">
                         Nos próximos dias 13 e 20 de março será realizado um Workshop sobre Linkedin que irá dotar os alunos de conhecimentos e competências para a utilização eficaz desta ferramenta profissional. No final os alunos serão capazes de construir o seu perfil de maneira a efetuar a sua candidatura às ofertas de emprego, usando o computador e/ou dispositivos móveis.
                        </p>
                        <div class="meta-details">
                           <ul class="tags">
                              <li><a href="#">Eventos</a></li>
                              <li><a href="#">Workshop</a></li>
                           <div class="user-details row">
                              <ul class="social-links col-12">
                                 <li data-href="http://epbclubemicrosoft.com/linkedin.php"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%epbclubemicrosoft.com%2linkedin.php%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"><i class="fa fa-facebook"></i></a></li>
                                 <li><a target="_blank" href="https://twitter.com/intent/tweet?text=http://epbclubemicrosoft.com/linkedin.php Dotar os alunos de conhecimentos e competências para a utilização eficaz do LinkedIn. No final do workshop, o aluno deverá ser capaz de formular o seu perfil de maneira a efetuar a suacandidatura às ofertas de emprego."><i class="fa fa-twitter"></i></a></li>
                                 <li><a onclick="linkedin(event, 'http://epbclubemicrosoft.com/linkedin.php', 'Clube Microsoft');return false;"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                 <li><a href="https://plus.google.com/share?url=http://epbclubemicrosoft.com/linkedin.php"><i class="fa fa-google-plus"></i></a></li>
                                 <li><a target="_blank" href="whatsapp://send?text=Dotar os alunos de conhecimentos e competências para a utilização eficaz do LinkedIn. No final do workshop, o aluno deverá ser capaz de formular o seu perfil de maneira a efetuar a suacandidatura às ofertas de emprego. &ndash; http://epbclubemicrosoft/linkedin.php" title="Acesse de seu smartphone para enviar por WhatsApp"><i class="fa fa-whatsapp"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php  require_once "footer.php"; ?>
      <script>
         linkedin = function (event, s, a){
            event.preventDefault();
            window.open('https://www.linkedin.com/cws/share?url=' +s+ '?name=' +a, 'newwindow', 'width=680, height=450');
         };
      </script>
   </body>
</html>