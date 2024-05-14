<?php
include '../model/myDB.php';

session_start();

$login_error_message = "";

if(isset($_POST['submit'])) {

    if(empty($_POST['email']) || empty($_POST['password'])) {
        $login_error_message = "Email and Password are required!";
     

    } else {
        include '../model/myDB.php';

        $myDB = new Model();

        $conObj = $myDB->OpenConn();

        $result = $myDB->CheckLoginCredentials($conObj, "admin", $_POST['email'], $_POST['password']);

        if($result->num_rows > 0) {

            $_SESSION["Email"] = $_POST['email'];
            header("Location: ../view/DashBoard.php");
            exit();
        } else {
   
            $login_error_message = "Invalid Email or Password!";
        }
    }
}

?>
