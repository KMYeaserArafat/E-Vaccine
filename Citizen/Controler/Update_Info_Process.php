<?php 

include '../Layouts/MyDb.php';

// Data-Base Connection, 
$myBD = new Model();
$conObj = $myBD->OpenConn();
$result1 = $myBD->ShowUserInformation($conObj,"registration_information");

// Show Supplier Information, 
function ShowData($result){
    echo("<table>");
    echo("<th>ID</th> <th>Name</th> <th>Father_Name</th> <th>Mother_Name</th> <th>DOB</th> <th>NID_Number</th>
    <th>Mobile_Number</th>  <th>Email</th> <th>Gender</th> <th>Profession</th> <th>Address</th> <th>Password</th>
    <th>ConfirmPassword</th> <th>TermsAndCondition</th> <th>Operation</th>");

    foreach($result as $row){
        echo "<tr>
        <td>$row[ID]</td>
        <td>$row[Name]</td>
        <td>$row[Father_Name]</td>
        <td>$row[Mother_Name]</td>
        <td>$row[DOB]</td>
        <td>$row[NID_Number]</td>
        <td>$row[Mobile_Number]</td>
        <td>$row[Email]</td>
        <td>$row[Gender]</td>
        <td>$row[Profession]</td>
        <td>$row[Address]</td>
        <td>$row[Password]</td>
        <td>$row[Confirm_Password]</td>
        <td>$row[TermsAndCondition]</td>
        <td><a href='UpdateInformation2.php?id=$row[ID]& name=$row[Name]& fname=$row[Father_Name]& 
        mname=$row[Mother_Name]& dob=$row[DOB]& nid=$row[NID_Number]& mob=$row[Mobile_Number]& email=$row[Email]& 
        gender=$row[Gender]& profession=$row[Profession]& add=$row[Address]& pass=$row[Password]& confirmPass=$row[Confirm_Password]& termsConditions=$row[TermsAndCondition]'>Edit/Update</td>
        </tr>";
    }

    echo("</table>");
}

$idErr = $nameErr = $fnameErr = $mnameErr = $dobErr = $nidErr = $mobErr = $emailErr = $genderErr = $profErr = $addErr = $passErr = $confirmPassErr = $termsConditionsErr ="";
$message = $id = $name = $fname = $mname = $dob = $nid = $mob = $email = $gender = $prof = $add = $pass = $confirmPass = $termsConditions = "";

// Update-Event, 
if(isset($_REQUEST['update'])){
    
    //Validation.........

    //Id, 
    if(empty($_REQUEST['id'])){
        $idErr = "*Id is required!";
    }else{
        $id = $_REQUEST['id'];
    }

    // Name
    if(empty($_REQUEST['name'])){
        $nameErr = "*Name is required!";
    }else{
        $name = $_REQUEST['name'];
    }

    // Father's Name
    if(empty($_REQUEST['fname'])){
        $fnameErr = "*Father's Name is required!";
    }else{
        $fname = $_REQUEST['fname'];
    }

    // Mother's Name
    if(empty($_REQUEST['mname'])){
        $mnameErr = "*Mother's Name is required!";
    }else{
        $mname = $_REQUEST['mname'];
    }

    // Date of Birth
    if(empty($_REQUEST['dob'])){
        $dobErr = "*Date of Birth is required!";
    }else{
        $dob = $_REQUEST['dob'];
    }

    // NID Number
    if(empty($_REQUEST['nid'])){
        $nidErr = "*NID Number is required!";
    }else{
        $nid = $_REQUEST['nid'];
    }

    // Mobile Number
    if(empty($_REQUEST['mob'])){
        $mobErr = "*Mobile Number is required!";
    }else{
        $mob = $_REQUEST['mob'];
    }

    // Email
    if(empty($_REQUEST['email'])){
        $emailErr = "*Email is required!";
    }else{
        $email = $_REQUEST['email'];
    }

    // Gender
    if(empty($_REQUEST['gender'])){
        $genderErr = "*Gender is required!";
    }else{
        $gender = $_REQUEST['gender'];
    }

    // Profession
    if(empty($_REQUEST['profession'])){
        $profErr = "*Profession is required!";
    }else{
        $prof = $_REQUEST['profession'];
    }

    // Address
    if(empty($_REQUEST['add'])){
        $addErr = "*Address is required!";
    }else{
        $add = $_REQUEST['add'];
    }

    // Password
    if(empty($_REQUEST['pass'])){
        $passErr = "*Password is required!";
    }else{
        $pass = $_REQUEST['pass'];
    }

    // Confirm Password
    if(empty($_REQUEST['confirmPass'])){
        $confirmPassErr = "*Confirm Password is required!";
    }else{
        $confirmPass = $_REQUEST['confirmPass'];
    }

    // Terms & Conditions
    if(empty($_REQUEST['termsConditions'])){
        $termsConditionsErr = "*Terms & Conditions must be accepted!";
    }else{
        $termsConditions = $_REQUEST['termsConditions'];
    }
    
    $result2 = $myBD->UpdateUserInformation($conObj,"registration_information",$id,$name,$fname,$mname,$dob,$nid,$mob,$email,$gender,$prof,$add,$pass,$confirmPass,$termsConditions);

    if($result2==TRUE){
        $message = "Data Updated!";
        header("Location:../View/UpdateInformation1.php");
    }else{
        $message = "Data is not updated!";
    }

}


?>