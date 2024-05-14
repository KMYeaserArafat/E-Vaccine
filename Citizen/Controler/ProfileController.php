
<?php 
session_start();
include '../Layouts/MyDb.php';

$email = $_SESSION["Email"];

$myDB = new Model();
$conObj = $myDB->OpenConn();

$showResult = $myDB->showProfileData($conObj,"registration_information",$email);
    function showInformation($result){
        echo("<table>");
        echo("<th>ID</th> <th>name</th> <th>fname</th> <th>mname</th> <th>dob</th> <th>nid</th>
        <th>mob</th>  <th>email</th> <th>gender</th> <th>profession</th> <th>add</th> <th>password</th>
        <th>confirmPassword</th> <th>tearmsConditions</th> <th>Operation</th>");
    
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
            gender=$row[Gender]& profession=$row[Profession]& password=$row[Password]& confirmPassword=$row[Confirm_Password]& termsConditions=$row[TermsAndCondition]'>Edit/Update</td>
            </tr>";
        }
    
        echo("</table>");
        
    }



?>