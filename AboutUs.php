<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>About Us</title>

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

              <?php if(isset($_SESSION['Name'])){echo 'href="http://localhost/powerWatch/memberHome.php"';} else {echo 'href="http://localhost/powerWatch/signIn.php?loginMessage="';}?>

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


    <!-- Page Content -->
    <div class="container" style="padding-top: 100px">
      <!-- Introduction Row -->
      <h1 class="my-4" style="padding: 10px 0px 0px 0px">About Us
      </h1>
      <p>As users of smartwatches ourselves, we know how frustrating it can be to be stuck without power when you need it most. In a world of mobile devices, you don't have time to constantly be looking for the nearest power outlet. That’s why the three of us set out to make Power Watch, providing sleek and reliable smartwatch charging cases to help in everyday life.</p>

  <p>When we first met at the University of Virginia, we knew we wanted to make a product anyone could use. Our cases are suited to fit any lifestyle and your comfort is guaranteed. You’ll also see our loyalty to our customers in our 24/7 customer support when you head over to the “contact us” page.</p>

  <p>We hope you choose Power Watch so we can help you be your best!</p>

  <p><i>-- Chris, Michael, and Rakib</i></p>

  <h1 class="my-4"><small>Our Motto:</small> Time to Charge!</h1>

    <p>We are proud to be the first and only producer of smartwatch charging cases on the market. With our cases, you'll never have to worry about running out of juice when you're out and about because charging can be done in the flip of a switch. That means you won't have carry around those pesky charging cables.</p>

    <p>Our universal smartwatch cases are well suited for any scenario, so you'll have no trouble finding a specific case to fit your lifestyle. We provide cases for major smartwatch brands like Apple and Samsung and all of our cases are guaranteed to fit your comfort needs.</p>

  <div class="text-center">
  	<a class="btn btn-primary" href="http://localhost/powerWatch/signUp.php?message=&welcomeMessage=">Buy our Products!</a>
  	<br/>
  	<br/>
    <img src="img/logo.PNG" style="width:200px;height:200px">
  </div>
      <!-- Team Members Row -->
      <div class="row">
        <div class="col-lg-12">
          <h2 class="my-4">Our Team</h2>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="img/Lee.jpg" alt="" style="width: 200px;height: 200px">
          <h3>Chris Lee<br><small><i>CEO</i></small>
          </h3>
          <p>Chris brings the energy to Power Watch. He makes sure Power Watch is on track and stays true to its core values.</p>
        </div>

        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="img/Mellen.jpg" alt="" style="width:200px;height:200px;transform: rotate(90deg);">
          <h3>Michael Mellen<br><small><i>Chief Financial Officer</i></small>
          </h3>
          <p>Michael uses his expert business skills to deal with sales and plan for the future.</p>
        </div>

        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="img/Rakib.jpg" alt="" style="max-width:200px; max-height:200px;">
          <h3>Rakib Kamal<br><small><i>Chief Technology Officer</i></small>
          </h3>
          <p>Rakib is the mastermind of Power Watch technology. His innovations are what push Power Watch forward.</p>
        </div>
      </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>