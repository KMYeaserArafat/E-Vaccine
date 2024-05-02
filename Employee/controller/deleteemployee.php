<?php

include '../model/mydb.php';

$message = $data =  "";


function showData($result)
{
    echo("<table>");
    echo("<th>Name</th> <th>Nid No</th> <th>Nationality</th> <th>Email Address</th> <th>Password</th> <th>Date of Birth</th> <th>Contract Number</th> <th>Gender</th> <th>Address</th>");

    foreach($result as $row){
        echo("<tr>");
        echo("<td>".$row['name']."</td>");
        echo("<td>".$row['nid']."</td>");
        echo("<td>".$row['nationality']."</td>");
        echo("<td>".$row['email']."</td>");
        echo("<td>".$row['password']."</td>");
        echo("<td>".$row['birthdate']."</td>");
        echo("<td>".$row['nmbr']."</td>");
        echo("<td>".$row['gender']."</td>");
        echo("<td>".$row['address']."</td>");
        echo("</tr>");
    }

    echo("</table>");
}



if(isset($_REQUEST['delete'])){

    if(empty($_REQUEST['deleteDataBox'])){
        $message = "*Data is required!";
    }else{
        $data = $_REQUEST['deleteDataBox'];
         
        $mydb = new Model();
        $conobj = $mydb->OpenCon();
        $result1 = $mydb->DeleteEmployeeNid($conobj,"addemployee",$data);
        $result2 = $mydb->SearchEmployeeNid($conobj,"addemployee",$data);
        $result3 = $mydb->ShowEmployeeNid($conobj,"addemployee");

        $numberofData = mysqli_num_rows($result2);

        if($result1==TRUE){
            $message = "Data is Deleted..";
        }
        if($numberofData==0){
            $message = "Data is not Found!";
        }
    }
}

?>