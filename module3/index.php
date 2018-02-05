<?php # Script 3.7 - index.php #2

$page_title = 'MySQL Module';
$activePage = "three";
include ('../includes/header.php');
?>
<style>
  .jumbotron{overflow:inherit;}
  .jumbotron-container{width: 100%;}
  .assignments-module{background: #f7f7f7;padding: 15px;text-align: center;min-height: 450px;margin-bottom: -50px;z-index: 1;position: relative;}
  .opacity-class{right: -50px;}
  .navbar-nav li a{padding-bottom: 20px;}
  .secondary-image{width:275px;max-width:108%;margin-top:25px;}
</style>
<div class="jumbotron secondary-page-jumbo">
  <div class="jumbo-background-color"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-3">
        <img class="secondary-image" src="../images/logo-mysql.svg" />
      </div>
      <div class="col-sm-12 col-md-12 col-lg-6">
        <div class="jumbotron-container">
          <h1>MySQL</h1>
          <p class="lead">In this MySQL module, I learned how to create a database inside my administration for my site. After I created this database I learned how to insert tables with different types of data and then minipulate the data with MySQL command statements.</p>
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
              <a href="../images/Module3Assignments.pdf" target="_blank" data-type="document">Homework</a>
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
          MySQL is a freely available open source Relational Database Management System (RDBMS)
          that uses Structured Query Language (SQL). SQL is the most popular language for adding,
          accessing and managing content in a database. It is most noted for its quick processing,
          proven reliability, ease and flexibility of use.
        </div>
      </div>
    </div>
  </div>
</div>
<div class="picture-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="module-header">
          <h2>MySQL Admin Connection</h2>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-12">
        <img src="../images/MySQL_Pic.png">
      </div>
    </div>
  </div>
</div>
<?php
include ('../includes/footer.php');
?>
