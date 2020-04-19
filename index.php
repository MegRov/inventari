<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<body style="">
  <div class="content">

    <div class="content algn-items-center  ">
      <div class="login-page bg-warning">
        <link rel="stylesheet" href="libs/css/login.css">
        
      <p class="alert alert-success">Admin, contra: admin</p>
      <div class="text-center">
        <h1>Bienvenido</h1>
        <p>Iniciar sesión </p>
      </div>
      <?php echo display_msg($msg); ?>
    <form method="post" action="auth.php" class="clearfix ">
      <div class="form-group">
        <label for="username" class="control-label">Usario</label>
              <input type="name" class="form-control" name="username" placeholder="Usario">
        </div>
        <div class="form-group">
          <label for="Password" class="control-label">Contraseña</label>
            <input type="password" name= "password" class="form-control" placeholder="Contraseña">
          </div>
          <div class="form-group">
                <button type="submit" class="btn btn-info  pull-right">Entrar</button>
              </div>
     </form>
    </div>
   </div><!--End content-->
</div>
</body>
<?php include_once('layouts/footer.php'); ?>
