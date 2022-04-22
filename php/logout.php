<?php
session_start();
session_unset();//to end all the existing sesion
header('location:login.php');//after logout it will send the user in login page 
?>
