# FBLADB
FBLA Database Files
This is all the code for my updateable database
For complete replication, download xAMP and using myphpadmin, create a database called loginsystemfbla with two tables, Users and Members. Users will store the information of the people who are allowed to login and the Members table will store the member's information inputed by those from the Users table.
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

login.css styles login.php.

form.css page styles both insert.php and update.php.

main.css styles the main.html page.

I have also included screenshots of each page so you can see how it looks.
