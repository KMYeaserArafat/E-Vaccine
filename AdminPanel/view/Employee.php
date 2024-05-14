<?php
include '../controller/viewEmployeeController.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Show Vaccine Information</title>
</head>
<link rel="stylesheet" href="../css/Supplier.css">
<body>
    
    <h1 id="main_title">Employee Information</h1>


       <div class="emp">
      <input type="text" id="text" name="src" placeholder="Search">
      <input type="submit"  id= "live_search" class='btn btn-success' value="Search">
      </div>
      
    <?php  
    if(isset($result) && $result->num_rows > 0){
        echo("<table class='container'>"); 
        echo("<tr><th>Vaccine Name</th><th>Serial</th><th>name</th><th>nid</th><th>Nationality</th><th>Email </th><th>Password</th><th>Birthdate</th><th> Number</th><th>Gender</th><th>Address</th><th>Actions</th><th>Actions</th></tr>"); 

        foreach($result as $row){
            echo("<tr>");
            echo("<td>".$row['serial']."</td>");
            echo("<td>".$row['name']."</td>");
            echo("<td>".$row['nid']."</td>");
            echo("<td>".$row['nationality']."</td>");
            echo("<td>".$row['email']."</td>");
            echo("<td>".$row['password']."</td>");
            echo("<td>".$row['birthdate']."</td>");
            echo("<td>".$row['nmbr']."</td>");
            echo("<td>".$row['gender']."</td>");
            echo("<td>".$row['address']."</td>");
            echo("<td><a href='EmployeeUpdate.php?serial=".$row['serial']."' class='btn btn-success'>Update</a></td>"); 
            echo("<td><a href='EmployeeDelete.php?serial=".$row['serial']."' class='btn btn-danger'>Delete</a></td>"); 
            
            echo("</tr>");
        }

        echo("</table>");
    } else {
        echo "No results found.";
    }
    ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script src="text/javascript">
    $(documents).ready(function(){
        $("#live_search").keyup(function(){
            var input = $(this).val();
            //alert(input);

            if(input != ""){
                $.ajax({
                    url:"Employee1.php",
                    method:"POST",
                    data:{input:input},

                    success:function(data){
                        $("#searchresult").html(data);
            }

        })
        else{
            $("#searchresult").css("display","none");
                    }
                })
            }
        }
    })

</body>

</html>
