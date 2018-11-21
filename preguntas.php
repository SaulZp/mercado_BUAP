<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <?php include './inc/link.php'; ?>
    <script>
function mostrar(enla) {
  obj = document.getElementById('oculto');
  obj.style.visibility = (obj.style.visibility == 'hidden') ? 'visible' : 'hidden';
}
</script>
<style type="text/css">
h1{
    color: blue;
    padding: 40px;
     word-spacing: 20px;
    text-transform: uppercase;
    border: 1px solid #e0e1e1 !important;
}

h3{
  color: blue;
    
    padding: 5px;
    text-transform: uppercase;
    text-align: left;
   padding: 10px;
   
}

strong{
    color: black;
    
    padding: 5px;
    text-transform: uppercase;
    text-align: left;
    text-decoration: underline;
}

</style>

</head>
<body id="container-page-index">
    <?php include './inc/navbar.php'; ?>
   
    <section id="new-prod-index">
         <div class="container">

            <div class="page-header">
                <h1>Preguntas Frecuentes</h1>
            </div>

 <p><h3>¿Qué formas de pago puedo aprovechar para realizar mi compra?</h3></p>

    <p> <strong>Los metodos de pago dependen del vendedor, pueden ser depositos bancarios, transferencias o pagos en efectivo. </strong></p>
 
<p><h3>¿Cómo se realizan las entregas?</h3></p>

    <p><strong>Se hacen personalmente dentro de CU.</strong></p>

<p><h3>¿Cuánto tarda en llegar el pedido?</h3></p>

    <p><strong> El tiempo de entrega dependerá de la persona que vende el producto.</strong></p>

<p><h3>¿Cuál es el plazo para realizar un cambio?</h3></p>

<p><strong> Puedes solicitar un cambio hasta 15 días luego de realizada la compra.</strong></p>

<p><h3>¿Qué debo hacer si el producto no llega en buen estado?</h3></p>

<p><strong> Ponte en contacto con nosotros a bshop@hotmail.com.</strong></p>

                            
<a href="#" onclick="mostrar(this); return false" /> <h3>¿Aun tienes alguna duda?, ve nuestro video</h3></a>
<div id="oculto" style="visibility:hidden">
<a href="https://drive.google.com/open?id=1jpol3jotdd2v92XOGT5b_gRsNwr2CHa4" class="social-icon all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Introduccion">
            <img src="assets/icons/video.png">

</div>
 <a href="index.php" class="btn btn-primary btn-sm">regresar al inicio</a>
         
 
</div>
    </section>
    <section id="reg-info-index">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 text-center">
                   <article style="margin-top:20%;">
                        <p><i class="fa fa-users fa-4x"></i></p>
                        <h3>Registrate</h3>
                        <p>Registrese y hagase cliente de <span class="tittles-pages-logo">B.Shop</span> para acceder a la plataforma creada por alumnos de la FCC y consumir productos 100% BUAP.</p>
                        <p><a href="registration.php" class="btn btn-info btn-block">Registrarse</a></p>   
                   </article>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <img src="assets/img/Laptops.jpg" alt="Smart-TV" class="img-responsive">
                </div>
            </div>
        </div>
    </section>
    
            
            </div>
        </div>
    </section>
    <?php include './inc/footer.php'; ?>
</body>
</html>