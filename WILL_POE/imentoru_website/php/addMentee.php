
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
$program_interest = $_POST['program_interest'];
$program_found_lead = $_POST['program_found_lead'];
$home_language = $_POST['Home_Language'];
$summary = $_POST['summary'];
$town_village = $_POST['town_village'];
$date_reg = date('Y-m-d H:i:s');

  $sql = "INSERT INTO mentees (id_number, first_name, last_name, email, phone, province, home_language, benefited_already, occupation, program_interest, program_found_lead, summary,town_village) VALUES ('$id_number', '$first_name', '$last_name', '$email', '$phone', '$province', '$home_language', '$benefited_already', '$occupation', '$program_interest', '$program_found_lead', '$summary','$town_village')";

  if ($conn->query($sql) === TRUE) {
    echo "mentee successfully added";
  } else {
    echo "Error: no mentee added " . $sql . "<br>" . $conn->error;
  }


$conn->close();
