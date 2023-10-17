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

// Create the message
$message_ID = "468291"
$user_forename = "هاشم"
$message_date = "1402-06-15"
$message_time = "17:09:45"
$message_type = "Regular"
$message_attachment = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2F.google&psig=AOvVaw2qVXNyJMn5-5K1pS-5PM2-&ust=1697049656230000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCLC4xOCQ7IEDFQAAAAAdAAAAABAE"
$message_delivery = "1"
$user_ID = "987359"
$user_surename = "کاظمی"
$message = "سلام. من یک مشکل در هنگام ثبت نام در وبسایت داشتم. ممنون میشم اگه راهنماییم کنید."
$deleted = "0"

$sql = "INSERT INTO Users (User_ID, User_Password, User_Email, User_PhoneNumber, User_verification_code, Deleted) VALUES ($message_ID, $user_forename, $message_date,$message_time ,$message_type, $message_attachment, $message_delivery, $user_ID, $user_surename, $message, $deleted)";

if (!$conn->query($sql)) {
    die("Error creating user: " . $conn->error);
}

// Close the connection
$conn->close();

echo "User created successfully!";

?>