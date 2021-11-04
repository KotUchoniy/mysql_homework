<?php
  echo "Server Address: ";
  echo  $_SERVER['SERVER_ADDR'];
  echo "<br />\n";
  echo "<br />\n";

  $host = '192.168.7.172';
  $db_name = 'otus_db';
  $user = 'admin';
  $password = 'StudentOtus_123';
// Create connection
$conn = new mysqli($host, $user, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Create database
$sql = "select name, kol from testtable where id=2";
$res = $conn->query($sql);
while ($row = $res->fetch_row()) {
  echo "Name: $row[0] Kol: $row[1]";
  echo "<br />\n";
  }

$conn->close();

?>