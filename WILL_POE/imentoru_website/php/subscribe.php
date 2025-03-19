<?php
$server = "localhost";
$user = "root";
$password = "";
$dbName = "imentoru";

$conn = new mysqli($server, $user, $password, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$date_reg = date('Y-m-d H:i:s');

$sql = "INSERT INTO newsletter (email, date_reg) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $date_reg);

if ($stmt->execute()) {
    echo "Successfully subscribed";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();
?>