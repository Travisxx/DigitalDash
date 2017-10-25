
<?php
$servername = "sulley.cah.ucf.edu";
$username = "dig4530c_group07";
$password = "knights4321!";
$dbname = "dig4530c_group07";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
	echo "could not connect to database";
} else {
	echo "connection succesful";
}

?>
