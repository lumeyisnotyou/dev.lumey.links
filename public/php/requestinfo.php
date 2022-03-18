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

$doesUserID = 'select * from ' . $dbobj->userID . ' LIMIT 1';
$result = mysql_query($doesUserID)
$arrayify = array();
$addImageUpload = "INSERT INTO " . $dbobj->userID . " (uniqueID, fileName)
VALUES('" . $dbobj->uniqueID . "', '" . $dbobj->fileName . "')";

if ($conn->query($doesUserID) !== FALSE) {
  echo "Found Table";
  while ($row = mysql_fetch_assoc($result)) $arrayify[] = $row;
	if ($conn->query($addImageUpload) === TRUE) {
  	echo "Created Image Upload!";

} 	else {
  		echo "Oops... " . $conn->error;
	}

} else {
  echo "Oops... " . $conn->error;
}
}

