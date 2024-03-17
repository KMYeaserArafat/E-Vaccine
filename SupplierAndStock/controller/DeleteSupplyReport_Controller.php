<?php  

include '../DataBase/myDB.php';

$myDB = new Model();
$conObj = $myDB->OpenConn();
$ShowResult = $myDB->ShowSupplyReport($conObj,"addsupplyreport");


function ShowSupplyReport($result){
    echo("<table>");
    echo("<th>SlipNo</th> <th>Date</th> <th>VaccineType</th> <th>Papers</th> 
    <th>SupplierCompanyName:</th> <th>VatNo</th> <th>Quantity</th> <th>Rate</th> <th>TotalPrice</th> <th>Operation</th>");

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
        <td><a href='DeleteSupplyReport2.php?sn=$row[SlipNo]'>Delete</td>
        </tr>";
    }


    echo("</table>");
}




?>