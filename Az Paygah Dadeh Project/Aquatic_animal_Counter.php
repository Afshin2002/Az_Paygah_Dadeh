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

//query
$sql = "SELECT
COUNT(aquatic_animal.AA_ID) AS 'Total number of aquatic_animal'
FROM
`aquatic_animal`;";
$result = $conn->query($sql);
if ($conn->query($sql) == TRUE) {
    echo "Query has been executed successfully.";
  }
  else {
    echo "Error executing query: " . $conn->error;
  }

//close the connection
$conn->close();
?>