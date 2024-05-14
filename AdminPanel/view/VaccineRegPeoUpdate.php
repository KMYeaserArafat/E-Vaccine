<?php

include '../controller/UpdateVaccineRegPeo.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Show Vaccine Information</title>
</head>

<link rel="stylesheet" href="../css/VaccineUpdate.css">
<body>
<h1 id="main_title">Update Vaccine Information</h1>
<?php
if(isset($_POST['submit'])){

    $v_name=$_POST['v_name'];
    $v_code=$_POST['v_code'];
    $m_by=$_POST['m_by'];
    $s_date=$_POST['s_date'];
    $p_date=$_POST['p_date'];
    $quan=$_POST['quan'];
    $rate=$_POST['rate'];
    $t_ammount=$_POST['t_ammount'];
   
    // Update the SQL query to use the vaccine_registration_people table
    $query = "UPDATE vaccine_registration_people SET Name='$v_name', Email='$m_by', Mobile_Number='$s_date', Manufacturer='$p_date', Quantity='$quan', Dose_Number='$rate', Hospital_Name='$t_ammount' WHERE NID_Number='$v_code'";
   
    $result = $conn->query($query);
    if(!$result){
        die("query failed".mysqli_error($conn));
    }
    else{
        header('location: ../view/VaccineRegPeople.php');
    }
}


?>
<form action="" method="post">
    <input type="hidden" name="id" value= "<?php echo isset($row['NID_Number']) ? $row['NID_Number']: ''; ?>">
      <div class="from-group">
        <label for="v_name">Name</label>
        <input type="text" name="v_name" class="from-control" value= "<?php echo isset($row['Name']) ? $row['Name'] : '';?>">
    </div>

    <div class="from-group">
        <label for="v_code">NID Number</label>
        <input type="text" name="v_code" class="from-control" value= "<?php echo isset($row['NID_Number']) ? $row['NID_Number']: ''; ?>">
    </div>

    <div class="from-group">
        <label for="m_by">Email</label>
        <input type="text" name="m_by" class="from-control" value= "<?php echo isset($row['Email']) ? $row['Email'] : ''; ?>">
    </div>

    <div class="from-group">
        <label for="s_date">Mobile Number</label>
        <input type="text" name="s_date" class="from-control" value= "<?php echo isset($row['Mobile_Number']) ? $row['Mobile_Number'] : '';?>">
    </div>

    <div class="from-group">
        <label for="p_date">Manufacturer</label>
        <input type="text" name="p_date" class="from-control" value= "<?php echo isset($row['Manufacturer']) ? $row['Manufacturer'] : '';?>">
    </div>

    <div class="from-group">
        <label for="quan">Quantity	</label>
        <input type="text" name="quan" class="from-control" value= "<?php echo isset($row['Quantity']) ? $row['Quantity'] : '';?>">
    </div>

    <div class="from-group">
        <label for="rate">Dose Number</label>
        <input type="text" name="rate" class="from-control" value= "<?php echo isset($row['Dose_Number']) ? $row['Dose_Number'] : '';?>">
    </div>

    <div class="from-group">
        <label for="t_amount">Hospital Name</label>
        <input type="text" name="t_ammount" class="from-control" value= "<?php echo isset($row['Hospital_Name']) ? $row['Hospital_Name'] : '';?>">
    </div>
    <input type="submit" name ="submit" value="Update">
</form>

</html>
