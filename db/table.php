<?php

include("../db/config.php");

// sql to create table
$sql = "CREATE TABLE message_info (
  firstname VARCHAR(30) NOT NULL,
   subj VARCHAR(30) NOT NULL,
   phone int(30) NOT NULL,
  email VARCHAR(50)
   
  )";
  
  if (mysqli_query($conn, $sql)) {
    echo "Table info created successfully";
  } else {
    echo "Error creating table: " . mysqli_error($conn);
  }
  
  mysqli_close($conn);
  ?>