<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Form Feedback</title>

</head>

<body>

<?php # MyFirstForm.php



// Create a shorthand for the form data:

$number1 = $_POST['getnum'];
$totalNumber = $number1 * .1;


// Print a message based upon the address value:

if (isset($_REQUEST['number']) > 10,000) {



	echo '<p>You will get this back: ' . $totalNumber .'</p>';

} else {

	echo '<p>No Extra for you</p>';

}


?>

</body>

</html>
