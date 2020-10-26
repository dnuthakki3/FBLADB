<?php
include("serv/loginserv.php"); // Include loginserv for checking username and password
?>

<!doctype html>
<html>
  <head>

    <title>Login Page</title>
    <meta charset="UTF-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/login.css">

  </head>

  <body>
    <h1>Advisor Login</h1>

    <!--Login form creation-->
    <div class="login">
        <form action="" method="post">
          <!--Username box-->
          <input type="text" placeholder="Username" id="user" name="user"><br/><br/>
          <!--Password box-->
          <input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
          <!--Submit button-->
          <input type="submit" value="Login" name="login">
   <!-- Image -->
   <img src="css/gafbla.jpg" class="logo">
   <!-- Error Message -->
   <span><?php echo $error; ?></span>

  </body>
</html>
