<?php
  $servername = "fdb29.awardspace.net";
  $username = "4231432_hkduty";
  $password = "hkduty_4231432";

  $db_name = "4231432_hkduty";
  
  $conn = new mysqli($servername, $username, $password, $db_name);
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>