<?php
// db n' stuff
$servername = 'localhost';
$username = 'php';
$password = 'd&(SYA&FDT6HA^ATS6ts&GHsf*^A%sa$&';
$db = "ugc_images";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
die("oh no, i couldn't connect to MySQL! here's why: " . $conn->connect_error);
}

$dbjson = file_get_contents('php://input');
$dbobj = json_decode($dbjson);

$doesUserID = "SELECT count(*)
FROM information_schema.TABLES
WHERE (TABLE_SCHEMA = 'ugc_images') AND (TABLE_NAME = '" . $dbobj->userID . "')";

if ($conn->query($doesUserID) === TRUE) {
  echo "Found Table";
} else {
  echo "No: " . $conn->error;
}

