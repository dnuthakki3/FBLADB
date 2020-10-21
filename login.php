<?php
include("loginserv.php"); // Include loginserv for checking username and password
?>

<!doctype html>
<html>
  <head>

    <meta charset="UTF-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Login Page</title>

  </head>

  <body>

    <div class="login">
      <h1 align="center">Login</h1>
        <!--Login form creation-->
        <form action="" method="post" style="text-align:center;">
          <!--Username box-->
          <input type="text" placeholder="Username" id="user" name="user"><br/><br/>
          <!--Password box-->
          <input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
          <!--Submit button-->
          <input type="submit" value="Login" name="login">

   <!-- Error Message -->
   <span><?php echo $error; ?></span>

  </body>
</html>
