
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
              <a class="nav-link js-scroll-trigger" href="http://localhost/powerWatch/signUp.php">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contactUs.html">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End of Navigation-->
<div class="container" style ="padding-top: 700px">
  <div class="container-sign">
    <form action="infosend.php" method="POST"> 
      <form class="form-signin">
        <h2 class="form-signin-heading" style="text-align: center;">Sign Up</h2>


        <label for="inputName" class="sr-only">Name</label>
        <a>Name:</a>
        <input type="name" id="inputName" class="form-control" placeholder="Name" name="Name" pattern="[a-zA-Z][a-zA-Z ]{1,}" autofocus required title="Name must contain only letters and spaces!">      
        
        <label for="inputEmail" class="sr-only">Email address</label>
        <a>Email:</a>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="Email" required autofocus>

        <label for="inputPassword" class="sr-only">Password</label>
        <a>Password:</a>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="Password" required>

        <label for="inputAddress" class="sr-only">Address</label>
        <a>Address:</a>
        <input type="address" id="inputAddress" class="form-control" placeholder="Address" name="Address" pattern="\w+(\s\w+){2,}" name="Address" autofocus required title="Enter a valid address">

        <label for="inputCity" class="sr-only">City</label>
        <a>City:</a>
        <input type="city" id="inputCity" class="form-control" placeholder="City" pattern="[a-zA-Z][a-zA-Z ]{1,}" name="City" autofocus required title="City must contain only letters and spaces!">
<!--
        <label for="inputState" class="sr-only">State</label>
        <input type="state" id="inputState" class="form-control" placeholder="State" name="State" required>
-->
        <a>State:</a>
        <select type="state" id="inputState" class="form-control" name="State" placeholder="State">
          <option value="state">State</option>
          <option value="AL">AL</option>
          <option value="AK">AK</option>
          <option value="AZ">AZ</option>
          <option value="AR">AR</option>
          <option value="CA">CA</option>
          <option value="CO">CO</option>
          <option value="CT">CT</option>
          <option value="DE">DE</option>
          <option value="FL">FL</option>
          <option value="GA">GA</option>
          <option value="HI">HI</option>
          <option value="ID">ID</option>
          <option value="IL">IL</option>
          <option value="IN">IN</option>
          <option value="IA">IA</option>
          <option value="KS">KS</option>
          <option value="KY">KY</option>
          <option value="LA">LA</option>
          <option value="ME">ME</option>
          <option value="MD">MD</option>
          <option value="MA">MA</option>
          <option value="MI">MI</option>
          <option value="MN">MN</option>
          <option value="MS">MS</option>
          <option value="MO">MO</option>
          <option value="MT">MT</option>
          <option value="NE">NE</option>
          <option value="NV">NV</option>
          <option value="NH">NH</option>
          <option value="NJ">NJ</option>
          <option value="NM">NM</option>
          <option value="NY">NY</option>
          <option value="NC">NC</option>
          <option value="ND">ND</option>
          <option value="OH">OH</option>
          <option value="OK">OK</option>
          <option value="OR">OR</option>
          <option value="PA">PA</option>
          <option value="RI">RI</option>
          <option value="SC">SC</option>
          <option value="SD">SD</option>
          <option value="TN">TN</option>
          <option value="TX">TX</option>
          <option value="UT">UT</option>
          <option value="VT">VT</option>
          <option value="VA">VA</option>
          <option value="WA">WA</option>
          <option value="WV">WV</option>
          <option value="WI">WI</option>
          <option value="WY">WY</option>
        </select>

        <label for="inputZipcode" class="sr-only">Zipcode</label>
        <a>Zip Code:</a>
        <input type="zipcode" id="inputZipcode" class="form-control" placeholder="Zipcode" name="Zipcode" pattern="^\d{5}(?:[-\s]\d{4})?$" autofocus required title="Must be a valid zipcode!">


        <!--<button class="btn btn-lg btn-primary btn-block" 
          type="submit"
        action = "submit"
       style="background-color: #a39d96">Sign Up</button>-->
       <input type="submit" value="Sign up">
      </form>

    </div> <!-- /container -->
  </div>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
