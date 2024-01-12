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
$AAID = $_GET['Aquatic_Animal_ID'];

//query
$sql = "SELECT
`AA_ID`,
`AA_Species`,
`AA_Available_Quantity`,
`AA_Price`
FROM
`aquatic_animal`
WHERE
`AA_ID` = '$AAID'";
$result = $conn->query($sql);
if ($conn->query($sql) == TRUE) {
    echo "Selection was successful.";
  }
  else {
    echo "Selection failed. Error: " . $conn->error;
  }

//close the connection
$conn->close();
?>