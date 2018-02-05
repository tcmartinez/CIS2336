<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Form Feedback</title>

</head>

<body>

<?php # MyFirstForm.php



// Create a shorthand for the form data:

$address = $_REQUEST['address'];



// Print a message based upon the address value:

if (isset($_REQUEST['address'])) {

	echo '<p>We will send an item to address: ' . $_POST['address'] .'</p>';

} else {

	echo '<p>Please choose address to continue</p>';

}


?>

</body>

</html>
