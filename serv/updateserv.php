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
   $target_member_sid=$_POST['sid'];
   $new_member_l_name=$_POST['l_name'];
   $new_member_f_name=$_POST['f_name'];
   $new_member_grade=$_POST['grade'];
   $new_member_c_event=$_POST['c_event'];

   //Establishing Connection with server by passing server_name, user_id and pass as a patameter
   $conn = mysqli_connect("localhost", "root", "");
   //Selecting Database
   $db = mysqli_select_db($conn, "loginsystemfbla");
   //sql update statement to update the member's info in the table
   $insert = mysqli_query($conn, "UPDATE Members SET l_name = '$new_member_l_name', f_name = '$new_member_f_name', grade = $new_member_grade, c_event = '$new_member_c_event' WHERE sid = $target_member_sid");
   //sql query to check if the update statement worked
   $validate_update = mysqli_query($conn, "SELECT * FROM Members WHERE sid = $target_member_sid AND l_name ='$new_member_l_name' AND f_name ='$new_member_f_name' AND grade = $new_member_grade AND c_event = '$new_member_c_event'");
   //sees if the query results in any rows being returned
   $validate_result= mysqli_num_rows($validate_update);
      //checks to see if the insert returned any rows
      if($validate_result == 1){
        $message = "Member information updated successfully";
      }
      //returns an error if there is an incorrect username or password
      else{
        $message = "One of the fields entered is not in the right format, please try again";
      }
  mysqli_close($conn); // Closing connection
 }
}

?>
