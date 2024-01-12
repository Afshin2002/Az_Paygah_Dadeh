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
$UF = $_GET['User_Forename'];
$US = $_GET['User_Surname'];
$UE = $_GET['User_Email'];
$UP = $_GET['User_Password'];
$UPN = $_GET['User_Phone_Number'];
$UVC = $_GET['User_Verification_Code'];

//query
$sql = "INSERT INTO `Users`(
    `User_Forename`,
    `User_Surname`,
    `User_Email`,
    `User_Password`,
    `User_Phone_Number`,
    `User_Verification_Code`
)
VALUES(
    '$UF',
    '$US',
    '$UE',
    '$UP',
    '$UPN',
    '$UVC'
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