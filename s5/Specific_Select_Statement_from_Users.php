<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbanme = "az_db_project";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbanme);

//query
$sql = "SELECT * FROM Users WHERE User_ID = '46983'";
$result = mysqli_query($conn, $sql);

// close the connection
mysqli_close($conn);
?>