<?php # Script 3.7 - index.php #2

$page_title = 'SQLi & MySQLi Module';
$activePage = "four";
include ('../includes/header.php');
?>
<style>
  .jumbotron{overflow:inherit;}
  .jumbotron-container{width: 100%;}
  .assignments-module{background: #f7f7f7;padding: 15px;text-align: center;min-height: 450px;margin-bottom: -50px;z-index: 1;position: relative;}
  .opacity-class{right: -50px;}
  .navbar-nav li a{padding-bottom: 20px;}
  .secondary-image{max-width:140%;width:310px;margin-top: 40px;}
</style>
<div class="jumbotron secondary-page-jumbo">
  <div class="jumbo-background-color"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-3">
        <img class="secondary-image" src="../images/mysqli_2.png" />
      </div>
      <div class="col-sm-12 col-md-12 col-lg-6">
        <div class="jumbotron-container">
          <h1>SQLi & MySQLi</h1>
          <p class="lead">In this SQLi & MySQLi module, I learned how to make an MySQLi Connection from my database on my server to this site. Then I created a form that inserts data from the site back to the database.</p>
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
              <a href="../images/Module4Assignments.pdf" target="_blank" data-type="document">Homework</a>
            </li>
            <li>
              <a href="https://thenewboston.com/videos.php?cat=87">TheNewBoston SQL Lectures</a>
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
          SQLi or SQL injection is a type of security exploit in which the attacker adds Structured Query Language (SQL) code to a Web form input box to gain access to resources or make changes to data.
          While MySQLi is an extension developed to take advantage of new features found in MySQL systems
          such as object-oriented interface, support for prepared statements, support for multiple statements, and support for transactions.
        </div>
      </div>
    </div>
  </div>
</div>
<div class="form-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="form-container">
          <?php
            error_reporting(0);
            require 'db/connect.php';
            require 'functions/security.php';

            $record = array();

            if(!empty($_POST)) {
              if(isset($_POST['name'], $_POST['website'], $_POST['state'])) {

                $name = trim($_POST['name']);
                $website = trim($_POST['website']);
                $state = trim($_POST['state']);

                if(!empty($name) && !empty($website) && !empty($state)) {
                  $insert = $db->prepare("INSERT INTO friends (name, website, state) VALUES (? , ? , ?)");
                  $insert->bind_param("sss", $name, $website, $state);

                  if($insert->execute()) {
                    header('Location: index.php');
                    die();
                  }
                }
              }
            }

            if($results = $db->query("SELECT friends.name, friends.website, friends.state FROM friends")) {
              if($results->num_rows) {
                while($row = $results->fetch_object()) {
                  $records[] = $row;
                }
                $results->free();
              }
            }
          ?>
          <?php
            if(!count($records)) {
              echo 'No records';
            } else{

            }
          ?>
          <h2>Friends Form</h2>
          <table class="table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Website</th>
                <th>State</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach($records as $r) {
               ?>
                <tr>
                  <td><?php echo escape($r->name); ?></td>
                  <td><?php echo escape($r->website); ?></td>
                  <td><?php echo escape($r->state); ?></td>
                </tr>
              <?php
              }
              ?>

              <hr />
            </tbody>
          </table>
          <div class="bottom-form-container">
            <h3>Friends</h3>
            <form action="" method="post">
              <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="Website">Website</label>
                <input type="text" name="website" class="form-control" id="website" placeholder="Enter Your Website" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="State">State</label>
                <input type="text" name="state" class="form-control" id="state" placeholder="Enter Your State" autocomplete="off">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include ('../includes/footer.php');
?>
