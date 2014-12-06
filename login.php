<?php
include("fondo.php");
include("Config/config.php");

if(isset($_POST['email']) && isset($_POST['password'])){
  $medicoCon = new t_medico_Controlador();
  $user = $medicoCon->IniciarSesion($_POST['email'], $_POST['password']);
  if($user){
    echo 'entre al sistema';
    header('Location: configSistema.php');
  } else {echo 'Contrasena invalida';}
}

?>

<!DOCTYPE html>

<html lang="en"><script async="" src="./index_files/analytics.js"></script><script id="tinyhippos-injected">if (window.top.ripple) { window.top.ripple("bootstrap").inject(window, document); }</script><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         
        <meta charset="utf-8">
        <title>Login</title>
        <meta name="generator" content="Bootply">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        
     
        <link rel="shortcut icon" href="http://www.bootply.com/bootstrap/img/favicon.ico">
        <link rel="apple-touch-icon" href="http://www.bootply.com/bootstrap/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="http://www.bootply.com/bootstrap/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="http://www.bootply.com/bootstrap/img/apple-touch-icon-114x114.png">
          <link rel="stylesheet" type="text/css" href="css/login.css">

        <link href="css/index.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  
    </head>
    
    
    
    <body background="img/fondo2.jpg" ; background-repeat: no-repeat; >
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-xs-0 col-sm-0 col-md-4 col-lg-4">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 well">
          <form action="login.php" method="POST">
            <div class="form-group">
              <h3 >Login</h3>
              
              <input type="text" class="form-control" name="email" id="email" placeholder="Email" required autofocus>
              <br>
              <input type="password" class="form-control" name="password" id="id_medico" placeholder="Password" required>
              <br>
                <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3">
                </div>
               <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
               </div>
            <button class="btn btn-lg btn-primary btn-block" > Ingresar</button>
      
            <button class="btn btn-lg btn-primary btn-block" > Cancel</button>
          </div>
        </form> 
  </div>
</div>
</div>        
   



        
        <script type="text/javascript" src="./index_files/jquery.min.js"></script>


        <script type="text/javascript" src="./index_files/bootstrap.min.js"></script>
        <script type="text/javascript" src="./index_files/bootstrap.min.js"></script>

        <script type="text/javascript" src="js/index.js"></script>


<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
    
</body>

</html>