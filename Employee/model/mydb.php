<?php
class Model
{

    function OpenCon()
    {
      $conn= new mysqli("localhost","root","","e_vaccine");
      return $conn;
    }

    function checklogin($conn,$table,$email,$pass){
      $sql = "SELECT email,password from $table where email = '$email' AND password ='$pass'";
      $result = $conn->query($sql);
      return $result;
    }

    function AddEmployee1($conn,$table, $name, $nid,$nationality,$email,$pass,$birth,$nmbr,$gender,$address)
    {
      $sql="INSERT INTO $table (name,nid, nationality, email, password,birthdate,nmbr,gender,address) VALUES 
      ('$name','$nid','$nationality','$email','$pass','$birth', '$nmbr','$gender','$address')";

      $result = $conn->query($sql);
      return $result;
    }

    function ShowEmployeeInformation($conn,$table)
    {
      $sql = "SELECT * FROM $table"; 

      $result = $conn->query($sql);
      return $result;
    }

    function SearchEmployeeNid($conn,$table,$searchData)
    {
      $sql = "SELECT * FROM $table WHERE nid LIKE '$searchData'";

      $result = $conn->query($sql);
      return $result;
    }

    function SearchEmployeeName($conn,$table,$searchData)
    {
      $sql = "SELECT * FROM $table WHERE name LIKE '$searchData'";

      $result = $conn->query($sql);
      return $result;
    }


    function DeleteEmployeeNid($conn,$table,$deleteData)
    {
      $sql = "DELETE FROM $table WHERE nid LIKE '$deleteData'";

      $result = $conn->query($sql);
      return $result;
    }


  function ShowEmployeeNid($conn,$table)
  {
      $sql = "SELECT * FROM $table";
      
      $result = $conn->query($sql);
      return $result;
  }

    function AddVaccine($conn,$table, $name,$gender,$nmbr,$registration,$address,$hospital,$vaccine,$vaccinated)
    {
      $sql="INSERT INTO $table (name, gender, nmbr, registration,address,hospital,vaccine,vaccinated) VALUES 
      ('$name','$gender','$nmbr','$registration','$address', '$hospital','$vaccine','$vaccinated')";

      $result = $conn->query($sql);
      return $result;
    }

    function ShowVaccinatedInformation($conn,$table)
    {
      $sql = "SELECT * FROM $table"; 

      $result = $conn->query($sql);
      return $result;
    }

    function SearchReqistrationNumber($conn,$table,$searchData)
    {
      $sql = "SELECT * FROM $table WHERE nmbr LIKE '$searchData'";

      $result = $conn->query($sql);
      return $result;
    }

    function SearchVaccinatedName($conn,$table,$searchData)
    {
      $sql = "SELECT * FROM $table WHERE name LIKE '$searchData'";

      $result = $conn->query($sql);
      return $result;
    }

    function DeleteRegistrationNumber($conn,$table,$deleteData)
    {
      $sql = "DELETE FROM $table WHERE nmbr LIKE '$deleteData'";

      $result = $conn->query($sql);
      return $result;
    }  

    public function UpdateVaccineName($conn, $table, $nmbr, $new_vaccine)
    {
      $sql = "UPDATE $table SET vaccine='$new_vaccine' WHERE nmbr='$nmbr'";
      $result = $conn->query($sql);
      return $result;
    }
  
    public function UpdateVaccinatedDate($conn, $table, $nmbr, $new_vaccinated)
  {
      $sql = "UPDATE $table SET vaccinated='$new_vaccinated' WHERE nmbr='$nmbr'";
      $result = $conn->query($sql);
      return $result;
  }

}

?>