<?php 

include '../DataBase/myDB.php';


if(isset($_REQUEST['submit'])){
    if(empty($_REQUEST['email'])){
        echo("Email is Invalid !!");
    }elseif(empty($_REQUEST['password'])){
        echo("Password is Invalide !!");
    }else{
        $myDB = new Model();
        $conObj = $myDB->OpenConn();
        $result = $myDB->CheackLoginCredentials($conObj,"supplierregister",$_REQUEST['email'],$_REQUEST['password']);

        if($result->num_rows<1){
            echo("Invalid Login");
        }else{
            echo("User Found !");
            header("location:../view/ForntPage.php");
        }
    }
}

?>