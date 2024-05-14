<?php

include '../controller/UpdateVaccine.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Show Vaccine Information</title>
</head>

<link rel="stylesheet" href="../css/VaccineUpdate.css">
<body>
</body>
<h1 id="main_title">Update Vaccine Information</h1>
<?php
if(isset($_POST['submit'])){

    $v_name=$_POST['v_name'];
    $v_code=$_POST['v_code'];
    $m_by=$_POST['m_by'];
    $s_date=$_POST['s_date'];
    $p_date=$_POST['p_date'];
    $e_date=$_POST['e_date'];
    $quan=$_POST['quan'];
    $rate=$_POST['rate'];
    $t_ammount=$_POST['t_ammount'];
   
    $sqlQuery = "UPDATE vaccineregistration SET VaccineName='$v_name', ManufactureBy='$m_by', SupplyDate='$s_date', ProductionDate='$p_date', ExpiryDate='$e_date', Quantity='$quan', rate='$rate', TotalAmmount='$t_ammount' WHERE VaccineCode='$v_code'";
   
    $result = mysqli_query($conn, $sqlQuery);
    if(!$result){
        die("query failed".mysqli_error($conn));
    }
    else{
        header('location: ../view/VaccineSupplier.php');
    }
}


?>
<form action="" method="post">
    <input type="hidden" name="id" value= "<?php echo isset($row['VaccineCode']) ? $row['VaccineCode']: ''; ?>">
      <div class="from-group">
        <label for="v_name">Vaccine Name</label>
        <input type="text" name="v_name" class="from-control" value= "<?php echo isset($row['VaccineName']) ? $row['VaccineName'] : '';?>">
    </div>

    <div class="from-group">
        <label for="v_code">Vaccine Code</label>
        <input type="text" name="v_code" class="from-control" value= "<?php echo isset($row['VaccineCode']) ? $row['VaccineCode']: ''; ?>">
    </div>

    <div class="from-group">
        <label for="m_by">Manufacture By</label>
        <input type="text" name="m_by" class="from-control" value= "<?php echo isset($row['ManufactureBy']) ? $row['ManufactureBy'] : ''; ?>">
    </div>

    <div class="from-group">
        <label for="s_date">Supply Date</label>
        <input type="text" name="s_date" class="from-control" value= "<?php echo isset($row['SupplyDate']) ? $row['SupplyDate'] : '';?>">
    </div>

    <div class="from-group">
        <label for="p_date">Production Date</label>
        <input type="text" name="p_date" class="from-control" value= "<?php echo isset($row['ProductionDate']) ? $row['ProductionDate'] : '';?>">
    </div>

    <div class="from-group">
        <label for="e_date">Expiry Date</label>
        <input type="text" name="e_date" class="from-control" value= "<?php echo isset($row['ExpiryDate']) ? $row['ExpiryDate'] : '';?>">
    </div>

    <div class="from-group">
        <label for="quan">Quantity	</label>
        <input type="text" name="quan" class="from-control" value= "<?php echo isset($row['Quantity']) ? $row['Quantity'] : '';?>">
    </div>

    <div class="from-group">
        <label for="rate">Rate</label>
        <input type="text" name="rate" class="from-control" value= "<?php echo isset($row['rate']) ? $row['rate'] : '';?>">
    </div>

    <div class="from-group">
        <label for="t_amount">Total Amount</label>
        <input type="text" name="t_ammount" class="from-control" value= "<?php echo isset($row['TotalAmmount']) ? $row['TotalAmmount'] : '';?>">
    </div>
    <input type="submit" name ="submit" value="Update">
</form>

</html>
