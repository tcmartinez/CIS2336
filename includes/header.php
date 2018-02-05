<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $page_title; ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Global CSS -->
    <link href='../css/styles.css' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <header class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="../images/logo.svg" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <nav class="navbar-right">
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="../">Home</a>
              </li>
              <li class="nav-item <?php if ($activePage =="one") {?>active<?php } ?>">
                <a class="nav-link" href="../module1/index.php">Module 1 <span class="nav-header-span">HTML & CSS</span></a>
              </li>
              <li class="nav-item <?php if ($activePage =="two") {?>active<?php } ?>">
                <a class="nav-link" href="../module2/index.php">Module 2 <span class="nav-header-span">PHP</span></a>
              </li>
              <li class="nav-item <?php if ($activePage =="three") {?>active<?php } ?>">
                <a class="nav-link" href="../module3/index.php">Module 3 <span class="nav-header-span">MySQL</span></a>
              </li>
              <li class="nav-item <?php if ($activePage =="four") {?>active<?php } ?>">
                <a class="nav-link" href="../module4/index.php">Module 4 <span class="nav-header-span">SQLi & MySQLi</span></a>
              </li>
              <li class="nav-item <?php if ($activePage =="five") {?>active<?php } ?>">
                <a class="nav-link" href="../module5/index.php">Module 5 <span class="nav-header-span">Javascript</span></a>
              </li>
              <!--- <li class="nav-item <?php if ($activePage =="six") {?>active<?php } ?>">
                <a class="nav-link" href="../module6/index.php">Module 6 <span class="nav-header-span">jQuery</span></a>
              </li> --->
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
                        <form role="form" action="../contact.php" method="post">
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
		<div id="middeletemplate"><!-- Start of the page-specific content. -->
<!-- Script 3.2 - header.html -->
