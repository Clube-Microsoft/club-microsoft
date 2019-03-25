 <!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>  
    <?php  require_once "links.php"; ?>

  <!-- Site Title -->
  <title>Clube Microsoft</title>
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

  <?php  require_once "menu.php"; 

if(!$_SESSION['admin']) {
	header('Location: admin_entrar.php');
	exit();
}
?>

	
<div id="Add_Post" class="Seccoes">
         <div class="limiter">
            <div class="container-login100">
               <div class="wrap-login100">
                  <div class="return_table js-tilt" id="Mostrar_Post" data-tilt style="width: 100%">
                     <?php 
                        $sql      = "SELECT * FROM blog_post";
                        $consulta = mysqli_query($conn, $sql);
                        
                        if ($consulta->num_rows > 0) {
                        while($row = $consulta->fetch_assoc()) {
                             echo "<div style='width: 75%; float: left;''><p>" . $row["Titulo"] . "</p></div>";?>
                     <div style="width: 25%; float: right;">
                        <input type="image" name="img_btn_edit_post" <?php echo "id='".$row["Id_Post"]."'" ?> src="img/icons/edit.png" Class="icons_admin_trash" />
                        <input type="image" name="img_btn_trash_post" <?php echo "id='".$row["Id_Post"]."'" ?> src="img/icons/trash.png" Class="icons_admin_edit" />
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
                    
                     <form enctype="multipart/form-data" action="add_post.php" id="enviar_Post" method="Post">
                      <input type="text" name="txt_Id_Post" id="txt_Id_Post" style="display: none;">
                        <span class="login100-form-title">
                        Adicionar Post
                        </span>
                        <div class="wrap-input100 validate-input">
                           <input class="input100" type="text" name="txt_Titulo_Post" id="txt_Titulo_Post" placeholder="Titulo">
                           <span class="focus-input100"></span>
                           <span class="symbol-input100">
                           <i class="fas fa-heading"></i>
                           </span>
                        </div>
                         <div class="wrap-input100 validate-input">
                           <textarea class="input100" name="txt_Texto_Pequeno_Post" id="txt_Texto_Pequeno_Post" placeholder="Texto Pequeno"></textarea>
                           <span class="focus-input100"></span>
                           <span class="symbol-input100">
                           <i class="far fa-paragraph"></i>
                           </span>
                        </div>
                        <div class="wrap-input100 validate-input">
                           <textarea name="txt_Texto_Grande_Post" id="txt_Texto_Grande_Post" placeholder="Texto Grande"></textarea>
                        </div>
                        <div class="wrap-input100 validate-input">
                           <input class="input100" type="date" size="60" name="Data_Post" id="Data_Post" />
                           <span class="focus-input100"></span>
                           <span class="symbol-input100">
                           <i class="far fa-calendar-day"></i>
                           </span>
                        </div>
                         <div class="wrap-input100 validate-input">
                           <input class="input100" type="file" name="arquivo_Post" id="arquivo_Post" />
                           <span class="focus-input100"></span>
                           <span class="symbol-input100">
                           <i class="fas fa-image"></i>
                           </span>
                        </div>
                        <div class="table-responsive">
                          <table class="table table-bordered" id="dynamic_field">
                            <tr>
                              <td><input type="text" name="hastag[]" placeholder="hastag" class="form-control name_list" /></td>
                              <td><button type="button" name="add_hastag" id="add_hastag" class="btn btn-success">Add More</button></td>
                            </tr>
                          </table>
                        </div>
                        <?php
                    if(isset($_SESSION['produto_nao_enviado'])):
                    ?>
                      <p>ERRO: Não enviada!</p>
                    <?php
                    endif;
                    unset($_SESSION['produto_nao_enviado']);
                    ?>
                        <p id="resultado"></p>
                        <div class="container-login100-form-btn">
                           <button type="submit" id="btn_form_Post" name="btn_form_Post" class="login100-form-btn">
                           Enviar Post
                           </button>
                     </form>
                     </div>
                     <form action="/" id="enviar_Post_edit">
                        <button type="submit" id="btn_form_Post_editar" name="btn_form_Post_editar" class="login100-form-btn" style="display: none;">
                        Editar Post
                        </button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
	<script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'#txt_Texto_Grande_Post' });</script>
<script>
$(document).ready(function(){
  var i=1;
  $('#add_hastag').click(function(){
    i++;
    $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="hastag[]" placeholder="hastag" class="form-control name_list" /></td><td><button type="button" name="remove_hastag" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
  });
  
  $(document).on('click', '.btn_remove', function(){
    var button_id = $(this).attr("id"); 
    $('#row'+button_id+'').remove();
  });
  
  $('#submit').click(function(){    
    $.ajax({
      url:"name.php",
      method:"POST",
      data:$('#add_name').serialize(),
      success:function(data)
      {
        alert(data);
        $('#add_name')[0].reset();
      }
    });
  });
  
});
</script>
</body>
</html>

