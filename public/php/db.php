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

$addImageUpload = "INSERT INTO " . $dbobj->userID . " (uniqueID, fileName)
VALUES('" . $dbobj->uniqueID . "', '" . $dbobj->fileName . "')";

if ($conn->query($doesUserID) !== FALSE) {
  echo "Found Table";
	if ($conn->query($addImageUpload) === TRUE) {
  	echo "Created Image Upload!";

} 	else {
  		echo "Oops... " . $conn->error;
	}
} else {
 	$makeTable = "CREATE TABLE " . $dbobj->userID . " (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	uniqueID VARCHAR(8000) NOT NULL,
	fileName VARCHAR(8000) NOT NULL,
	reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
	)";
		if ($conn->query($makeTable) === TRUE) {
 		 echo "Created Table!";
  		 if ($conn->query($addImageUpload) === TRUE) {
 		 echo "Created Image Upload!";

} 	else {
  		echo "Oops... " . $conn->error;
}

} else {
  echo "Oops... " . $conn->error;
}
}

