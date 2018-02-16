
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign Up</title>

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
              <a class="nav-link js-scroll-trigger" href="Shoppage.html">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="signIn.html">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="signUp.html">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contactUs.html">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End of Navigation-->

    <div class="container-sign">
<form action="infosend.php" method="POST"> 
      <form class="form-signin">
        <h2 class="form-signin-heading" style="text-align: center;">Sign Up</h2>

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="Email" required autofocus>

        <label for="reInputEmail" class="sr-only">Email address</label>
        <input type="email" id="reInputEmail" class="form-control" placeholder="Re-Enter Email address" required>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="Password" required>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>

        <!--<button class="btn btn-lg btn-primary btn-block" 
          type="submit"
        action = "submit"
       style="background-color: #a39d96">Sign Up</button>-->
       <input type="submit" value="sign up">
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
