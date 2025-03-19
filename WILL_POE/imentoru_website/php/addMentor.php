<?php
include("../database/connection.php");

$id_number = $_POST['id_number'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$occupation = $_POST['occupation'];
$province = $_POST['province'];
$vacant_application = $_POST['vacant_application'];
$benefited_already = $_POST['benefited_already'];
$program_interested = $_POST['program_interested'];
$program_found_lead = $_POST['program_found_lead'];
$home_language = $_POST['Home_Language'];
$summary = $_POST['summary'];
$town_village = $_POST['town_village'];
$date_reg = date('Y-m-d H:i:s');
$sql = "INSERT INTO mentors (id_number, first_name, last_name, gender, phone, email, occupation, province, vacant_application, benefited_already, program_interested, program_found_lead, Home_Language, summary, town_village, date_reg) 
        VALUES ('$id_number', '$first_name', '$last_name', '$gender', '$phone', '$email', '$occupation', '$province', '$vacant_application', '$benefited_already', '$program_interested', '$program_found_lead', '$home_language',  '$summary', '$town_village', '$date_reg')";

if ($conn->query($sql) === TRUE) {
    echo "mentor created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
