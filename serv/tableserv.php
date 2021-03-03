<?php
    //Connect to database
    $conn = mysqli_connect("localhost", "[username redacted]", "[password redacted]", "[database name redacted]");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //Select statement used to pull data from the table in the database
    $sql = "SELECT sid, l_name, f_name, grade, c_event  FROM Members";
    $result = $conn->query($sql);
    //Checks to see if there are any rows returned by the 
    if ($result->num_rows > 0) {
        // output data of each row
         while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row["sid"]. "</td>
                <td>" . $row["l_name"] . "</td>
                <td>" . $row["f_name"]. "</td>
                <td>" . $row["grade"]. "</td>
                <td>" . $row["c_event"]. "</td>
                  </tr>";
                }
              echo "</table>";
            } 
      else { 
          echo "0 results"; 
      }
    //closes the connection at the end
    $conn->close();
?>
