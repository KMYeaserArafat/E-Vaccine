<?php

include '../model/mydb.php';

if(isset($_REQUEST["login"]))
{
    if(empty($_REQUEST['email']))
    {
        echo "Enter your valid email";
    }
    elseif(empty($_REQUEST['pass']))
    {
        echo "Enter your valid password";
    }
    else 
    {
       $mydbLogin = new Model();
       $conobj1 = $mydbLogin->OpenCon();
       $result1 = $mydbLogin->checklogin($conobj1,"addemployee",$_REQUEST['email'],$_REQUEST['pass']);

        if($result1->num_rows < 1)
        {
            echo "Invalid!";
        }
        else
        {
            echo "User Found!";
            header("Location:../view/dashboard.php");

        }
    }
}

?>