<?php
include '../DataBase/myDB.php';

$foundMessage = $numOfDataFound=$message=$messageErr="";

if(isset($_REQUEST['searchBox'])){

    //validation SearchBox, 
    if(empty($_REQUEST['searchBox'])){
        $messageErr = "Blank Search is Invalid !";
    }else{
        $message =  $_REQUEST['searchBox'];
        // DataBase Work, 
        $myDB = new Model();
        $connObj = $myDB->OpenConn();
        $result = $myDB->SearchSupplyReport($connObj,"addsupplyreport",$message);

    if($result){
        $numOfDataFound = $_REQUEST['searchBox']." is found :  ". mysqli_num_rows($result)." times.";
        if(mysqli_num_rows($result)==0){
            $numOfDataFound = $message." Data is not found!";
        }

         // Show All Data from Data-base, 
         function getShowSearchData($result){
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

    }
    }
}


?>