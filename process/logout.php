<?php
session_start(); 
session_unset();
error_reporting(0);
session_destroy();
header("Location: ../index.php"); 

