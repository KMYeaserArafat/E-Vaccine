<?php  

include '../DataBase/myDB.php';


// Data-Base Connection, 
$myDB = new Model();
$conObj = $myDB->OpenConn();
$showResult = $myDB->ShowSupplyReport($conObj,"addsupplyreport");


// Show Data Function, 
function ShowSupplyReport($result){
    echo("<table>");
    echo("<th>SlipNo</th> <th>Date</th> <th>VaccineType</th> <th>Papers</th> <th>SupplierCompanyName:</th> <th>VatNo</th> <th>Quantity</th> <th>Rate</th> <th>TotalPrice</th>");

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

// Search-Event, 
if(isset($_REQUEST['search'])){
   
    if(empty($_REQUEST['searchBox'])){
        $searchMessage = "*Search Data is Required!";
    }else{
        $searchResult = $myDB->SearchSupplyReport($conObj,"addsupplyreport",$_REQUEST['searchBox']);

        if($searchResult==TRUE){
            $searchMessage = "Data is found,".mysqli_num_rows($searchResult)." Times";
        }
    }
}


?>