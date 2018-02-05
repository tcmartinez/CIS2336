<?php # Script 3.10 - calculator.php #5

// Calculate the results:
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$totalNumber = $number1 * $number2;

// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Minimal form validation:
	if (is_numeric($_POST['number1']) && is_numeric($_POST['number2']) ){

		// Print the results:
		echo '
		<p>Number 1 is ' . $_POST['number1'] . '</p><p>Number 2 is ' . $_POST['number2'] . '</p><p>Result of multiplication is ' . $totalNumber . '</p>';

	} else { // Invalid submitted values.
		echo '<h1>Error!</h1>
		<p class="error">Please enter both numbers</p>';
	}

} // End of main submission IF.

// Leave the PHP section and create the HTML form:
?>

<h1>Calculator</h1>
<div class="form-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<div class="intro-container">
					<form action="calculator.php" method="post">
						<div class="form-group">
							<label>Enter 1<sup>st</sup> number</label>
							<input type="text" name="number1" class="form-control" aria-describedby="number 1" placeholder="Enter number">
							<label>Enter 2<sup>nd</sup> number</label>
							<input type="text" name="number2" class="form-control" aria-describedby="number 2" placeholder="Enter number">
						</div>
						<button name="submit" type="submit" class="btn btn-primary">Calculate</button>
					</form>
				</div>
			</div>
		</div>
</div>
