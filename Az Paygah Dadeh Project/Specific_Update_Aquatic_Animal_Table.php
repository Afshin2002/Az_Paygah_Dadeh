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

//query
$sql = "UPDATE
    `aquatic_animal`
SET
    `AA_Available_Quantity` = '$AAQ',
    `AA_Price` = '$AAP'
WHERE
    `AA_Species` = '$AAS'";
$result = $conn->query($sql);
if ($conn->query($sql) == TRUE) {
    echo "Record has been updated successfully.";
  }
  else {
    echo "Error updating record: " . $conn->error;
  }

//close the connection
$conn->close();
?>