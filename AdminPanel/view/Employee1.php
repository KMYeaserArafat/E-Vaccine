<?php
include '../model/myDB.php';

if(isset($_POST['input'])){
    $input = $_POST['input'];

    $query ="SELECT * FROM addemployee WHERE name LIKE '{$INPUT}%'";

    $result = mysqli_query($conn, $query);

    if(mysqli_num_roows($result)>0){
        <table class="table table-boraderd table-striped">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Name</th>
            <th>Nid</th>
            <th>Nationality</th>

            <th>email</th>
            <th>password</th>
            <th>birthdate</th>
            <th>Number</th>
            <th>Gender</th>
            <th>Address</th>
            
            </tr>
        </thead>
        </table>

        <tbody>
        <?php
        while($row = mysqli_fetch_assoc($result)){
         $serial=$row['serail'];
         $name=$row['name'];
         $nid=$row['nid'];
         $nationality=$row['nationality'];
         $email=$row['email'];
         $password=$row['password'];
         $birthdate=$row['birthdate'];
         $nmbr=$row['nmbr'];
         $gender=$row['gender'];
         $address=$row['address'];


         ?>

         <tr>

         <td><?php echo $serial;?></td>
         <td><?php echo $name;?></td>
         <td><?php echo $nid;?></td>
         <td><?php echo $nationality;?></td>
         <td><?php echo $email;?></td>
         <td><?php echo $password;?></td>
         <td><?php echo $birthdate;?></td>
         <td><?php echo $nmbr;?></td>
         <td><?php echo $gender;?></td>
         <td><?php echo $address;?></td>
        </tr>
        <?php


    }
    ?>
    </tbody
}
?>