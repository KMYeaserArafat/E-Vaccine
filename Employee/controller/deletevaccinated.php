<?php

include '../model/mydb.php';

$message = $data =  "";


function showData($result)
{
    echo("<table>");
    echo("<th>Name </th><th>Gender </th> <th>Registration NO </th> <th>Registration Date </th> <th>Address</th><th>Hospital Name </th><th>Vaccine Name </th><th>Vaccinated Date </th>");

    foreach($result as $row){
        echo("<tr>");
        echo("<td>".$row['name']."</td>");
        echo("<td>".$row['gender']."</td>");
        echo("<td>".$row['nmbr']."</td>");
        echo("<td>".$row['registration']."</td>");
        echo("<td>".$row['address']."</td>");
        echo("<td>".$row['hospital']."</td>");
        echo("<td>".$row['vaccine']."</td>");
        echo("<td>".$row['vaccinated']."</td>");
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
        $result1 = $mydb->DeleteRegistrationNumber($conobj,"vaccinated",$data);
    }
}

?>