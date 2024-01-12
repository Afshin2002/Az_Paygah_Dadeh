<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "az_db_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Variables
$AAID = $_GET['AA_ID'];
$AAP = $_GET['AA_Price'];
$QA = $_GET['Quantity'];
$OTP = $_GET['Order_Total_Price'];

//query
$sql = "INSERT INTO `order_details`(
    `AA_ID`,
    `AA_Price`,
    `Quantity`,
    `Order_Total_Price`
)
VALUES(
    '$AAID',
    '$AAP',
    '$QA',
    '$OTP'
)";
$result = $conn->query($sql);
if ($conn->query($sql) == TRUE) {
    echo "Record has been Inserted successfully.";
  }
  else {
    echo "Error inserting record: " . $conn->error;
  }

//close the connection
$conn->close();
?>