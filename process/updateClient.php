<?php
include '../library/configServer.php';
include '../library/consulSQL.php';
error_reporting(0);
session_start();
sleep(5);

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$user = $_SESSION['nombreUser'];


if(consultasSQL::UpdateSQL("cliente", "NombreCompleto='$nombre',Apellido='$apellido',Direccion='$direccion',Telefono='$tel',Email='$email'", "Nombre='$user'")){
    echo '   
    <script>
        alert("Tus datos han sido actualizados correctamente");
        location.href="../perfil.php";
    </script>
 ';
}else{
    echo '
    <script>
        alert("Tus datos no se pudieron actualizar, intente de nuevo");
        location.href="../perfil.php"
    </script>
 ';
}