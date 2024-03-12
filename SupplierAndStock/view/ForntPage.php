<?php

include '../controller/LoginController.php';

//declear session variable, 
session_start();
echo $_SESSION['email'];


echo("Welcome Admin");


?>