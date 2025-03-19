<?php
include("../database/connection.php");

$id_number = $_POST['id_number'];
$name = $_POST['name'];
$website = $_POST['website'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$partnership_type = $_POST['partnership_type'];
$province = $_POST['province'];
$program_found_lead = $_POST['program_found_lead'];
$program_interested = $_POST['program_interested'];
$summary = $_POST['summary'];
$date_reg = date('Y-m-d H:i:s');

$sql = "INSERT INTO partners (id_number, name, website, phone, email, partnership_type, province, program_found_lead, program_interested, summary, date_reg) 
        VALUES ('$id_number', '$name', '$website', '$phone', '$email', '$partnership_type', '$province', '$program_found_lead', '$program_interested', '$summary', '$date_reg')";

if ($conn->query($sql) === TRUE) {
    echo "partner or sponsor created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
