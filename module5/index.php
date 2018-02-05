<?php # Script 3.7 - index.php #2

$page_title = 'Javascript Module';
$activePage = "five";
include ('../includes/header.php');
?>
<style>
  .jumbotron{overflow:inherit;}
  .jumbotron-container{width: 100%;}
  .assignments-module{background: #f7f7f7;padding: 15px;text-align: center;min-height: 450px;margin-bottom: -50px;z-index: 1;position: relative;}
  .opacity-class{right: -50px;}
  .navbar-nav li a{padding-bottom: 20px;}
  .secondary-image{max-height: 200px;margin:40px auto auto;display: block;}
</style>
<div class="jumbotron secondary-page-jumbo">
  <div class="jumbo-background-color"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-3">
        <img class="secondary-image" src="../images/javascript.svg" />
      </div>
      <div class="col-sm-12 col-md-12 col-lg-6">
        <div class="jumbotron-container">
          <h1>Javascript</h1>
          <p class="lead">In this Javascript module, I completed the Javascript course for Codecademy and learned how to work with variables, functions, else if statements, and switch statements.</p>
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
              <a href="../images/Module5Assignments.pdf" target="_blank" data-type="document">Homework</a>
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
          JavaScript is a programming language commonly used in web development.
          It was originally developed by Netscape as a means to add dynamic and interactive elements to websites.
          While JavaScript is influenced by Java, the syntax is more similar to C and is based on ECMAScript,
          a scripting language developed by Sun Microsystems.
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
          <h2>Quadratic Formula</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="form-container">
          <div class="bottom-form-container">
            <h3>Formula Form</h3>
            <form action="" method="post">
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                      <input type="number" id="formValueA" class="form-control">
                      <div class="input-group-addon non-input-group">x^2+</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                      <input type="number" id="formValueB" class="form-control">
                      <div class="input-group-addon non-input-group">x</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                      <div class="input-group-addon non-input-group">+</div>
                      <input type="number" id="formValueC" class="form-control">
                      <div class="input-group-addon non-input-group">=0</div>
                    </div>
                  </div>
                </div>
              </div>
              <input type="button" onclick="quadraticFormula()" class="btn btn-primary" value="Calculate"/>
            </form>
          </div>
          <script>

              function quadraticFormula() {
                var valueA = document.getElementById("formValueA").value;
                var valueB = document.getElementById("formValueB").value;
                var valueC = document.getElementById("formValueC").value;

                var root_part = Math.sqrt(valueB * valueB - 4 * valueA * valueC);
                var denom = 2 * valueA;

                var x1 = ( -valueB + root_part ) / denom;
                var x2 = ( -valueB - root_part ) / denom;

                //document.write(valueA);
                //document.write(valueB);
                //document.write(valueC);

                document.write("1st root: "+x1+"<br />");
                document.write("2nd root: "+x2+"<br />");
              }

          /*
            var a = prompt("Enter value of a","2");
            var b = prompt("Enter value of b","4");
            var c = prompt("Enter value of c","-4");

            var root_part = Math.sqrt(b * b - 4 * a * c);
            var denom = 2 * a;

            var root1 = ( -b + root_part ) / denom;
            var root2 = ( -b - root_part ) / denom;

            document.write("1st root: "+root1+"<br />");
            document.write("2nd root: "+root2+"<br />");
            */
          </script>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include ('../includes/footer.php');
?>
