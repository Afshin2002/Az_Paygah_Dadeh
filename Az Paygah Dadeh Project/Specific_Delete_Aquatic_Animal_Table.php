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

//query
$sql = "DELETE
FROM
    `aquatic_animal`
WHERE
    `AA_ID` = '$AAID'";
$result = $conn->query($sql);
if ($conn->query($sql) == TRUE) {
    echo "Record has been deleted successfully.";
  }
  else {
    echo "Error deleting record: " . $conn->error;
  }

//close the connection
$conn->close();
?>