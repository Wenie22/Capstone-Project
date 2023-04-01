<?php
  $servername = "0:0:0:0";
  $username = "root";
  $password = "FdmRrA8CShpnSG7YStpQ";

  $db_name = "railway";
  
  $conn = new mysqli($servername, $username, $password, $db_name);
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else {
    echo "success";
  }
?>