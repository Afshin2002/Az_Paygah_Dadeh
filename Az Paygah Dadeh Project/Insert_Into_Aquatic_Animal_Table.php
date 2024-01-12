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
$AAS = $_GET['AA_Species'];
$AAQ = $_GET['AA_Available_Quantity'];
$AAP = $_GET['AA_Price'];

// Query
$sql = "INSERT INTO `az_db_project`.`aquatic_animal` (
    `AA_Species`,
    `AA_Available_Quantity`,
    `AA_Price`
)
VALUES(
    '$AAS',
    '$AAQ',
    '$AAP'
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