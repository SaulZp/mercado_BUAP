
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
              <h1>Historial de Pedidos Y Citas</h1>
            </div>
            <br><br><br>
            <div class="row">
                    <div id="form-compra">
                            <?php
                              //$user = $_SESSION['nombreUser'];
                                echo'<img class="coming" src="./img/coming.png"';
                              $nit  = ejecutarSQL::consultar("SELECT NIT FROM cliente WHERE Nombre='".$user."'");
                                if(!$_SESSION['nombreUser']=="" &&!$_SESSION['claveUser']==""){
                                    
                                    $resultado = ejecutarSQL::consultar("SELECT NumPedido FROM venta WHERE NIT='".$nit."'");
                                    $resultado2 = ejecutarSQL::consultar("SELECT CodigoProd FROM detalle WHERE NumPedido='".$resultado."'");
                                    $producto  = ejecutarSQL::consultar("SELECT NombreProd, Precio, vendedor FROM producto WHERE CodigoProd='".$resultado2."'");
                                    if($datos=mysql_fetch_array($producto)){
                                        echo 
                                        "<br><H3 class='datos'> Producto: ".$datos['NombreProd']." <br><br> Precio: ".$datos['Precio']."<br><br>Vendedor: ".$datos['vendedor']."</H3>";
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