
<?php
include './library/configServer.php';
include './library/consulSQL.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Pedido</title>
    <?php include './inc/link.php'; ?>
    <link rel="stylesheet" type="text/css" href="css/comentario.css">
</head>
<body id="container-page-index">
    <?php include './inc/navbar.php'; ?>
    <section id="container-pedido">
        <div class="container">
            <div class="page-header">
              <h1>Perfil del Usuario</h1>
            </div>
            <br><br><br>
            <div class="row">
                    <div id="form-compra">
                            <?php
                              $user = $_SESSION['nombreUser'];
                                if(!$_SESSION['nombreUser']=="" &&!$_SESSION['claveUser']==""){
                                    
                                    $resultado = ejecutarSQL::consultar("SELECT * FROM cliente WHERE Nombre='".$user."'");
                                    if($datos=mysql_fetch_array($resultado)){
                                      echo'<img class="perfil" src="./img/person2.png"';
                                      echo "
                                      <br><H3 class='datos'> Nombre Completo: ".$datos['NombreCompleto']." ".$datos['Apellido']." <br><br> Direccion: ".$datos['Direccion']."<br><br>Correo-Electronico: ".$datos['Email']."<br><br>Numero Telefonico: ".$datos['Telefono'].
                                      "</H3>";
                                    }
                                }else{
                                  header('location: localhost/mercado_BUAP/index.php');
                                }
                            ?>
                            <div class="ResForm" style="width: 100%; text-align: center; margin: 0;"></div>
                    </div>                    
            </div>
        </div>
    </section>
    
            <div class="">
                        
                        <div class="panel panel-info">
                            <div class="panel-heading text-center"><i class="fa fa-refresh fa-2x"></i><h3>Actualizar datos</h3></div>
                          <div class="table-responsive">
                              <table class="table table-bordered">
                                  <thead class="">
                                      <tr>
                                          <th class="text-center">Nombre</th>
                                          <th class="text-center">Apellidos</th>
                                          <th class="text-center">Direccion</th>
                                          <th class="text-center">Telefono</th>
                                          <th class="text-center">Email</th>
                                          <th class="text-center">Opcion</th>
                                          
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $user = $_SESSION['nombreUser'];
                                        $productos=  ejecutarSQL::consultar("select * from cliente where Nombre='".$user."'");
                                        $upr=1;
                                        while($prod=mysql_fetch_array($productos)){
                                            echo '
                                                  <div id="update-product">
                                                  <form method="post" action="process/updateClient.php" id="res-update-product-'.$upr.'">
                                                    <tr>
                                                        <td>
                                                          <input class="form-control" type="text" name="nombre" required="" value="'.$prod['NombreCompleto'].'">
                                                        </td>
                                                        <td>
                                                          <input class="form-control" type="text" name="apellido" maxlength="200" required="" value="'.$prod['Apellido'].'">
                                                        </td>
                                                        <td><input class="form-control" type="text" name="direccion" maxlength="30" required="" value="'.$prod['Direccion'].'"></td>
                                                        <td><input class="form-control" type="text" name="tel" maxlength="30" required="" value="'.$prod['Telefono'].'"></td>
                                                        <td><input class="form-control" type="text" name="email" maxlength="30" required="" value="'.$prod['Email'].'"></td>
                                                        <td class="text-center">
                                                            <button type="submit" class="btn btn-sm btn-primary button-UPR" value="res-update-product-'.$upr.'">Actualizar</button>
                                                            <div id="res-update-product-'.$upr.'" style="width: 100%; margin:0px; padding:0px;"></div>
                                                        </td>
                                                      </tr>
                                                      </form>
                                                      </div>'
                                                        ;
                                          }
                                      ?>
                                  </tbody>
                              </table>
                          </div>
                        </div>
                    </div>
</body>
</html>