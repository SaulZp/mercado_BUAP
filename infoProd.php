
<?php
include './library/configServer.php';
include './library/consulSQL.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Productos</title>
    <?php include './inc/link.php'; ?>
    <link rel="stylesheet" type="text/css" href="css/comentario.css">
</head>
<body id="containeriner-page-product">
    <?php include './inc/navbar.php'; ?>
    <section id="infoproduct">
        <div class="container">
            <div class="row">
                <!--<div class="page-header">
                    <h1>Tienda <small class="tittles-pages-logo">B.Shop</small></h1>
                </div>-->
                <?php 
                	session_start();
                	$usuario = $_SESSION['nombreUser'];
                	//echo "<script>alert('Usuario:".$usuario."')</script>";
                    $CodigoProducto=$_GET['CodigoProd'];
                    $code = $_GET['CodigoProd'];
                    $productoinfo=  ejecutarSQL::consultar("select * from producto where CodigoProd='".$CodigoProducto."'");
                    while($fila=mysql_fetch_array($productoinfo)){
                        echo '
                            <div class="col-xs-12 col-sm-6">
                                <h3 class="text-center">Información de producto</h3>
                                <br><br>
                                <h4><strong>Nombre: </strong>'.$fila['NombreProd'].'</h4><br>
                                <h4><strong>Modelo: </strong>'.$fila['Modelo'].'</h4><br>
                                <h4><strong>Marca: </strong>'.$fila['Marca'].'</h4><br>
                                <h4><strong>Precio: </strong>$'.$fila['Precio'].'</h4>

                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <br><br><br>
                                <img class="img-responsive" src="assets/img-products/'.$fila['Imagen'].'">
                            </div>
                            <br><br><br>
                            <div class="col-xs-12 text-center">
                                <a href="product.php" class="btn btn-lg btn-primary"><i class="fa fa-mail-reply"></i>&nbsp;&nbsp;Regresar a la tienda</a> &nbsp;&nbsp;&nbsp; 
                                <button value="'.$fila['CodigoProd'].'" class="btn btn-lg btn-success botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp; Añadir al carrito</button>
                            </div>
                        ';
                    }


                    echo "<br><br>";
                    echo "<h3>Comentarios</h3>";
                    $resultado = ejecutarSQL::consultar("SELECT * FROM comentarios WHERE CodigoProducto='".$CodigoProducto."'");
                    while ($renglon=mysql_fetch_array($resultado)) {
                        echo"<hr><p>Comentario del usuario:[".$renglon['Id_Cliente']."]: ".$renglon['Comentario']."</p> ";
                    }

                    if(isset($_POST["comentario"])){
                        $comentario = $_POST["comentario"];
                        if($usuario==""){
                        	echo "<script>alert('Inicie sesion para dar su opinion')</script>";
                        }else{
                        	echo "<script>alert('Gracias por su comentario')</script>";
                        	consultasSQL::InsertSQL("comentarios","Id_Cliente,CodigoProducto, Comentario","'$usuario','$CodigoProducto', '$comentario'");
                        	echo "<script>location.href='product.php'</script>";
                        }
                        

                    }

                    echo '<form action="infoProd.php?CodigoProd='.$CodigoProducto.'" method="POST">
                        <textarea rows="4" cols="100" placeholder="Comenta aquí.." name="comentario"></textarea>
                        <button type="submit" class="agregar">Agregar Comentario</button>
                        </form>';


                ?>
            </div>
        </div>
    </section>

    <!--COMENTARIOS-->
    
   
</body>
</html>