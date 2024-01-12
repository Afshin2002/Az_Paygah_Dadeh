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
$EF = $_GET['Emploee_Forename'];
$ES = $_GET['Emploee_Surname'];
$EJT = $_GET['Emploee_Job_Title'];
$EE = $_GET['Emploee_Email'];
$EP = $_GET['Emploee_Phone_Number'];

//query
$sql = "INSERT INTO `emploees`(
    `Emploee_Forename`,
    `Emploee_Surname`,
    `Emploee_Job_Title`,
    `Emploee_Email`,
    `Emploee_Phone_Number`
)
VALUES(
    '$EF',
    '$ES',
    '$EJT',
    '$EE',
    '$EP'
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