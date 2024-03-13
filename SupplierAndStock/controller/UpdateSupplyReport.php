<?php

include '../DataBase/myDB.php';

// DataBase Connection, 
$myDB = new Model();
$connObj = $myDB->OpenConn();
$result1 = $myDB->ShowSupplyReport($connObj,"addsupplyreport");

// Show-All-Supply Report Method, 
function ShowAllSupplyReport($result){
    echo("<table>");
    echo("<th>SlipNo</th> <th>Date</th> <th>VaccineType </th> <th>Papers</th> <th>SupplierCompanyName</th> <th>VatNo</th>
    <th>Quantity</th> <th>Rate</th> <th>Total Ammount</th> <th>Operation</th>");

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
        <td><a href='UpdateSupplyReport2.php?sn=$row[SlipNo]& vt=$row[VaccineType]& scn=$row[SupplierCompanyName]& vn=$row[VatNo]'>Update</td>
        </tr>";
    }
    echo("</table>");
}

$slipNo = $vacctineType = $supplierComapanyName = $vatno = $message = "";
$slipNoErr = $vacctineTypeErr = $supplierComapanyNameErr = $vatnoErr = "";

// Update work, 
if(isset($_REQUEST['update'])){

    if(empty($_REQUEST['slipNo'])){
        $slipNoErr = "*SlipNo is required!";
    }else{
        $slipNo = $_REQUEST['slipNo'];
    }

    // Vaccine-Type, 
    if(empty($_REQUEST['vaccineType'])){
        $vacctineTypeErr = "*Vaccine Type is Required!";
    }else{
        $vacctineType = $_REQUEST['vaccineType'];
    }


    // Supplier-Company-Name, 
    if(empty($_REQUEST['suppliercompanyname'])){
        $supplierComapanyNameErr = "*Supplier Company Name is Required!";
    }else{
        $supplierComapanyName = $_REQUEST['suppliercompanyname'];
    }

    
    // Vat-No, 
    if(empty($_REQUEST['vatno'])){
        $vatnoErr = "*Vat No is required!";
    }elseif(strlen($_REQUEST['vatno'])==12){
        $vatno = $_REQUEST['vatno'];
    }

    $result2 = $myDB->UpdateSupplierReport($connObj,"addsupplyreport",$vacctineType,$supplierComapanyName,$vatno,$slipNo);
    // DataBase Connection, 
    if($result2==TRUE){
        $message = "Updated..";
        header("Location:../view/UpdateSupplyReport.php");
    }else{
        $message = "Not Updated!";
    }

}


?>