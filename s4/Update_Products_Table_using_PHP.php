<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbanme = "az_db_project";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbanme);

$Fish_ID = '265';
$Fish_Species = "Cat Fish";
$Fish_Available_Quantity = '500';
$Fish_Color = "Black";
Fish_Price = "30000T";
$Deleted = False;

//query
$sql = "UPDATE Products SET $Fish_Available_Quantity = '300' WHERE Fish_ID = 265;
$result = mysqli_query($conn, $sql);

//close connection
mysqli_close($conn);
?>