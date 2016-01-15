<!DOCTYPE html>
<?php
  include('_include/configuration.php');
  include('_classes/conectar.php');
  include('_classes/crud.php');

  $con = new Coneccion($server,$user,$password,$dbname);
  $con->conectar();
  $crud = new Crud();
  
session_start();
if(isset($_SESSION['user_authorized'])) {session_destroy();}
  
  if(isset($_POST['join']))
  {
     $crud->setConsulta("select * from usuario where nick = '$_POST[user]' and password = '$_POST[password]' and estado = 'Activo'");
     $datos1=$crud->seleccionar($con->getConection());
     
      if($crud->getTuplas()>0)
      {
          if($datos1[0]['cambio_password']==0)
          {   
            $_SESSION['user_authorized'] = true;
            $_SESSION['nom'] = $datos1[0]['nombre'];;
            $_SESSION['apel'] = $datos1[0]['apellido'];
            $_SESSION['password'] = $datos1[0]['password'];
            $_SESSION['usuario'] = $datos1[0]['nick'];
            $_SESSION['rol'] = $datos1[0]['perfil'];
            $_SESSION['id'] = $datos1[0]['id'];
            $_SESSION['cambio'] = $datos1[0]['cambio_password'];
           ?>
         
            <script type="text/javascript">
               window.location.href = "pages/examples/usuarios.php";

            </script>
            
          <?php
          }
          else
          {
            $_SESSION['user_authorized'] = true;
            $_SESSION['nom'] = $datos1[0]['nombre'];;
            $_SESSION['apel'] = $datos1[0]['apellido'];
            $_SESSION['password'] = $datos1[0]['password'];
            $_SESSION['usuario'] = $datos1[0]['nick'];
            $_SESSION['rol'] = $datos1[0]['perfil'];
            $_SESSION['id'] = $datos1[0]['id'];
            $_SESSION['cambio'] = $datos1[0]['cambio_password'];
           ?>
                <script type="text/javascript">
               window.location.href = "pages/examples/cambio_password.php";

            </script>
            
          <?php
          }
      }

  }

  
?>


<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SM | IMPORTS</title>
    <!-- Tell the browser to be responsive to screen width -->
    <link href='imagenes/favicon-16x16.png' rel='icon' type='image/x-icon'/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><img src="imagenes/SMI_LOGO.png" height="137" width="260" alt="Logo SMI"></a>
      </div><!-- /.login-logo -->
 <?php
    if($crud->getMensaje()=='No hay registros asociados a la consulta.')
    {
  ?>    
    <div id="error_p" class="alert alert-danger alert-dismissable" >
                  <button type="button" class="close" id="close_error">&times;</button>
          Verifique su usuario y contraseña.                
      </div>
  <?php
    }
  ?>  
 
  
      <div class="login-box-body" style="margin-top:-5%">
        <p class="login-box-msg">Inicio de sesión</p>
        <form action="" method="post" id="fr_login" name="fr_login">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" id="user" name="user" placeholder="Usuario">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
          
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" id="join" name="join" class="btn btn-primary btn-block btn-flat">Ingresar</button>
            </div><!-- /.col -->
          </div>
        </form>

        



      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
   
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <script>
   
       //
      $("#close_error").bind('click',function(){
         $("#error_p").fadeOut('medium');
       });
       //
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });


      });
    </script>
  </body>
</html>
