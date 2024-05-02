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
        $result = $mydb->SearchReqistrationNumber($conobj,"vaccinated",$message);

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
            echo("<th>Name </th><th>Gender </th> <th>Registration NO </th> <th>Registration Date </th> <th>Address</th><th>Hospital Name </th><th>Vaccine Name </th><th>Vaccinated Date </th>");

            foreach($result as $row){
                echo("<tr>");
                echo("<td>".$row['name']."</td>");
                echo("<td>".$row['gender']."</td>");
                echo("<td>".$row['nmbr']."</td>");
                echo("<td>".$row['registration']."</td>");
                echo("<td>".$row['address']."</td>");
                echo("<td>".$row['hospital']."</td>");
                echo("<td>".$row['vaccine']."</td>");
                echo("<td>".$row['vaccinated']."</td>");
                echo("</tr>");
            }
        
            echo("</table>");
        }
    }
    }
}

?>