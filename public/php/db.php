<?php

$dbjson = file_get_contents('php://input');

if (file_put_contents("database.json", $dbjson))
	echo "Succesfully saved user's upload";
else
	echo "oh no";

