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
 $makeTable = "CREATE TABLE " . $dbobj->userID . " (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
uniqueID VARCHAR(30) NOT NULL,
fileName VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($makeTable) === TRUE) {
  echo "Created Table!";
} else {
  echo "Oops... " . $conn->error;
}
}

