<?php
session_start();
error_reporting(0);
unset($_SESSION['producto']);
unset($_SESSION['contador']);
unset($_SESSION['sumaTotal']);
?>
<script>
    window.location = "../index.php";
</script>
