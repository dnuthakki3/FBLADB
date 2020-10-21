# FBLADB
FBLA Database Files
This is all the code for my updateable database
For complete functionality, download xAMP and using myphpadmin, create a database called loginsystemfbla with two tables, Users and Members. Users will store the information of the people who are allowed to login and update member information and the table Members will store the member's information
Here are the CREATE TABLE functions for each:
  
  CREATE TABLE Users(
  id INT PRIMARY KEY NOT NULL,
  user VARCHAR(11) NOT NULL,
  pass VARCHAR(11) NOT NULL,
  );
  
  CREATE TABLE Members(
  sid INT PRIMARY KEY NOT NULL,
  l_name VARCHAR(20) NOT NULL,
  f_name VARCHAR(20) NOT NULL,
  grade INT NOT NULL,
  c_event LONGTEXT NOT NULL
  );
  
login.php is where the front login page is made and consistst of a form.

loginserv.php is the script that connects to the database and validates the user input.

insert.php is where the member information page is made and consists of a form.

insertserv.php is the script that connects to the database and inserts the user input into the database.
