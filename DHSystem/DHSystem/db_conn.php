<?php
  $servername = "containers-us-west-176.railway.app";
  $port = 7059;
  $username = "root";
  $password = "uF5UgfB1A5DbRb4LcZOA";

  $db_name = "railway";
  
  $conn = new mysqli($servername, (int)$port, $username, $password, $db_name);
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else {
    echo "success";
  }
?>