   
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

  <?php
  session_start();
    require_once "menu.php"; ?>

   	<div class="limiter">
		<div class="container-login100" style="height: 100vh;">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt style="width: 50%;">
					<img src="../img/logo/logo.png" style="width: 100%;">
				</div>

				<form class="login100-form validate-form" action="login.php" method="POST">
					<span class="login100-form-title">
						Admin Entrar
					</span>
					<?php
                    if(isset($_SESSION["nao_autenticado"])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Admin inválido.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION["nao_autenticado"]);
                    ?>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="nome" placeholder="Nome" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" name="pass" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Entrar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

   </body>
</html>