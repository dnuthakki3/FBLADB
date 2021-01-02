<?php
    //Connect to database
    $conn = mysqli_connect("localhost", "root", "DnMacBook#!@1", "loginsystemfbla");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT sid, l_name, f_name, grade, c_event  FROM Members";
    $result = $conn->query($sql);
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
} else { echo "0 results"; }
$conn->close();
?>