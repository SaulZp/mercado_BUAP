
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
                                      <br><H3 class='datos'> Nombre Completo: ".$datos['NombreCompleto']." ".$datos['Apellido']." <br> Direccion: ".$datos['Direccion']."<br>Correo-Electronico: ".$datos['Email'].
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
    <?php include './inc/footer.php'; ?>
</body>
</html>