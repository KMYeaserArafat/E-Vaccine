<?php 

include '../DataBase/myDB.php';

// Data-Base Connection, 
$myBD = new Model();
$conObj = $myBD->OpenConn();
$result1 = $myBD->ShowSupplierInformation($conObj,"supplierregister");

// Show Supplier Information, 
function ShowData($result){
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

$idErr = $supplierNameErr = $nidNoErr = $permanentAddressErr = $emailErr = $phoneNoErr = $userNameErr = $passwordErr = $confirmPasswordErr = $supplierCompanyNameErr = $tinNoErr =  "";
$message = $id = $supplierName = $nationality = $nidNo = $gender = $birthDate=$permanentAddress = $email = $phoneNo = $userName = $password = $confirmPassword = $supplierCompanyName = $tinNo = $termsAndConditions = "";

// Update-Event, 
if(isset($_REQUEST['update'])){
    
    //Validation,
    //Id, 
    if(empty($_REQUEST['id'])){
        $idErr = "*Id is required!";
    }else{
        $id = $_REQUEST['id'];
    }

    // Supplier Name, 
    if(empty($_REQUEST['supplierName'])){
        $supplierNameErr = "*SupplierName is required!";
    }else{
        $supplierName = $_REQUEST['supplierName'];
    }

    // Nationality, 
    $nationality = $_REQUEST['nationality'];

    //NID-No, 
    if(empty($_REQUEST['nidNo'])){
        $nidNoErr = "*NID No is required!";
    }else{
        $nidNo = $_REQUEST['nidNo'];
    }

    // Gender, 
    $gender = $_REQUEST['gender'];
   
    // BirthDate, 
    $birthDate = $_REQUEST['birthdate'];

    //Permanent-Address, 
    if(empty($_REQUEST['permanentAddress'])){
        $permanentAddressErr = "*Permanent Adrress is required!";
    }else{
        $permanentAddress = $_REQUEST['permanentAddress'];
    }

    //Email, 
    if(empty($_REQUEST['email'])){
        $emailErr = "*Email is required!";
    }else{
        $email = $_REQUEST['email'];
    }

    // Phone-No, 
    if(empty($_REQUEST['phoneNo'])){
        $phoneNoErr = "*Phone No is required!";
    }else{
        $phoneNo = $_REQUEST['phoneNo'];
    }

    //UserName, 
    if(empty($_REQUEST['userName'])){
        $userNameErr = "*User Name is required!";
    }else{
        $userName = $_REQUEST['userName'];
    }

    //Password, 
    if(empty($_REQUEST['password'])){
        $passwordErr = "*Password is required!";
    }else{
        $password = $_REQUEST['password'];
    }

    //Confirm-Password, 
    if(empty($_REQUEST['confirmPassword'])){
        $confirmPasswordErr = "*ConfirmPassword is required"; 
    }elseif($_REQUEST['confirmPassword']==$password){
        $confirmPassword = $_REQUEST['confirmPassword'];
    }

    //Supplier-Company-Name, 
    if(empty($_REQUEST['supplierCompanyName'])){
        $supplierCompanyNameErr = "*SupplierCompanyName is required!";
    }else{
        $supplierCompanyName = $_REQUEST['supplierCompanyName'];
    }

    //TIN-No, 
    if(empty($_REQUEST['tinNo'])){
        $tinNoErr = "*TIN No is required!";
    }elseif(strlen($_REQUEST['tinNo'])==12){
        $tinNo = $_REQUEST['tinNo'];
    }

    // Terms-And-Conditions, 
    $termsAndConditions = $_REQUEST['termsAndConditions'];

    $result2 = $myBD->UpdateSupplierInformation($conObj,"supplierregister",$id,$supplierName,$nationality,$nidNo,$gender,$birthDate,$permanentAddress,$email,$phoneNo,$userName,$password,$confirmPassword,$supplierCompanyName,$tinNo,$termsAndConditions);

    if($result2==TRUE){
        $message = "Data Updated!";
        header("Location:../view/UpdateInformation1.php");
    }else{
        $message = "Data is not updated!";
    }


}







?>