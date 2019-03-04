<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MOTOREPUETOS</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <script src="js/jquery.js" type="text/javascript"></script> 


    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    </head>
<style type="text/css">
body {
  background-image: url(FONDO_CONTAC.jpg);
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
                <a class="navbar-brand topnav" href="index.html">MOTOREPUESTOS</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="nosotros.php">Nosotros</a>
                    </li> <li>
                        <a href="login.php">clientes</a>
                    </li>
                    <li>
                        <a href="contactenos.php">Contactenos</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav></br>


              <marquee width="90%" scrolldelay="0"></br> 
                <h1 align="left"> <font color="White">INGRESA A NUESTROS SERVICIOS...</font></h1>
                 </marquee>
                 
      <form  action="datos_contacto.php" method="POST">
                  <div id="row">
                    <div class="col-xs-6 col-md-4"></div>
                      <div class="col-xs-6 col-md-4">
                       <div class="form-group">
                        <label><h4 align="center">NOMBRE:</h4></label>
                        <div align="center">
                          <input type="text" class="form-control" name="nombre" placeholder="NOMBRE">
                        </div>
                       </div>
                      <div class="form-group">
                        <label><h4 align="center">APELLIDO:</h4></label>
                        <div align="center">
                          <input type="text" class="form-control" name="apellido" placeholder="APELLIDO">
                        </div>
                      </div> 
                      <div class="form-group">
                        <label><h4 align="center">TELEFONO:</h4></label>
                        <div align="center">
                          <input type="text" class="form-control" name="telefono" placeholder="TELEFONO">
                        </div>
                      </div> 
                      <div class="form-group">
                        <label><h4 align="center">EMAIL:</h4></label>
                        <div align="center">
                          <input type="text" class="form-control" name="correo" placeholder="EMAIL">
                        </div>
                      </div> 
                        <div class="form-group">
                        <label><h4 align="center">MENSAJE:</h4></label>
                        <div align="center">
                          <input type="text" class="form-control" name="mensaje" placeholder="MENSAJE">
                        </div>
                        </div> 
                      <div class="form-group">
                        <div align="center">
                          <input class="btn btn-default" type="submit" value="GUARDAR">
                        </div>
                      </div>
                      
                      </div>
                        <div class="col-xs-6 col-md-4">  
                    
                  </div>
                </form>
</body>
</html>