<!DOCTYPE html>
<html>
    <head>

     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>INFRACCIONAPP</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <script src="js/jquery.js" type="text/javascript"></script> 


    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <script type="text/javascript">
    $(document).ready(function(){
      $("#btmingreso").click(function(){
        $('#ingreso').show();
        $('#registro').hide();
      });
      $("#btmregistro").click(function(){
        $('#registro').show();
        $('#ingreso').hide();
        
      });
    });
    </script>

<style type="text/css">
body {
  background-color: #FFFFFF;
  background-image:url(motologin.jpg);
  background-size:1600px 900px
}    
  label {
    color: #FFFFFF;

  }
    </style>
    </head>
    <body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="index.html">INFRACCIONAPP</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="login.php">INFRACCION</a>
                    </li> <li>
                        <a href="CODIGO.HTML">CODIGO DE TRANSITO</a>
                    </li>
                    <li>
                        <a href="SEÑALIZACION.HTML">SEÑALIZACION</a></li>
                        <li>
                        <a href="maps.html">UBICACION</a></li>
                </ul> 
                </ul>
                
          </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav></br>


             

                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <form id="ingreso" action="ingreso.php" method="POST">
                  <div class="row">
                    <div class="col-xs-6 col-md-4"></div>
                    <div class="col-xs-6 col-md-4">
                      <div class="form-group">
                        <label>USUARIO</label>
                        <input type="text" class="form-control" name="nombre" placeholder="&#128272;USUARIO">
                      </div>
                      <div class="form-group">
                        <label><h4>clave:</h4></label>
                        <input type="password" class="form-control" name="Contraseña" placeholder="&#128272;CLAVE">
                      </div> 
                      <div class="form-group">
                      <input class="btn btn-default" type="submit" value="INGRESO">
                      <button id="btmregistro" type="button" class="btn btn-info">REGISTRO</button>
                      </div>
                       <?php if (isset ($_GET['bandera'])) :?>
                        <div class="alert alert-danger" role="alert">
                          <a href="#" class="alert-link">Usuario no valido</a>
                        </div>
                      <?php endif ?>
                    </div>
                    <div class="col-xs-6 col-md-4"></div>
                  </div>
                </form>

                
                <form style="display: none;" action="servicios.php" id="registro" method="POST">
                  <div id="row">
                    <div class="col-xs-6 col-md-4"></div>
                      <div class="col-xs-6 col-md-4">
                       <div class="form-group">
                        <label><h4>NOMBRE:</h4></label>
                        <input type="text" class="form-control" name="nombre" placeholder="NOMBRE">
                      </div>
                      <div class="form-group">
                        <label><h4>APELLIDO:</h4></label>
                        <input type="text" class="form-control" name="apellido" placeholder="APELLIDO">
                      </div> 
                      <div class="form-group">
                        <label><h4>CORREO:</h4></label>
                        <input type="email" class="form-control" name="correo" placeholder="CORREO">
                      </div> 
                      <div class="form-group">
                        <label><h4>TELEFONO:</h4></label>
                        <input type="text" class="form-control" name="telefono" placeholder="TELEFONO">
                      </div> 
                      <div class="form-group">
                        <label><h4>DIRRECION:</h4></label>
                        <input type="text" class="form-control" name="dirreccion" placeholder="DIRRECION">
                      </div> 
                       <div class="form-group">
                        <label><h4>USUARIO:</h4></label>
                        <input type="text" class="form-control" name="usuario" placeholder="USUARIO">
                      </div> 
                       <div class="form-group">
                        <label><h4>CLAVE:</h4></label>
                        <input type="password" class="form-control" name="clave" placeholder="CLAVE">
                      </div> 
                      <div class="form-group">
                      <input class="btn btn-default" type="submit" value="GUARDAR">
                      <button id="btmingreso" type="button" class="btn btn-info">INGRESO</button>
                      </div>
                      
                      </div>
                        <div class="col-xs-6 col-md-4">  
                    
                  </div>
                </form>

    </body>
</html>
