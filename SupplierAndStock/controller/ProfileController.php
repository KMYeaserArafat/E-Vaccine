<?php 

session_start();

include '../DataBase/myDB.php';

$email = $_SESSION["Email"];


$myDB = new Model();
$conObj = $myDB->OpenConn();

$showResult = $myDB->showProfileData($conObj,"supplierregister",$email);
    function showInformation($result){
        echo("<table>");
        echo("<th>ID</th> <th>SupplierName</th> <th>Nationality</th> <th>NID NO</th> <th>Gender</th> <th>BirthDate</th>
        <th>PermanateAddres</th>  <th>Email</th> <th>PhoneNo</th> <th>UserName</th> <th>Password</th> <th>ConfirmPassword</th>
        <th>SupplierCompanyName</th> <th>TIN</th> <th>Tearms&Conditions</th> <th>Operation</th>");
    
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
            <td>$row[UserName]</td>
            <td>$row[Password]</td>
            <td>$row[ConfirmPassword]</td>
            <td>$row[SupplierCompanyName]</td>
            <td>$row[Tin]</td>
            <td>$row[TermsAndConditions]</td>
            <td><a href='UpdateInformation2.php?id=$row[ID]& suppliername=$row[SupplierName]& nationality=$row[Nationality]& 
            nid=$row[NidNo]& gender=$row[Gender]& birthdate=$row[BirthDate]& permanentaddress=$row[PermanentAddress]& email=$row[Email]& 
            phoneno=$row[PhoneNo]& username=$row[UserName]& password=$row[Password]& confirmpassword=$row[ConfirmPassword]&
            suppliercompanyname=$row[SupplierCompanyName]& tin=$row[Tin]& termsandconditions=$row[TermsAndConditions]'>Edit/Update</td>
            </tr>";
        }
    
        echo("</table>");
        
    }



?>