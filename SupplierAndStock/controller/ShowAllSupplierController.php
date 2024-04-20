
<?php 

include '../DataBase/myDB.php';

$myDB = new Model();
$conObj = $myDB->OpenConn();
$showResult = $myDB->ShowSupplierInformation($conObj,"supplierregister");

    function showInformation($result){
        echo("<table>");
        echo("<th>ID</th> <th>SupplierName</th> <th>Nationality</th> <th>NID NO</th> <th>Gender</th> <th>BirthDate</th>
        <th>PermanateAddres</th>  <th>Email</th> <th>PhoneNo</th> <th>SupplierCompanyName</th>");
    
        foreach($result as $row){
            echo "<tr>
            <td>$row[ID]</td>
            <td>$row[SupplierName]</td>
            <td>$row[Nationality]</td>
            <td>$row[NidNo]</td>
            <td>$row[Gender]</td>
            <td>$row[BirthDate]</td>
            <td>$row[PermanentAddress]</td>
            <td>$row[Email]</td>
            <td>$row[PhoneNo]</td>
            <td>$row[SupplierCompanyName]</td>
            </tr>";
        }
    
        echo("</table>");
    }

    $searchMessage = "";

    if(isset($_REQUEST['searchSupplierData'])){
        
        if(empty($_REQUEST['searchSupplier'])){
            $searchMessage = "*Search Data is Invalid!";
        }else{
            $searchData = $myDB->SearchSupplierData($conObj,"supplierregister",$_REQUEST['searchSupplier']);
            $searchMessage = $_REQUEST['searchSupplier']." is found, ". mysqli_num_rows($searchData)." Times";
        }
    }



?>