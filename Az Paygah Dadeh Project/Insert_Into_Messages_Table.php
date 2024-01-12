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
$US = $_GET['User_Sorname'];
$MT = $_GET['Message_Text'];
$MD = $_GET['Message_Date'];
$MTI = $_GET['Message_Time'];
$MTY = $_GET['Message_Type'];
$MA = $_GET['Message_Attachment'];

//query
$sql = "INSERT INTO `messages`(
    `User_Forename`,
    `User_Sorname`,
    `Message_Text`,
    `Message_Date`,
    `Message_Time`,
    `Message_Type`,
    `Message_Attachment`
)
VALUES(
    '$UF',
    '$US',
    '$MT',
    '$MD',
    '$MTI',
    '$MTY',
    '$MA'
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