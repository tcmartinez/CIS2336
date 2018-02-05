<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Form Feedback</title>

</head>

<body>

<?php # MyFirstForm.php

// Calculate the results:
$salary = $_POST['salary'];

$number1 = 700;
$totalNumber = $number1 / 10;



// Print a message based upon the address value:

if (isset($_REQUEST['salary'])) {

	echo '<p>Your one time help from government will arrive soon in the amount of: ' . $_POST['salary'] .'</p>
	<p>Calculation: ' . $totalNumber . ' </p>';

} else {

	echo '<p>Please choose a salary</p>';

}


?>

</body>

</html>
