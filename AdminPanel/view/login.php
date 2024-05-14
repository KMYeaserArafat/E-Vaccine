<?php

include '../controller/LoginController.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="../css/login.css">
</head>
<body>
  <div class="login-container">
    <h1>ADMIN</h1>
    <form action="DashBoard.php" method="post" >
      <input type="text" id="username" name="email" placeholder="email" required>
      <br>
      <input type="password" id="password" name="password" placeholder="Password" required>
      <br>
      <input type="submit" value="Login">
    </form>

  </div>
</body>
</html>
