<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact Us</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/grayscale.css" rel="stylesheet">

    </head>
    <body>

  <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="background-color: #525151">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="http://localhost/powerWatch/index.php"><img src="img/logo.png" alt="" height="50" width="50"> Power Watch</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://localhost/powerWatch/AboutUs.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" <?php if(isset($_SESSION['Name'])){echo 'href="http://localhost/powerWatch/Shoppage.php?voteMessage="';} else {echo 'href="http://localhost/powerWatch/Shoppage.html"';}?>>Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" 

              <?php if(isset($_SESSION['Name'])){echo 'href="http://localhost/powerWatch/memberHome.php?passwordMessage=&promoMessage="';} else {echo 'href="http://localhost/powerWatch/signIn.php?loginMessage="';}?>

                >

                <?php if(isset($_SESSION['Name'])){echo "MemberZone";} else {echo "Login";}?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" 

              <?php if(isset($_SESSION['Name'])){echo 'href="http://localhost/powerWatch/logout.php"';} else {echo 'href="http://localhost/powerWatch/signUp.php?message=&welcomeMessage="';}?>

                >
                <?php if(isset($_SESSION['Name'])){echo "Logout";} else {echo "SignUp";}?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://localhost/powerWatch/contactUs.php?emailSent=">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End of Navigation-->
        <div class="container" style="padding-top: 700px">
        <div class="container-contact">
            <form action="contactInfo.php" method="POST">
            <div >
                <div id="form_container">
                    <h2 class="form-signin-heading">Contact Us</h2>
                    <center><a><?php echo $_GET['emailSent']?></a></center>
                    <p> Please send your message below. We will get back to you at the earliest! </p>
                    <form role="form" method="post" id="reused_form">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="message"> Message:</label>
                                <textarea class="form-control" type="textarea" id="message" name="Message" maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> Your Name:</label>
                                <input type="text" class="form-control" id="name" name="Name" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email"> Email:</label>
                                <input type="email" class="form-control" id="email" name="Email" pattern="\b[a-zA-Z0-9._%+-]+@[a-zA-Z0-9-]+\.((com)|(org)|(edu))\b" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <!-- <button type="submit" class="btn btn-lg btn-default pull-right" >Send &rarr;</button> -->
                                <input type="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Posted your message successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                </div>
            </div>
        <!--</form>-->
        </div>
    </div>
    </body>
</html>