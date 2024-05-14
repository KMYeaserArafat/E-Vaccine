<?php

include '../controller/UpdateEmployeeController.php';

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
    $add = $_POST['add'];
   
    $sqlQuery = "UPDATE addemployee SET name='$v_name', nid='$m_by', nationality='$s_date', email='$p_date', password='$e_date', birthdate='$quan', nmbr='$rate', gender='$t_ammount', address='$add'  WHERE serial='$v_code'";
   
    $result = mysqli_query($conn, $sqlQuery);
    if(!$result){
        die("query failed".mysqli_error($conn));
    }
    else{
        header('location: ../view/Employee.php');
    }
}


?>
<form action="" method="post">
    <input type="hidden" name="id" value= "<?php echo isset($row['VaccineCode']) ? $row['VaccineCode']: ''; ?>">
      <div class="from-group">
        <label for="v_name">Name</label>
        <input type="text" name="v_name" class="from-control" value= "<?php echo isset($row['name']) ? $row['name'] : '';?>">
    </div>

    <div class="from-group">
        <label for="v_code">Serial</label>
        <input type="text" name="v_code" class="from-control" value= "<?php echo isset($row['serial']) ? $row['serial']: ''; ?>">
    </div>

    <div class="from-group">
        <label for="m_by"> NID</label>
        <input type="text" name="m_by" class="from-control" value= "<?php echo isset($row['nid']) ? $row['nid'] : ''; ?>">
    </div>

    <div class="from-group">
        <label for="s_date"> Nationality</label>
        <input type="text" name="s_date" class="from-control" value= "<?php echo isset($row['nationality']) ? $row['nationality'] : '';?>">
    </div>

    <div class="from-group">
        <label for="p_date"> Email</label>
        <input type="text" name="p_date" class="from-control" value= "<?php echo isset($row['email']) ? $row['email'] : '';?>">
    </div>

    <div class="from-group">
        <label for="e_date"> Password</label>
        <input type="text" name="e_date" class="from-control" value= "<?php echo isset($row['password']) ? $row['password'] : '';?>">
    </div>

    <div class="from-group">
        <label for="quan">Birthdate	</label>
        <input type="text" name="quan" class="from-control" value= "<?php echo isset($row['birthdate']) ? $row['birthdate'] : '';?>">
    </div>

    <div class="from-group">
        <label for="rate">Number</label>
        <input type="text" name="rate" class="from-control" value= "<?php echo isset($row['nmbr']) ? $row['nmbr'] : '';?>">
    </div>

    <div class="from-group">
        <label for="t_amount">Gender</label>
        <input type="text" name="t_ammount" class="from-control" value= "<?php echo isset($row['gender']) ? $row['gender'] : '';?>">
    </div>
    <div class="from-group">
        <label for="add">Address</label>
        <input type="text" name="add" class="from-control" value= "<?php echo isset($row['address']) ? $row['address'] : '';?>">
    </div>
    <input type="submit" name ="submit" value="Update">
</form>

</html>
