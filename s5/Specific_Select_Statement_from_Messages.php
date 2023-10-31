<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbanme = "az_db_project";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbanme);

//query
$sql = "SELECT * FROM Messages WHERE Messagage_ID = '2673'";
$result = mysqli_query($conn, $sql);

// close the connection
mysqli_close($conn);
?>