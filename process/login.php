<?php
    session_start();
    include '../library/configServer.php';
    include '../library/consulSQL.php';
    error_reporting(0);

    sleep(2);
    $nombre=$_POST['nombre-login'];
    $clave=$_POST['clave-login'];
    $radio=$_POST['optionsRadios'];
    $claveC=md5($clave);
    if(!$nombre==""&&!$clave==""){
        $verUser=ejecutarSQL::consultar("select * from cliente where Nombre='$nombre' and Clave='$claveC'");
        $verAdmin=ejecutarSQL::consultar("select * from administrador where Nombre='$nombre' and Clave='$clave'");
        
        if($radio=="option1"){
            $UserC=mysql_num_rows($verUser);
            if($UserC>0){
                $_SESSION['nombreUser']=$nombre;
                $_SESSION['claveUser']=$clave;

                echo '<script> location.href="index.php"; </script>';
               // echo '<video src="assets/img/bshop.mp4" autobuffer autoloop loop controls poster="/assets/img/bshop.mp4"> class="center-all-contens"> autoplay muted loop</video>';
            }else{
                echo '<img src="assets/img/error.png" class="center-all-contens"><br>Error nombre o contraseña invalido';
            }
        }
        if($radio=="option2"){
            $AdminC=mysql_num_rows($verAdmin);
            if($AdminC>0){
                $_SESSION['nombreAdmin']=$nombre;
                $_SESSION['claveAdmin']=$clave;
                echo '<script> location.href="index.php"; </script>';
            }else{
              echo '<img src="assets/img/error.png" class="center-all-contens"><br>Error nombre o contraseña invalido'; 
            }
        }

    }else{
        echo '<img src="assets/img/error.png" class="center-all-contens"><br>Error campo vacío<br>Intente nuevamente';
    }