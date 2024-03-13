<?php   

include '../DataBase/myDB.php';


$myDB = new Model();
$conObj = $myDB->OpenConn();
$result1 = $myDB->ShowVaccineInformation($conObj,"vaccineregistration");

// Method of Show All Vaccine Information Data, 
function ShowData($result){
    echo("<table>");
    echo("<th>VaccineName</th> <th>VaccineCode</th> <th>ManufactureBy</th> <th>SupplyDate</th> <th>ProductionDate</th>
    <th>ExpiryDate</th> <th>Quantity</th> <th>Rate</th> <th>TotalAmmount</th> <th>Operation</th>");

    foreach($result as $row){
        echo "<tr>
        <td>$row[VaccineName]</td>
        <td>$row[VaccineCode]</td>
        <td>$row[ManufactureBy]</td>
        <td>$row[SupplyDate]</td>
        <td>$row[ProductionDate]</td>
        <td>$row[ExpiryDate]</td>
        <td>$row[Quantity]</td>
        <td>$row[rate]</td>
        <td>$row[TotalAmmount]</td>
        <td><a href='UpdateVaccineInformation2.php?vn=$row[VaccineName]& vc=$row[VaccineCode]& mb=$row[ManufactureBy]& sd=$row[SupplyDate]& pd=$row[ProductionDate]& ed=$row[ExpiryDate]'>Edit/Update</td>
        </tr>";
    }
    echo("</table>");
}

$vaccineName = $vaccineCode = $manufactureBy = $supplyDate = $productionDate = $expiryDate = $message =  "";
$vaccineNameErr = $manufactureByErr = $supplyDateErr = $productionDateErr = $expiryDateErr = "";

// Update Operation, 
if(isset($_REQUEST['update'])){

    //Validation
    //Vaccine-Name, 
    if(empty($_REQUEST['vaccineName'])){
        $vaccineNameErr = "*Vaccine Name is Required!";
    }else{
        $vaccineName = $_REQUEST['vaccineName'];
    }

    //Manufacture By, 
    if(empty($_REQUEST['manufactureBy'])){
        $manufactureByErr = "*Manufacture is required!";
    }else{
        $manufactureBy = $_REQUEST['manufactureBy'];
    }

    //SupplyDate, 
    if(empty($_REQUEST['supplyDate'])){
        $supplyDateErr = "*Supply Date is required!";
    }else{
        $supplyDate = $_REQUEST['supplyDate'];
    }

    //Production-Date,
    if(empty($_REQUEST['productionDate'])){
       $productionDateErr = "*Production Date is required!";
    }else{
        $productionDate = $_REQUEST['productionDate'];
    }

    //Expiry-Date, 
    if(empty($_REQUEST['expiryDate'])){
        $expiryDateErr = "*Expiry Date is required!";
    }else{
        $expiryDate = $_REQUEST['expiryDate'];
    }

    //Vaccine-Code, 
    $vaccineCode = $_REQUEST['vaccineCode'];

    
    $result2 = $myDB->UpdateVaccineInformation($conObj,"vaccineregistration",$vaccineName,$vaccineCode,$manufactureBy,$supplyDate,$productionDate,$expiryDate);

    if($result2==TRUE){
        $message = "Updated!";
        header("Location:../view/UpdateVaccineInformation1.php");
    }else{
        $message = "Not Updated..!";
    }


}




?>