<?php

include '../DataBase/myDB.php';

$myDB= new Model();
$myCon = $myDB->OpenConn();
$showData = $myDB->ShowSupplyReport($myCon,"addsupplyreport");

function ShowAllReports($result){
    echo("<table>");
    echo("<th>Slip NO</th> <th>Date</th> <th>Vaccine Type</th> <th>Papers</th> <th>Supplier Company Name</th> <th>Vat NO</th>
    <th>Quantity</th> <th>Rate</th> <th>Total Price</th>");
    
    foreach($result as $row){
        echo "<tr>
        <td>$row[SlipNo]</td>
        <td>$row[Date]</td>
        <td>$row[VaccineType]</td>
        <td>$row[Papers]</td>
        <td>$row[SupplierCompanyName]</td>
        <td>$row[VatNo]</td>
        <td>$row[Quantity]</td>
        <td>$row[Rate]</td>
        <td>$row[TotalPrice]</td>
        </tr>";
    }
    echo("</table>");
}

$searchMessage = "";
// Search Oparation , 
if(isset($_REQUEST['searchBtn1'])){

    if(empty($_REQUEST['searchBox1'])){
        $searchMessage = "*Search Data is required!";
    }else{
        $searchData = $myDB->SearchSupplyReport($myCon,"addsupplyreport",$_REQUEST['searchBox1']);
        $searchMessage = $_REQUEST['searchBox1']." is found, ". mysqli_num_rows($searchData)." Times";
    }
}



?>