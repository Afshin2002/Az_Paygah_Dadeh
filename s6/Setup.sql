CREATE DATABASE az_db_project;

CREATE TABLE Users (User_ID(int) AUTO_INCREMENT, User_Email varchar(50), User_Password varchar(20), User_Phone_Number varchar(20), User_Verification_code int, Deleted tinyint(1));

CREATE TABLE Messages (Message_ID int AUTO_INCREMENT, User_ID int, User_Forename varchar(15), User_Sorename varchar(15), Message text, Message_Date date, Message_Time time, Message_Type varchar(15), Message_Delivery tinyint(1), Message_Attachment varchar(300));

CREATE TABLE Products (Fish_ID int AUTO_INCREMENT, Fish_Species varchar(70), Fish_Available_Quantity int, Fish_Color varchar(10), Fish_Price varchar(10), Deleted tinyint(1));