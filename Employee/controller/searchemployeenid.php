<?php
include '../model/mydb.php';

$foundMessage = $numOfDataFound=$message=$messageErr="";

if(isset($_REQUEST['searchBox'])){

    if(empty($_REQUEST['searchBox']))
    {
        $messageErr = "Blank Search is Invalid !";
    }
    else
    {
        $message =  $_REQUEST['searchBox'];
         
        $mydb = new Model();
        $conobj = $mydb->OpenCon();
        $result = $mydb->SearchEmployeeNid($conobj,"addemployee",$message);

    if($result)
    {
        $numOfDataFound = $_REQUEST['searchBox']." is found :  ". mysqli_num_rows($result)." times.";
        if(mysqli_num_rows($result)==0)
        {
            $numOfDataFound = $message." Data is not found!";
        }

         function getShowSearchData($result)
         {
            echo("<table>");
            echo("<th>Name</th> <th>Nid</th> <th>Nationality</th> <th>Email </th> <th>Password</th> <th>Date of Birth</th> <th>Number</th> <th>Gender</th> <th>Address</th>");

            foreach($result as $row){
                echo("<tr>");
                echo("<td>".$row['name']."</td>");
                echo("<td>".$row['nid']."</td>");
                echo("<td>".$row['nationality']."</td>");
                echo("<td>".$row['email']."</td>");
                echo("<td>".$row['password']."</td>");
                echo("<td>".$row['birthdate']."</td>");
                echo("<td>".$row['nmbr']."</td>");
                echo("<td>".$row['gender']."</td>");
                echo("<td>".$row['address']."</td>");
                echo("</tr>");
            }

            echo("</table>");
        }

    }
    }
}

?>