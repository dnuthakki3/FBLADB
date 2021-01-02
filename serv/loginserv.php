<?php
$error=''; //Variable to Store error message;
//checks to see if the login button was pressed
if(isset($_POST['login'])){
 //checks to see if username or password fields are blank
 if(empty($_POST['user']) || empty($_POST['pass'])){
   $error = "Username or Password is Blank";
 }

 else{
   //Define variables as the user input
   $uname_input=$_POST['user'];
   $pass_input=$_POST['pass'];
   $pass_hash=hash('sha256',$pass_input);
   //Establishing Connection with server by passing server_name, user_id and pass as a patameter
   $conn = mysqli_connect("localhost", "[username redacted]", "[password redacted]");
   //Selecting Database
   $db = mysqli_select_db($conn, "loginsystemfbla");
   //sql query to fetch information of registerd user and finds user match.
   $fetch_query = mysqli_query($conn, "SELECT * FROM Users WHERE pass='$pass_hash' AND user='$uname_input'");
   //sees if the query results in any rows being returned
   $validate_user = mysqli_num_rows($fetch_query);
      //sends the user to insert.php if a row is returned
      if($validate_user == 1){
        header("Location: main.html");
      }
      //returns an error if there is an incorrect username or password
      else{
        $error = "Username or Password is Invalid";
      }
 mysqli_close($conn); // Closing connection
 }
}

?>
