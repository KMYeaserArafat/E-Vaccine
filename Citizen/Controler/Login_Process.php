<?php

include '../Layouts/MyDb.php';
session_start();
$message = "";

$myDB = new Model();
$conObj = $myDB->OpenConn();


if(isset($_REQUEST['submit'])){
    if(empty($_REQUEST['email']) && empty($_REQUEST['password'])){
        $message = "Enter Valid Email & Password !!";
        }
    elseif(empty($_REQUEST['email'])){
        $message = ("Email is Invalid !!");
    }
    elseif(empty($_REQUEST['password'])){
        $message = "Password is Invalide !!";
    }
    else{
        $result = $myDB->CheckLoginCredentials($conObj,"registration_information",$_REQUEST['email'],$_REQUEST['password']);

        if($result->num_rows<1){
            $message = "Invalid UserName or Password !";
        }else{
            $_SESSION["Email"] = $_REQUEST['email'];
            echo("User Found !");
            header("location:../View/Home.php");
        }
    }
}

?>
