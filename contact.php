<?php
include './library/configServer.php';
include './library/consulSQL.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Productos</title>
    <?php include './inc/link.php'; ?>
</head>
<body id="container-page-product">
    <?php include './inc/navbar.php'; ?>
    <section id="store">
       <br>
        <div class="container">
            <!--<div class="page-header">
              <h1>Tienda <small class="tittles-pages-logo">B.Shop</small></h1>
            </div>-->


           <h1>Contactanos <small class="tittles-pages-logo">BUAP SHOP</small></h1>


                    <p class="lead">
                       Para poder añadir un nuevo producto tendras que comunicarte con nosotros y lo puedes hacer de la siguiente manera:
                    </p>
                    <br>
      
      <div class="form-group">
        <div class="row">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-mobile"></i></div>
                                <p> 22224445 </p>
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-at"></i></div>
                               <p> B.Shop@hotmail.com </p>
                              </div>
                            </div>
                              <br>
                              <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                               <p> www.facebook.com/B.Shop </p>
                              </div>
                            </div>

            <a href="index.php" class="btn btn-primary btn-sm">regresar al inicio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include './inc/footer.php'; ?>
    <script>
        $(document).ready(function() {
            $('#store-links a:first').tab('show');
        });
    </script>
</body>
</html>