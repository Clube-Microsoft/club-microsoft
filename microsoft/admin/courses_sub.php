<?php require_once "links.php"; ?>
<!-- Site Title -->
<title>Sub Cursos</title>

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

    if (!$_SESSION["admin"]) {
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
                        Adicionar Sub Curso<br>
                    </span>

                    <div class="return_table js-tilt" id="Mostrar_cursos" data-tilt style="width: 100%">
                        <?php
                        $sql      = "SELECT sub_cursos.id_sub_curso, sub_cursos.nome_sub_curso, cursos.nome_curso
                        FROM (sub_cursos
                        INNER JOIN cursos ON sub_cursos.id_curso = cursos.id_curso)";
                        $consulta = mysqli_query($conn, $sql);

                        if ($consulta->num_rows > 0) {
                            while ($row = $consulta->fetch_assoc()) {
                                echo " <table><tr>
                                    <td style='width: 25%;'>" . $row["nome_curso"] . "</td>
                                    <td style='width: 25%;'>" . $row["nome_sub_curso"] . "</td>"; ?>
                                <td style='width: 25%;'>
                                    <input type="image" name="img_btn_edit_sub_curso" <?php echo "id='" . $row["id_sub_curso"] . "'" ?> src="../img/icons/edit.png" Class="icons_admin_trash" /></td>
                                <td style='width: 25%;'>
                                    <input type="image" name="img_btn_trash_sub_curso" <?php echo "id='" . $row["id_sub_curso"] . "'" ?> src="../img/icons/trash.png" Class="icons_admin_edit" />
                                </td>
                                </tr>
                                </table>
                            <?php
                        }
                    } else {
                        echo "Sem Dados";
                    }

                    ?>
                    </div>
                    <div class="login100-form validate-form" style="width: 100%">

                        <form enctype="multipart/form-data" action="add_course_sub.php" id="enviar_sub_Curso" method="Post">
                            <input type="text" name="txt_Id_sub_Curso" id="txt_Id_sub_Curso" style="display: none;">
                            <div class="wrap-input100 validate-input">
                                <?php
                                $sql1 = "SELECT * FROM cursos";
                                $result = mysqli_query($conn, $sql1);

                                echo "<select id='nome_curso' name='nome_curso' class='input100'>
                        <option value='0'>--->Cursos<---</option>";
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<option value='" . $row['id_curso'] . "'>" . $row['nome_curso'] . "</option>";
                                }
                                echo "</select>";
                                ?> <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-tag" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="wrap-input100 validate-input">
                                <input class="input100" type="text" name="txt_Titulo_sub_Curso" id="txt_Titulo_sub_Curso" placeholder="Sub-Curso">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fas fa-heading"></i>
                                </span>
                            </div>
                            <div class="wrap-input100 validate-input">
                                <textarea class="input100" name="txt_Texto_Pequeno_sub_Curso" id="txt_Texto_Pequeno_sub_Curso" placeholder="Texto"></textarea>
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="far fa-paragraph"></i>
                                </span>
                            </div>
                            <div class="wrap-input100 validate-input">
                                <input type="file" name="arquivo_sub_Curso" id="arquivo_sub_Curso" />
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fas fa-image"></i>
                                </span>
                            </div>
                            <?php
                            if (isset($_SESSION["produto_nao_enviado"])) :
                                ?>
                                <p>ERRO: Não enviada!</p>
                            <?php
                        endif;
                        unset($_SESSION["produto_nao_enviado"]);
                        ?>
                            <div class="mostrar"></div>
                            <div class="container-login100-form-btn">
                                <button type="submit" id="btn_form_sub_Curso" name="btn_form_sub_Curso" class="login100-form-btn">
                                    Enviar Curso
                                </button>
                        </form>
                    </div>
                    <form action="/" id="enviar_sub_Curso_edit">
                        <button type="submit" id="btn_form_sub_Curso_editar" name="btn_form_sub_Curso_editar" class="login100-form-btn" style="display: none;">
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
        $(document).ready(function() {
            $('[name=img_btn_trash_sub_curso]').click(function(event) {
                event.preventDefault();
                const idcurso = event.target.id;

                $.post('del_curse_sub.php', {
                    phpidcurso: idcurso
                }, function(data) {



                    $('.mostrar').html(data);

                    setTimeout(location.reload.bind(location), 3000);


                });

            });
        });
    </script>
</body>

</html>