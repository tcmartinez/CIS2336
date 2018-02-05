<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Global CSS -->
    <link href='css/styles.css' rel='stylesheet' type='text/css'>
    <style>
      .opacity-class{bottom:-127px;}
      .jumbo-background-color{background-color: rgba(0,0,0,.5);}
      .jumbotron-container h1, .jumbotron-container p{color:#fff;}
      .opacity-class{color:#fff;opacity:.7;}
      .contact-item {margin-top: 1px;}
    </style>
  </head>
  <body>
    <header class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="images/logo.svg" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <nav class="navbar-right">
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Modules
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="module1/index.php">Module 1 / HTML & CSS</a>
                  <a class="dropdown-item" href="module2/index.php">Module 2 / PHP</a>
                  <a class="dropdown-item" href="module3/index.php">Module 3 / MySQL</a>
                  <a class="dropdown-item" href="module4/index.php">Module 4 / SQLi & MySQLi</a>
                  <a class="dropdown-item" href="module5/index.php">Module 5 / Javascript</a>
                  <!---<a class="dropdown-item" href="module6/index.php">Module 6 / jQuery</a>--->
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#myAnchor" rel="" id="anchor1">About</a>
              </li>
              <li class="nav-item contact-item">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Contact
                </button>
              </li>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Contact Form</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="contact-form">
                        <p><strong>Give me a call or send me an email. I'd be happy to have a chat with you!</strong></p>
                        <form role="form" action="contact.php" method="post">
                    			<div class="form-group">
                    				<label for="email">Email:</label>
                    				<input type="email" class="form-control" id="email" name="email" placeholder="example@example.com"/>
                    			</div>
                    			<div class="form-group">
                    				<label for="name">Name:</label>
                    				<input type="text" class="form-control" id="name" name="name" placeholder="Your name here"/>

                    			</div>
                    			<div class="form-group">
                    				<label for="message">Message:</label>
                    				<textarea class="form-control" name="message" id="message" placeholder="Your message here"></textarea>
                    			</div>
                          <div class="modal-footer">
                      			<button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                    		</form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <div class="jumbotron home-page-jumbo">
      <div class="jumbo-background-color"></div>
      <!---<img class="main-image" src="images/main-image.jpg" />--->
      <div id="center-container" class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="jumbo-image-container">
              <div class="personal-image-module">
                <img class="personal-image" src="images/Thomas-overlay2.png" />
              </div>
            </div><!---
            ---><div class="jumbotron-container">
              <h1>Internet Application Development</h1>
              <p class="lead">My portfolio website for CIS 2336 Internet Application Development. </p>
              <hr class="my-4">
              <p>An introduction of Internet Application development that includes both client and server side technologies.</p>
              <!---
              <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
              </p>
              --->
            </div>
            <div class="opacity-class">
              CIS 2336
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
              This course is an introduction to Internet Application development.
              This introduction includes both client and server side technologies.
              Client side technologies include HTML for structure, CSS for presentation and Java Script for interactivity.
              Server-side technologies include PHP for middleware and MySQL for dynamic web applications.
              The course combines conceptual knowledge with hands-on experiences.
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="module-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="module-header">
              <h2>Application Development Modules</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4">
            <a class="module-container" href="module1/index.php">
              <div class="module-image module-1-image">
                <img src="images/html5.svg" />
              </div>
              <div class="module-label">
                Module 1
              </div>
              <div class="module-sublabel">
                HTML & CSS
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-4">
            <a class="module-container" href="module2/index.php">
              <div class="module-image module-2-image">
                <img src="images/php-1.svg" />
              </div>
              <div class="module-label">
                Module 2
              </div>
              <div class="module-sublabel">
                PHP
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-4">
            <a class="module-container" href="module3/index.php">
              <div class="module-image module-3-image">
                <img src="images/logo-mysql.svg" />
              </div>
              <div class="module-label">
                Module 3
              </div>
              <div class="module-sublabel">
                MySQL
              </div>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4">
            <a class="module-container" href="module4/index.php">
              <div class="module-image module-4-image">
                <img src="images/mysqli_2.jpg" />
              </div>
              <div class="module-label">
                Module 4
              </div>
              <div class="module-sublabel">
                SQLi & MySQLi
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-4">
            <a class="module-container" href="module5/index.php">
              <div class="module-image module-5-image">
                <img src="images/javascript.svg" />
              </div>
              <div class="module-label">
                Module 5
              </div>
              <div class="module-sublabel">
                Javascript
              </div>
            </a>
          </div>
          <!---
          <div class="col-sm-12 col-md-12 col-lg-4">
            <a class="module-container" href="module6/index.php">
              <div class="module-image module-6-image">
                <img src="images/jquery-1.svg" />
              </div>
              <div class="module-label">
                Module 6
              </div>
              <div class="module-sublabel">
                jQuery
              </div>
            </a>
          </div>
          --->
        </div>
      </div>
    </div>
    <a name="myAnchor" id="myAnchor"></a>
    <div class="about-section">
      <div class="container" style="max-width:inherit;">
        <div class="row">
          <div class="col-sm-12 bg-one col-md-12 col-lg-6">
            <!---<img class="about-image" src="images/workingbackground_2.jpg" />--->
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="about-container">
              <div class="about-header">
                <h2>About Me</h2>
                <p>
                  My name is Thomas Martinez and I am currently working full time as a
                  Front End Developer and IT Project Coordinator for a company called Digital Texas.
                  I am also currently a student at the University of Houston working towards a Bachelor of Science
                  in Digital Media. My job and schooling allows me to work with different multimedia departments
                  to collaborate, design, and create fully functional web pages.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="contact-container">
              <h2>Say Hello</h2>
              <p>
                The number one benefit of information technology is that it empowers people to do what they want to do. It lets people be creative. It lets people be productive. It lets people learn things they didn't think they could learn before, and so in a sense it is all about potential.
              </p>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="contact-form">
              <p><strong>Give me a call or send me an email. I'd be happy to have a chat with you!</strong></p>
              <form role="form" action="contact.php" method="post">
          			<div class="form-group">
          				<label for="email">Email:</label>
          				<input type="email" class="form-control" id="email" name="email" placeholder="example@example.com"/>
          			</div>
          			<div class="form-group">
          				<label for="name">Name:</label>
          				<input type="text" class="form-control" id="name" name="name" placeholder="Your name here"/>

          			</div>
          			<div class="form-group">
          				<label for="message">Message:</label>
          				<textarea class="form-control" name="message" id="message" placeholder="Your message here"></textarea>
          			</div>
          			<button type="submit" class="btn btn-primary">Submit</button>
          		</form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="footer-text">
          © Copyright 2016 by Thomas Martinez
        </div>
        <div class="footer-social">
          <a href="mailto:tcmartinez08@gmail.com">Contact Me</a>
        </div>
      </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script>
      $('a').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 500);
        return false;
      });
    </script>
  </body>
</html>
