<?php  
include("../db/config.php");
$name=$_POST['name'];
$message=$_POST['subj'];
$phone=$_POST['phone'];
$email=$_POST['email'];


$sql = "INSERT INTO message_info (firstname,subj, phone, email)
VALUES ('$name','$message','$phone','$email')";

if ($conn->query($sql) == TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

