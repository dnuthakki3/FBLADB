<?php
include("serv/updateserv.php"); // Include updateserv for updating data
?>

<!doctype html>
<html>
  <head>

    <title>Member Information Page</title>
    <meta charset="UTF-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/form.css">

  </head>

  <body>
    <!--navigation tool to get back to the main page-->
    <ul>
      <li> <a href="main.html">Main Page</a> </li>
    </ul>

    <!--Member update form creation-->
    <div class="memberform">
        <form action="" method="post" style="text-align:center;">
          <!--Student ID box-->
          <input type="text" placeholder="6 Digit Student ID" id="sid" name="sid"><br/><br/>
          <!--Last name box-->
          <input type="text" placeholder="Last Name" id="l_name" name="l_name"><br/><br/>
          <!--First name box-->
          <input type="text" placeholder="First Name" id="f_name" name="f_name"><br/><br/>
          <!--Grade level box-->
          <input type="text" placeholder="Grade Level" id="grade" name="grade"><br/><br/>
          <!--Competitive event box-->
          <input type="text" placeholder="Competitive Event" id="c_event" name="c_event"><br/><br/>
          <!--enter button-->
          <input type="submit" value="Enter" name="enter">

    <!-- Error Message -->
    <span><?php echo $message; ?></span>

  </body>
</html>
