<!DOCTYPE html>
<html>
    <head>

     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

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
/*body {
  background-color: #FFFFFF;
  background-image:url(motologin.jpg);
  background-size:1600px 900px
}*/    
  label {
    color: #FFFFFF;

  }
    body {
	background-color: #FC9;
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
                <a class="navbar-brand topnav" href="index.html">INFRACCIONES</a>
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
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav></br></br></br></br>
   

  <div class="container">
    <form id="ingreso" action="servicios.php" method="POST">
      <div class="row">
        <div class="col-xs-6 col-md-4">
          <div class="form-group">
              <label>CODIGO DE INFRACCION</label>
              <input type="text" class="form-control" name="descripcion" placeholder="escriba aqui lo que necesite buscar sobre su infraccion">
            </div>
            
            <div class="col-xs-6 col-md-4">          
        </div>
        </div>
        <div class="col-xs-6 col-md-4">
          <button id="btmregistro" type="submit" class="btn btn-info">BUSCAR</button>
        </div>
        <div class="col-xs-12 col-md-12">
          <?php
             require('conexion.php');//esto esta re mal 
              $descripcion=false;
              if (isset($_POST['descripcion'])) {
                $descripcion = $_POST['descripcion'];
                $stmt = $conexion->prepare("SELECT c.TIPO,c.DESCRIPCION, v.VALOR FROM comparendo c join valor v ON v.ID = c.ID_VALOR WHERE `tipo` LIKE '".$descripcion."'");
                $stmt->execute();//EJECUTE ESA CONSULAT en donde PHPMYADMIN dejemwe ver la ta EJECUTE
                //SELECT c.TIPO,c.DESCRIPCION, v.VALOR FROM comparendo c join valor v ON v.ID = c.ID_VALOR WHERE `tipo` LIKE 'A 2' SE DAÑO EL PDF COMO SE LE QUITAN LOS SIMBOLOS TOCA MANUAL A NO 
                $resultado = $stmt->fetchAll();
                if ($resultado) {
                  echo'<table class="table table-bordered">';
                  foreach ($resultado as $value) {
                        echo'<tr><td>'.$value['TIPO'].'</td>
                              <td>'.utf8_encode($value['DESCRIPCION']).'</td>
                            <td>'.$value['VALOR'].'</td></tr>';
                  }
                  echo'</table>';
                }else{
            $descripcion=false;           
                }
              } 
          ?>
        </div>
      </div>
    </form>
    <?php if ($descripcion): ?>
            <a href="Generacion.php?descripcion=<?php echo $descripcion; ?>" target="_back" class="btn btn-info">IMPRIMIR VALOR DE TU INFRACCION EN PDF</a>
    <?php endif ?>  
  </div>

    
    
    </body>
</html>


