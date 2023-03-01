<?php
// connect to the database
include_once("./config/mydb.php");
$conn = connectionDB();
//method to retrieve employee data from the database
function viewEmployee() {
    global $conn; // to access the global variable $conn

    $sql = "SELECT employee_name,supervisor_name, employee_phone, employee_email,employee_address FROM employee_details";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["employee_name"]."</td><td>".$row["supervisor_name"]."</td><td>".$row["employee_phone"]."</td><td>".$row["employee_email"]."</td><td>".$row["employee_address"]."</td></tr>";
        }
    } else {
        echo "0 results";
    }
}
?>
