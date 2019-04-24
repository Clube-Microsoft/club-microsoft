
    <?php require_once "links.php";?>
  <!-- Site Title -->
  <title>Blog</title>

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
                  Estatística<br>
                  </span>
                  <div class="return_table js-tilt" id="Mostrar_Estatisticas" data-tilt style="width: 100%; text-align: center;">
                     <?php 
                      /*SELECT DISTINCT extract(MONTH from estat_index.data)  Mes, extract(YEAR from estat_index.data)  Ano, COUNT(DISTINCT estat_index.data) AS numero_de_pessoas_index,
                        extract(MONTH from estat_blog.data)  Mes, extract(YEAR from estat_blog.data)  Ano, COUNT(DISTINCT estat_blog.data) AS numero_de_pessoas_blog
                        FROM estat_index, estat_blog
                        WHERE estat_index.data and estat_blog.data
                        group by  extract(MONTH from estat_index.data), extract(MONTH from estat_blog.data)
                        ORDER BY estat_index.data ASC*/

                        /*$sql      = "SELECT DISTINCT extract(MONTH from estat_index.data)  Mes, extract(YEAR from estat_index.data)  Ano, COUNT(DISTINCT estat_index.data) AS id_estat_index
                        FROM estat_index
                        WHERE estat_index.data
                        group by  extract(MONTH from estat_index.data)
                        ORDER BY estat_index.data ASC";*/

                        $sql      = "SELECT DISTINCT extract(MONTH from DATA)  Mes, extract(YEAR from DATA)  Ano, COUNT(CASE WHEN n_estatic_blog = 1 then 0 end) Blog,COUNT(CASE WHEN n_estatic_index = 1 then 0 end) Pagprincipal, COUNT(CASE WHEN n_estatic_curso = 1 then 0 end) Cursos,COUNT(CASE WHEN n_estatic_services  = 1 then 0 end) Services
                          FROM estatisticas
                          WHERE data
                          group by  extract(MONTH from data)
                          ORDER BY data ASC";



                        $consulta = mysqli_query($conn, $sql);
                         
                        if ($consulta->num_rows >= 1) {?>
                     <table style="width: 100%;">
                        <tr>
                           <th>Ano</th>
                           <th>Mês</th>
                           <th>Blog</th>
                           <th>Index</th>
                           <th>Cursos</th>
                           <th>Serviços</th>
                        </tr>
                        <?php while($row = $consulta->fetch_assoc()) { ?>
                        <tr>
                           <td><?php echo $row["Ano"] ?></td>
                           <td><?php echo $row["Mes"] ?></td>
                           <td><?php echo $row["Blog"] ?></td>
                           <td><?php echo $row["Pagprincipal"] ?></td>
                           <td><?php echo $row["Cursos"] ?></td>
                           <td><?php echo $row["Services"] ?></td>
                        </tr>
                        <div style="clear: both;"></div>
                        <?php
                           }
                           echo "</table>";
                           } else {
                           echo "Sem Dados";
                           }
                           
                           ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
	<script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
      <script src="../jsx/sweetalert.js"></script>

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


  $('[name=img_btn_trash_post]').click(function(event){
              event.preventDefault();
             const idpost = event.target.id;
         
             $.post('del_post.php', {
              phpidpost : idpost
            }, function (data) {
          
              
          
                $('.mostrar').html(data);

                setTimeout(location.reload.bind(location), 3000);
          
              
            });
         
           });
  
 
  
});
</script>
</body>
</html>

