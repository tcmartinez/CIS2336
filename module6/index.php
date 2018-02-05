<?php # Script 3.7 - index.php #2

$page_title = 'jQuery Module';
$activePage = "six";
include ('../includes/header.php');
?>
<style>
  .jumbotron{overflow:inherit;}
  .jumbotron-container{width: 100%;}
  .assignments-module{background: #f7f7f7;padding: 15px;text-align: center;min-height: 450px;margin-bottom: -50px;z-index: 1;position: relative;}
  .opacity-class{right: -50px;}
  .navbar-nav li a{padding-bottom: 20px;}
</style>
<div class="jumbotron secondary-page-jumbo">
  <div class="jumbo-background-color"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-2">
        <img class="secondary-image" src="../images/jquery-1.svg" />
      </div>
      <div class="col-sm-12 col-md-12 col-lg-7">
        <div class="jumbotron-container">
          <h1>jQuery</h1>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <!---
          <hr class="my-4">
          <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
          --->
          <p class="lead">
            <a class="btn btn-primary btn-lg" href="ch03" role="button">Chapter 3</a>
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
              <a href="../images/LecturesClarify.pdf" target="_blank" data-type="document">Lectures</a>
            </li>
            <li>
              <a href="calculator.php">Calculator</a>
            </li>
            <li>
              <a href="homework" data-type="document">Homework</a>
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
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Duis sapien dui, pulvinar vitae diam sed, imperdiet vestibulum nulla.
          Nullam egestas hendrerit sollicitudin.
          Aliquam eu justo eu diam blandit porta imperdiet sit amet eros.
          Sed hendrerit imperdiet ornare. Fusce posuere massa mi.
          Integer et metus sit amet lacus ornare malesuada.
          Donec eleifend ligula a orci lobortis, at pharetra ex dignissim.
          Integer velit risus, imperdiet vel feugiat a, dictum id justo.
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include ('../includes/footer.php');
?>
