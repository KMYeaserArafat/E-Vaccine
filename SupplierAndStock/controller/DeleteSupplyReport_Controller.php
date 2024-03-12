<?php

include '../DataBase/myDB.php';

$message = $data =  "";

//Show Data, 
function showData($result){
    echo("<table>");
    echo("<th>SlipNo</th> <th>Date</th> <th>VaccineType</th> <th>Papers</th> <th>Company Name</th> <th>VatNo</th> <th>Quantity</th> <th>Rate</th> <th>TotalPrice</th>");

    foreach($result as $row){
        echo("<tr>");
        echo("<td>".$row['SlipNo']."</td>");
        echo("<td>".$row['Date']."</td>");
        echo("<td>".$row['VaccineType']."</td>");
        echo("<td>".$row['Papers']."</td>");
        echo("<td>".$row['SupplierCompanyName']."</td>");
        echo("<td>".$row['VatNo']."</td>");
        echo("<td>".$row['Quantity']."</td>");
        echo("<td>".$row['Rate']."</td>");
        echo("<td>".$row['TotalPrice']."</td>");
        echo("</tr>");
    }

    echo("</table>");
}


// Delete Data, 
if(isset($_REQUEST['delete'])){

    if(empty($_REQUEST['deleteDataBox'])){
        $message = "*Data is required!";
    }else{
        $data = $_REQUEST['deleteDataBox'];
        // Data Connection, 
        $myDB = new Model();
        $connobj = $myDB->OpenConn();
        $result1 = $myDB->DeleteSupplyReport($connobj,"addsupplyreport",$data);
        $result2 = $myDB->SearchSupplyReport($connobj,"addsupplyreport",$data);
        $result3 = $myDB->ShowSupplyReport($connobj,"addsupplyreport");

        $numberofData = mysqli_num_rows($result2);

        if($result1==TRUE){
            $message = "Data is Deleted..";
        }
        if($numberofData==0){
            $message = "Data is not Foud!";
        }
    }
}

?>