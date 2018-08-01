<?php 

$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$feedback = isset($_POST['feedback']) ? $_POST['feedback'] : '';
$num = isset($_POST['num']) ? $_POST['num'] : '';
$num2 = isset($_POST['num2']) ? $_POST['num2'] : '';

if (strlen($name) > 0 && strlen($email) > 0 && strlen($feedback) > 0) {
	print "<p>" . "Name: " . $name . "</p>";
	// echo "<br>";
	print "<p>" . "Email: " . $email . "</p>";
	print "<p>" . "Feedback: " . $feedback . "</p>";
}

$sum = $num + $num2;

if ( $sum == 10 ) {
	print 'Thank you for giving a feedback!';
 } else {
	print 'There was error in a form, please try again.';
}


?>

