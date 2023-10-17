<?php

// Connect to the MySQL database
$dbhost = "localhost";
$dbname = "az_db_project";
$dbuser = "root";
$dbpass = "";

$conn = new mysqli($dbhost, $dbname, $dbuser, $dbpass);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create the user
$user_id = "12345";
$user_password = "a1b2c36";
$user_email = "ali12@email.com"
$user_phonenumber = "09137896428"
$user_verification_code = "6459"
$deleted = "0"

$sql = "INSERT INTO Users (User_ID, User_Password, User_Email, User_PhoneNumber, User_verification_code, Deleted) VALUES ($user_id, $user_password, $user_email, $user_phonenumber, $user_verification_code, $deleted)";

if (!$conn->query($sql)) {
    die("Error creating user: " . $conn->error);
}

// Close the connection
$conn->close();

echo "User created successfully!";

?>