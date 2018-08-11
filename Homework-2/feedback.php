<?php 

$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$feedback = isset($_POST['feedback']) ? $_POST['feedback'] : '';

$servername = "localhost";
$dbname = "feedback";
$username = "root";
$password = "root";



if($name != " " && $feedback != " " && $email && strpos($email, '@')) { 

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO homework (name,email,feedback)
VALUES ('$name','$email','$feedback')";

	if ($conn->query($sql) === TRUE) {
		echo "Thank you for giving a feedback. New record created successfully.";
	} 

	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}


?>

