<?php
  $host = '192.168.7.172';
  $db_name = 'otus_db';
  $user = 'admin';
  $password = 'StudentOtus_123';
// Create connection
$conn = new mysqli($host, $user, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $db_name";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully   ";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();

$conn = new mysqli($host, $user, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Create table
$sql = "CREATE TABLE IF NOT EXISTS testtable (
id serial PRIMARY KEY,
number character varying(20) NOT NULL UNIQUE,
name character varying(20) NOT NULL,
kol character varying(20) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully   ";
} else {
    echo "Error creating table: " . $conn->error;
}
// Create row
$sql = "INSERT INTO testtable (id,number,name,kol) VALUES(2,'3','Name2','4')";
if ($conn->query($sql) === TRUE) {
    echo "Row created successfully";
} else {
    echo "Error creating row: " . $conn->error;
}
$conn->close();
?>