<!DOCTYPE html>
<html lang="zxx" class="no-js">
<?php
require_once "conexao.php";

$Url_Clean = $_GET['c'];

$sql      = "SELECT id_curso, nome_curso, nome_clear, nome_curso, icon_curso, texto_curso, imagem_curso  FROM cursos where nome_clear='$Url_Clean'";
$consulta = mysqli_query($conn, $sql);

if ($consulta->num_rows > 0) {
   while ($row = $consulta->fetch_assoc()) {
      ?>

      <head>
         <?php require_once "links.php"; ?>
         <!-- Site Title -->
         <title><?php echo $row['nome_curso']; ?></title>
      </head>

      <body>
         <?php require_once "menu.php"; ?>
         <!-- Start Banner Area -->
         <section class="banner-area relative">
            <div class="container">
               <div class="row d-flex align-items-center justify-content-center">
                  <div class="about-content col-lg-12">
                     <h1 class="text-white">
                        <?php echo $row['nome_curso']; ?>
                     </h1>
                     <p>Subtítulo Curso</p>
                     <div class="link-nav">
                        <span class="box">
                           <a href="index">Início </a>
                           <i class="lnr lnr-arrow-right"></i>
                           <a href="courses">Cursos</a>
                           <i class="lnr lnr-arrow-right"></i>
                           <a><?php echo $row['nome_curso']; ?></a>
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
                              <img class="img-fluid img-blog-post-dentro" <?php echo "src='img/img-course/".$row['imagem_curso']."'"; ?> <?php echo "alt='".$row['nome_curso']."'"; ?>>
                           </div>
                           <div class="col-12 col-lg-4" style="float: right;">
                              <h3 class="mt-20 mb-20"><?php echo $row['nome_curso']; ?></h3>
                           </div>
                        </div>
                        <div class="col-12" style="position: unset;">
                           <p class="excert-dentro">
                              <?php echo $row['texto_curso']; ?>
                           </p>
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
   $sql1      = "SELECT id_sub_curso, nome_sub_curso, nome_sub_clear, icon_sub_curso, texto_sub_curso, id_curso, imagem_sub_curso  FROM sub_cursos where nome_sub_clear='$Url_Clean'";
   $consulta1 = mysqli_query($conn, $sql1);
   

   if ($consulta1->num_rows > 0) {
      while ($row = $consulta1->fetch_assoc()) {

         $id_curso =  $row['id_curso'];

         $sql2      = "SELECT id_curso, nome_curso, nome_clear, icon_curso, texto_curso, imagem_curso  FROM cursos where id_curso='$id_curso'";
         $consulta2 = mysqli_query($conn, $sql2);

         if ($consulta2->num_rows > 0) {
            while ($row2 = $consulta2->fetch_assoc()) {
               ?>

                  <head>
                     <?php require_once "links.php"; ?>
                     <!-- Site Title -->
                     <title><?php echo $row['nome_sub_curso']; ?></title>
                  </head>

                  <body>
                     <?php require_once "menu.php"; ?>
                     <!-- Start Banner Area -->
                     <section class="banner-area relative">
                        <div class="container">
                           <div class="row d-flex align-items-center justify-content-center">
                              <div class="about-content col-lg-12">
                                 <h1 class="text-white">
                                    <?php echo $row2['nome_curso']; ?>
                                 </h1>
                                 <p><?php echo $row['nome_sub_curso']; ?></p>
                                 <div class="link-nav">
                                    <span class="box">
                                       <a href="index">Início </a>
                                       <i class="lnr lnr-arrow-right"></i>
                                       <a href="courses">Cursos</a>
                                       <i class="lnr lnr-arrow-right"></i>
                                       <a href="courses"><?php echo $row2['nome_curso']; ?></a>
                                       <i class="lnr lnr-arrow-right"></i>
                                       <a><?php echo $row['nome_sub_curso']; ?></a>
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
                                          <img class="img-fluid img-blog-post-dentro" <?php echo "src='img/img-course/".$row['imagem_sub_curso']."'"; ?>  <?php echo "alt='".$row['nome_curso']."'"; ?>>
                                       </div>
                                       <div class="col-12 col-lg-4" style="float: right;">
                                          <h3 class="mt-20 mb-20"><?php echo $row['nome_sub_curso']; ?></h3>
                                       </div>
                                    </div>
                                    <div class="col-12" style="position: unset;">
                                       <p class="excert-dentro">
                                          <?php echo $row['texto_sub_curso']; ?>
                                       </p>
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
               echo "Sem dados";
            }
         }
      } else {
         echo "Sem dados";
      }
   }

   require_once "footer.php"; ?>

   </body>

</html>