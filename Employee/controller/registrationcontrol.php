<?php
include '../model/mydb.php';

$name=$nid=$nationality=$email=$pass=$birth=$nmbr=$gender=$address=$haserror="";
$nameError=$nidError=$nationalityError=$emailError=$passError=$birthError=$nmbrError=$genderError=$addressError="";
$nidValidation=$emailValidation=$passValidation=$addressValidation="";

if(isset($_REQUEST["ADD"]))
{
  if(empty($_REQUEST['name']))
  {
    $nameError= "*Name Required";
  }
  else
  {
     $name=$_REQUEST['name'];
     
    if(!preg_match("/^[a-zA-z]*$/", $name))
    {
      $nameError= "Invalid Name!";
    }
  }

  if(empty($_REQUEST["nid"]))
  {
    $nidError = "*NID Required";
  }
  else
  {
    $nid = $_REQUEST["nid"];

    $nidValidation = strlen($nid);  
    if ($nidValidation > 12)
    {
      $nidError = "Invalid NID!";
    }
  }

  if(empty($_REQUEST["nationality"]))
  {
    $nationalityError = "*Enter your Nationality";
  }
  else
  {
    $nationality = $_REQUEST["nationality"];

    if(!preg_match("/^[a-zA-z]*$/", $nationality))
    {
      $nationalityError= "Invalid Nationality!";
    }
  }

  if(empty($_REQUEST["email"]))
  {
    $emailError = "*E-mail Required";
  }
  else
  {
    $email = $_REQUEST["email"];

    $emailValidation = !filter_var($email,FILTER_VALIDATE_EMAIL);  
    if($emailValidation)
    {
      $emailError = "Invalid E-mail!";
    
    }

  }

  if(empty($_REQUEST["pass"]))
  {
    $passError = "*Password Required";
  }
  else
  {
    $pass = $_REQUEST["pass"];

    $passValidation = strlen($pass);  
    if ($passValidation > 20)
    {
      $passError = "Invalid Pass!";
    }
  }

  if(empty($_REQUEST["birth"]))
  {
    $birthError = "*Birthdate Required";
  }
  else
  {
    $birth = $_REQUEST["birth"];
  }

  if(empty($_REQUEST["nmbr"]))
  {
    $nmbrError = "*Number Required";

  }
  else
  {
    $nmbr = $_REQUEST["nmbr"];

    if (!preg_match ("/^\d{11}$/", $nmbr))
    {
      $nmbrError = "Invalid Nmbr!";
    }
  }

  if(empty($_REQUEST["gender"]))
  {
    $genderError = "*Select your Gender";
  }
  else
  {
    $gender = $_REQUEST["gender"];
  }

  if(empty($_REQUEST["address"]))
  {
    $addressError = "*Address Required";
  }
  else
  {
    $address = $_REQUEST["address"];

    $addressValidation = strlen($address);  
    if ($addressValidation > 40)
    {
      $addressError = "Invalid Address!";
    }
  }

  if($haserror!=1)
  {
     $mydbadd = new Model();
     $conobj2 = $mydbadd->OpenCon();
     $result2=$mydbadd->AddEmployee1($conobj2,"addemployee",$_REQUEST["name"],$_REQUEST["nid"],$_REQUEST["nationality"],$_REQUEST["email"],$_REQUEST["pass"],$_REQUEST["birth"],$_REQUEST["nmbr"],$_REQUEST["gender"],$_REQUEST["address"]);
 
     if($result2===TRUE)
    {
       echo "Successfully Added!";
    }
   else
   {
      echo "Error Occurred".$conobj2->error;
   }
 }
   else
   {
      echo "Please complete the validation ";
   }

}
  
?>