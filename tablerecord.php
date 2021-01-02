<!DOCTYPE html>
<html>
    <head>
        <title>Table with database</title>
        <meta charset="UTF-8">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/table.css">
    </head>
<body>
    <!--navigation tool to get back to the main page-->
    <ul>
      <li> <a href="main.html">Main Page</a> </li>
    </ul>
    <!--Table format-->
    <table>
        <tr>
            <!--Column header for each column in the database-->
            <th>ID</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Grade</th>
            <th>Competitive Event</th>
        </tr>
    <?php
        include("serv/tableserv.php"); // Script for retrieving information from the database
    ?>
</body>
</html>