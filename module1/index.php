<?php # Script 3.7 - index.php #2

$page_title = 'HTML & CSS Module';
$activePage = "one";
include ('../includes/header.php');
?>
<style>
  .jumbotron{overflow:inherit;}
  .jumbotron-container{width: 100%;}
  .assignments-module{background: #f7f7f7;padding: 15px;text-align: center;min-height: 450px;margin-bottom: -50px;z-index: 1;position: relative;}
  .opacity-class{right: -50px;}
  .navbar-nav li a{padding-bottom: 20px;}
  .secondary-image{margin-top:25px;max-height: 260px;margin: auto;display: block;}
</style>
<div class="jumbotron secondary-page-jumbo">
  <div class="jumbo-background-color"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-3">
        <img class="secondary-image" src="../images/html5.svg" />
      </div>
      <div class="col-sm-12 col-md-12 col-lg-6">
        <div class="jumbotron-container">
          <h1>HTML & CSS</h1>
          <p class="lead">In this HTML and CSS module, I was able to learn the fundementals of HTML & CSS using a program called Codecademy. Then with this knowledge I created web pages and styled it using CSS.</p>
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
              <a href="../images/Module1Assignments.pdf" target="_blank" data-type="document">Homework</a>
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
          HTML, HyperText Markup Language, gives content structure and meaning by defining that content as,
          for example, headings, paragraphs, or images. CSS, or Cascading Style Sheets, is a presentation
          language created to style the appearance of content—using, for example, fonts or colors.
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include ('../includes/footer.php');
?>
