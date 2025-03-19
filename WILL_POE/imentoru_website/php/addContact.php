<?php
include("../database/connection.php");
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$province = $_POST['province'];
$message = $_POST['message'];
$date_reg = date('Y-m-d H:i:s');

$sql = "INSERT INTO contact (name, phone, email, subject, province, message) VALUES ('$name', '$phone', '$email', '$subject', '$province', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "contact created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

