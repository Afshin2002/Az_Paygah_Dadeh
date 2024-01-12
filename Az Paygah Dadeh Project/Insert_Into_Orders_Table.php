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
$OPD = $_GET['Order_Payment_Date'];
$OSF = $_GET['Order_Shipping_Fee'];
$OSD = $_GET['Order_Shipping_Date'];
$OSA = $_GET['Order_Shipping_Address'];
$OSCI = $_GET['Order_Shipping_City'];
$OSCO = $_GET['Order_Shipping_Country'];

//query
$sql = "INSERT INTO `orders`(
    `User_Forename`,
    `User_Surname`,
    `Order_Payment_Date`,
    `Order_Shipping_Fee`,
    `Order_Shipping_Date`,
    `Order_Shipping_Address`,
    `Order_Shipping_City`,
    `Order_Shipping_Country`
)
VALUES(
    '$UF',
    '$US',
    '$OPD',
    '$OSF',
    '$OSD',
    '$OSA',
    '$OSCI',
    '$OSCO'
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