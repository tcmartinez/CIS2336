<?php # Script 3.7 - index.php #2

$page_title = 'PHP Module';
$activePage = "two";
include ('../includes/header.php');
?>
<style>
  .jumbotron{overflow:inherit;}
  .jumbotron-container{width: 100%;}
  .assignments-module{background: #f7f7f7;padding: 15px;text-align: center;min-height: 450px;margin-bottom: -50px;z-index: 1;position: relative;}
  .opacity-class{right: -50px;}
  .navbar-nav li a{padding-bottom: 20px;}
  .calc-text{font-size:16px;color:#222;padding:15px;}
  .secondary-image{margin-top: 40px;}
</style>
<div class="jumbotron secondary-page-jumbo">
  <div class="jumbo-background-color"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-3">
        <img class="secondary-image" src="../images/php-1.svg" />
      </div>
      <div class="col-sm-12 col-md-12 col-lg-6">
        <div class="jumbotron-container">
          <h1>PHP</h1>
          <p class="lead">In this PHP module, I was able to learn the fundementals of PHP using a lecture work and watching videos on howtostartprogramming.com. With this I created forms and used PHP programming to calculate and verify information.</p>
          <!---
          <hr class="my-4">
          <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
          --->
          <p class="lead">
            <a class="btn btn-primary btn-lg" href="../includes/Codecademy.html" role="button">Codecademy Badges</a>
          </p>
        </div>
        <div class="opacity-class">
          CIS 2336
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-3">
        <div class="assignments-module">
          <p><strong>Assignments</strong></p>
          <ul>
            <li>
              <a href="../images/syllabus.pdf" target="_blank" data-type="document">Syllabus</a>
            </li>
            <li>
              <a href="../images/LecturesClarify.pdf" target="_blank" data-type="document">Lectures</a>
            </li>
            <li>
              <a href="../images/Module2Assignments.pdf" target="_blank" data-type="document">Homework</a>
            </li>
            <li>
              <a href="http://howtostartprogramming.com/PHP/">PHP Tutorials</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="intro-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="intro-container">
          PHP is a script language and interpreter that is freely available and used primarily on Linux Web servers.
          PHP, originally derived from Personal Home Page Tools, now stands for PHP: Hypertext Preprocessor, which the PHP FAQ describes as a "recursive acronym."
          PHP executes on the server, while a comparable alternative, JavaScript, executes on the client.
        </div>
      </div>
    </div>
  </div>
</div>
<div class="form-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="module-header">
          <h2>PHP Forms</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="form-container">
          <div class="bottom-form-container">
            <h3>Calculator Form</h3>
            <form action="" method="post">
  						<div class="form-group">
  							<label>Enter 1<sup>st</sup> number</label>
  							<input type="text" name="number1" class="form-control" aria-describedby="number 1" placeholder="Enter number">
  							<label>Enter 2<sup>nd</sup> number</label>
  							<input type="text" name="number2" class="form-control" aria-describedby="number 2" placeholder="Enter number">
  						</div>
  						<button name="submit" type="submit" class="btn btn-primary">Calculate</button>
  					</form>
          </div>
          <?php // Calculate the results:
          $number1 = $_POST['number1'];
          $number2 = $_POST['number2'];
          $totalNumber = $number1 * $number2;

          // Check for form submission:
          if ($_SERVER['REQUEST_METHOD'] == 'POST') {

          	// Minimal form validation:
          	if (is_numeric($_POST['number1']) && is_numeric($_POST['number2']) ){

          		// Print the results:
          		echo '
              <div class="calc-text">
          		  <p>Number 1 is ' . $_POST['number1'] . '</p><p>Number 2 is ' . $_POST['number2'] . '</p><p>Result of multiplication is ' . $totalNumber . '</p>
              </div>';

          	} else { // Invalid submitted values.
          		echo '
              <div class="calc-text">
                <h1>Error!</h1>
            		<p class="error">Please enter both numbers</p>
              </div>';
          	}

          }; // End of main submission IF.

          // Leave the PHP section and create the HTML form:
           ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="form-container">
          <div class="bottom-form-container bottom-form-nomargin">
            <h3>Validation Form</h3>
            <form action="handle_with_validation_address.php" method="post">

            	<fieldset><legend>Enter your information in the form below:</legend>

            	<p>
            		<fieldset class="form-group">
            	    <legend>Choose a shipping address</legend>
            	    <div class="form-check">
            	      <label class="form-check-label">
            	        <input type="radio" class="form-check-input" name="address" value="Natalia Fofanova 1234 Blue street, Kemah, TX">
            	        Natalia Fofanova 1234 Blue street, Kemah, TX
            	      </label>
            	    </div>
            	    <div class="form-check">
            	    <label class="form-check-label">
            	        <input type="radio" class="form-check-input" name="address" value="Denise Silva 5678 Sunflower seed street, Houston, TX">
            	        Denise Silva 5678 Sunflower seed street, Houston, TX
            	      </label>
            	    </div>
            	    <div class="form-check">
            	    <label class="form-check-label">
            	        <input type="radio" class="form-check-input" name="address" value="University of Houston 4800 Academy Street, Houston, TX">
            	        University of Houston 4800 Academy Street, Houston, TX
            	      </label>
            	    </div>
            	  </fieldset>
            	</p>
            	<button type="submit" class="btn btn-primary" name="submit">Use this address</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>

<?php
include ('../includes/footer.php');
?>
