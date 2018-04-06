
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign In</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/grayscale.css" rel="stylesheet">

  </head>

  <body class ="sign-bg">

        <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html"><img src="img/logo.png" alt="" height="50" width="50"> Power Watch</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="AboutUs.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://localhost/powerWatch/Shoppage.php?voteMessage=">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://localhost/powerWatch/signIn.php?loginMessage=">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://localhost/powerWatch/signUp.php?message=&welcomeMessage=">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contactUs.html">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End of Navigation-->

    <div class="container-sign" style="margin-top: 100px">

      <form class="form-signin" action ="infoLogin.php" method="POST" >
        <h2 class="form-signin-heading" style="text-align: center;">Sign In</h2>

        <center><a style="color: red"><?php echo $_GET['loginMessage'];?></a></center>

        <label for="inputEmail" class="sr-only">Email address</label>
        <a>Email Address: </a>
        <input type="email" name = "Email" id="inputEmail" class="form-control" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <a>Password: </a>
        <input type="password" id="inputPassword" class="form-control" name = "Password" required>
   
        <input type="submit" value="Sign In">
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
