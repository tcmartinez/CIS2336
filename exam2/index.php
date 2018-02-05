<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Global CSS -->
    <link href='../css/styles.css' rel='stylesheet' type='text/css'>

    <!-- Internal CSS -->
    <style>
      .jumbotron{background: #fff;overflow:inherit;}
      .jumbotron-container{width: 100%;}
      .assignments-module{background: #f7f7f7;padding: 15px;text-align: center;min-height: 450px;margin-bottom: -50px;z-index: 1;position: relative;}
      .opacity-class{right: -50px;}
      .navbar-nav li a{padding-bottom: 20px;}
    </style>
  </head>
  <body>
    <div class="jumbotron">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-9">
            <div class="test-container-1">
              <h2>Container 1</h2>
              <a href="homework/form.html">Enter Salary Link</a>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-3">
            <div class="test-container-2">
              <h2>Container 2</h2>
              <div class="form-section">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <div class="intro-container">
                        <form action="" method="post">
              						<div class="form-group">
              							<label>Enter 1<sup>st</sup> number</label>
              							<input type="text" name="number1" class="form-control" aria-describedby="number 1" placeholder="Enter number">
              							<label>Enter 2<sup>nd</sup> number</label>
              							<input type="text" name="number2" class="form-control" aria-describedby="number 2" placeholder="Enter number">
              						</div>
              						<button name="submit" type="submit" class="btn btn-primary">Calculate</button>
              					</form>
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
