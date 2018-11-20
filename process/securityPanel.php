<?php
session_start();
error_reporting(E_PARSE);
error_reporting(0);
if (!$_SESSION['nombreAdmin'] == "") {
    
} else {
    header("Location: index.php");
    exit();
}