<?php

$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';

$con = new mysqli("localhost", "root","", "voting");

// Check connection
   if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 