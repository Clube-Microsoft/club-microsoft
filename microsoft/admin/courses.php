
    <?php require_once "links.php";?>
  <!-- Site Title -->
  <title>Cursos</title>

<style>
  #header {
    padding: 20px 0;
    position: fixed;
    left: 0;
    top: 0;
    right: 0;
    transition: all 0.5s;
    z-index: 997;
    background: rgba(0, 0, 0, 0.47843137254901963);
}
</style>

</head>
<body>



 <?php
    session_start();
include('conexao.php');

if(!$_SESSION["admin"]) {
  header("Location: index.php");
  exit();
} 

include('menu_admin.php');


?>


	
<div id="Add_Post" class="Seccoes">
         <div class="limiter">
            <div class="container-login100">
               <div class="wrap-login100">
                            
                        <span class="login100-form-title">
                        Adicionar Curso<br>
                        </span>

                  <div class="return_table js-tilt" id="Mostrar_cursos" data-tilt style="width: 100%">
                     <?php 
                        $sql      = "SELECT * FROM cursos ORDER BY nome_curso DESC";
                        $consulta = mysqli_query($conn, $sql);
                        
                        if ($consulta->num_rows > 0) {
                        while($row = $consulta->fetch_assoc()) {
                             echo "<div style='width: 75%; float: left;''><p>" . $row["nome_curso"] . "</p></div>";?>
                     <div style="width: 25%; float: right;">
                        <input type="image" name="img_btn_edit_curso" <?php echo "id='".$row["id_curso"]."'" ?> src="../img/icons/edit.png" Class="icons_admin_trash" />
                        <input type="image" name="img_btn_trash_curso" <?php echo "id='".$row["id_curso"]."'" ?> src="../img/icons/trash.png" Class="icons_admin_edit" />
                     </div>
                     <div style="clear: both;"></div>
                     <?php
                        }
                        } else {
                        echo "Sem Dados";
                        }
                        
                        ?>
                  </div>
                  <div  class="login100-form validate-form" style="width: 100%">
                    
                     <form enctype="multipart/form-data" action="add_course.php" id="enviar_Curso" method="Post">
                      <input type="text" name="txt_Id_Curso" id="txt_Id_Curso" style="display: none;">
                        
                        <div class="wrap-input100 validate-input">
                           <input class="input100" type="text" name="txt_Titulo_Curso" id="txt_Titulo_Curso" placeholder="Curso">
                           <span class="focus-input100"></span>
                           <span class="symbol-input100">
                           <i class="fas fa-heading"></i>
                           </span>
                        </div>
                         <div class="wrap-input100 validate-input">
                           <textarea class="input100" name="txt_Texto_Pequeno_Curso" id="txt_Texto_Pequeno_Curso" placeholder="Texto"></textarea>
                           <span class="focus-input100"></span>
                           <span class="symbol-input100">
                           <i class="far fa-paragraph"></i>
                           </span>
                        </div>
                         <div class="wrap-input100 validate-input">
                           <input type="file" name="arquivo_Curso" id="arquivo_Curso" />
                           <span class="focus-input100"></span>
                           <span class="symbol-input100">
                           <i class="fas fa-image"></i>
                           </span>
                        </div>
                        <?php
                    if(isset($_SESSION["produto_nao_enviado"])):
                    ?>
                      <p>ERRO: Não enviada!</p>
                    <?php
                    endif;
                    unset($_SESSION["produto_nao_enviado"]);
                    ?>
                        <div class="mostrar"></div>
                        <div class="container-login100-form-btn">
                           <button type="submit" id="btn_form_Curso" name="btn_form_Curso" class="login100-form-btn">
                           Enviar Curso
                           </button>
                     </form>
                     </div>
                     <form action="/" id="enviar_Curso_edit">
                        <button type="submit" id="btn_form_Curso_editar" name="btn_form_Curso_editar" class="login100-form-btn" style="display: none;">
                        Editar Curso
                        </button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="../jsx/sweetalert.js"></script>
<script>
$(document).ready(function(){
  $('[name=img_btn_trash_curso]').click(function(event){
              event.preventDefault();
             const idcurso = event.target.id;
         
             $.post('del_curse.php', {
              phpidcurso : idcurso
            }, function (data) {
          
              
          
                $('.mostrar').html(data);

                setTimeout(location.reload.bind(location), 3000);
          
              
            });
         
           });
});
</script>
</body>
</html>

    