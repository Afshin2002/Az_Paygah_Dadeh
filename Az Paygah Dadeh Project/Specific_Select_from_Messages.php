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
$UFN = $_GET['User_Forename'];
$USN = $_GET['User_Surname'];

//query
$sql = "SELECT
`Message_ID`,
`User_ID`,
`User_Forename`,
`User_Surname`,
`Message_Text`,
`Message_Date`,
`Message_Time`,
`Message_Type`,
`Message_Delivery`,
`Message_Attachment`
FROM
`messages`
WHERE
`User_Forename` = '$UFN' AND `User_Surname` = '$USN'";
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