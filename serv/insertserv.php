<?php
$message=''; //Variable to store a message
//checks to see if the enter button was pressed
if(isset($_POST['enter'])){
 //checks to make sure there are no empty fields
 if(empty($_POST['sid']) || empty($_POST['l_name']) || empty($_POST['f_name']) || empty($_POST['grade']) || empty($_POST['c_event'])){
   $message = "One or more fields are not filled";
 }
 else{
   //Define user input as variables
   $member_sid=$_POST['sid'];
   $member_l_name=$_POST['l_name'];
   $member_f_name=$_POST['f_name'];
   $member_grade=$_POST['grade'];
   $member_c_event=$_POST['c_event'];

   //Establishing Connection with server by passing server_name, user_id and pass as a patameter
   $conn = mysqli_connect("localhost", "[username redacted]", "[password redacted]");
   //Selecting Database
   $db = mysqli_select_db($conn, "[database name redacted]");
   //sql insert statement to enter the user's input into the table
   $insert = mysqli_query($conn, "INSERT INTO Members VALUES ($member_sid, '$member_l_name', '$member_f_name', $member_grade, '$member_c_event')");
   //sql query to check if the insert statement worked
   $validate_insert = mysqli_query($conn, "SELECT * FROM Members WHERE sid=$member_sid AND l_name='$member_l_name' AND f_name='$member_f_name' AND grade=$member_grade AND c_event='$member_c_event'");
   //sees if the query results in any rows being returned
   $validate_result= mysqli_num_rows($validate_insert);
      //checks to see if the insert returned any rows
      if($validate_result == 1){
        $message = "Member information entered successfully";
      }
      //returns an error if there is an incorrect username or password
      else{
        $message = "One of the fields entered is not in the right format, please try again";
      }
  mysqli_close($conn); // Closing connection
 }
}

?>
