<?php
#--include -- 
$conn = mysqli_connect('localhost','root','','ecommerce');
if(! $conn){
	die('Could not connect: ' . mysqli_error());
}
#--End of include
session_start();

if(!isset($_SESSION['Name'])){
    header("Location: http://localhost/powerWatch/signUp.php?message=&welcomeMessage=");
  }
  
#Vortex reviews
$sql = "SELECT * FROM vortexreviews";
$result = mysqli_query($conn, $sql);
$counterVortex = 0;
$sum = 0;
$vortexAvg = 0;
if(mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_assoc($result)){
		$sum = $sum + $row["review"];
		$counterVortex = $counterVortex + 1;
	}
	$vortexAvg = $sum/$counterVortex;
}
#End vortex review

#Calculate numbers
#Percentage of 5
$sql="SELECT * FROM `vortexreviews` WHERE review=5";
$result = mysqli_query($conn, $sql);
$numOf5vortex = mysqli_num_rows($result);
$percOf5vortex = ($numOf5vortex/$counterVortex)*100;

#percentage of 4
$sql="SELECT * FROM `vortexreviews` WHERE review=4";
$result = mysqli_query($conn, $sql);
$numOf4vortex = mysqli_num_rows($result);
$percOf4vortex = ($numOf4vortex/$counterVortex)*100;

#percentage of 3
$sql="SELECT * FROM `vortexreviews` WHERE review=3";
$result = mysqli_query($conn, $sql);
$numOf3vortex = mysqli_num_rows($result);
$percOf3vortex = ($numOf3vortex/$counterVortex)*100;

#percentage of 2
$sql="SELECT * FROM `vortexreviews` WHERE review=2";
$result = mysqli_query($conn, $sql);
$numOf2vortex = mysqli_num_rows($result);
$percOf2vortex = ($numOf2vortex/$counterVortex)*100;

#percentage of 1
$sql="SELECT * FROM `vortexreviews` WHERE review=1";
$result = mysqli_query($conn, $sql);
$numOf1vortex = mysqli_num_rows($result);
$percOf1vortex = ($numOf1vortex/$counterVortex)*100;

#-----------------------------

#Knokia reviews
$sql = "SELECT * FROM knokiareviews";
$result = mysqli_query($conn, $sql);
$counterKnokia = 0;
$sum = 0;
$knokiaAvg = 0;
if(mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_assoc($result)){
		$sum = $sum + $row["review"];
		$counterKnokia = $counterKnokia + 1;
	}
	$knokiaAvg = $sum/$counterKnokia;
}
#End knokia review

#Calculate numbers
#Percentage of 5
$sql="SELECT * FROM `knokiareviews` WHERE review=5";
$result = mysqli_query($conn, $sql);
$numOf5knokia = mysqli_num_rows($result);
$percOf5knokia = ($numOf5knokia/$counterKnokia)*100;

#percentage of 4
$sql="SELECT * FROM `knokiareviews` WHERE review=4";
$result = mysqli_query($conn, $sql);
$numOf4knokia = mysqli_num_rows($result);
$percOf4knokia = ($numOf4knokia/$counterKnokia)*100;

#percentage of 3
$sql="SELECT * FROM `knokiareviews` WHERE review=3";
$result = mysqli_query($conn, $sql);
$numOf3knokia = mysqli_num_rows($result);
$percOf3knokia = ($numOf3knokia/$counterKnokia)*100;

#percentage of 2
$sql="SELECT * FROM `knokiareviews` WHERE review=2";
$result = mysqli_query($conn, $sql);
$numOf2knokia = mysqli_num_rows($result);
$percOf2knokia = ($numOf2knokia/$counterKnokia)*100;

#percentage of 1
$sql="SELECT * FROM `knokiareviews` WHERE review=1";
$result = mysqli_query($conn, $sql);
$numOf1knokia = mysqli_num_rows($result);
$percOf1knokia = ($numOf1knokia/$counterKnokia)*100;

#------Netero Reviews-------

#Netero reviews
$sql = "SELECT * FROM neteroreviews";
$result = mysqli_query($conn, $sql);
$counterNetero = 0;
$sum = 0;
$neteroAvg = 0;
if(mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_assoc($result)){
		$sum = $sum + $row["review"];
		$counterNetero = $counterNetero + 1;
	}
	$neteroAvg = $sum/$counterNetero;
}
#End netero review

#Percentage of 5
$sql="SELECT * FROM `neteroreviews` WHERE review=5";
$result = mysqli_query($conn, $sql);
$numOf5netero = mysqli_num_rows($result);
$percOf5netero = ($numOf5netero/$counterNetero)*100;

#percentage of 4
$sql="SELECT * FROM `neteroreviews` WHERE review=4";
$result = mysqli_query($conn, $sql);
$numOf4netero = mysqli_num_rows($result);
$percOf4netero = ($numOf4netero/$counterNetero)*100;

#percentage of 3
$sql="SELECT * FROM `neteroreviews` WHERE review=3";
$result = mysqli_query($conn, $sql);
$numOf3netero = mysqli_num_rows($result);
$percOf3netero = ($numOf3netero/$counterNetero)*100;

#percentage of 2
$sql="SELECT * FROM `neteroreviews` WHERE review=2";
$result = mysqli_query($conn, $sql);
$numOf2netero = mysqli_num_rows($result);
$percOf2netero = ($numOf2netero/$counterNetero)*100;

#percentage of 1
$sql="SELECT * FROM `neteroreviews` WHERE review=1";
$result = mysqli_query($conn, $sql);
$numOf1netero = mysqli_num_rows($result);
$percOf1netero = ($numOf1netero/$counterNetero)*100;

#------Mei Reviews-------

#Mei reviews
$sql = "SELECT * FROM meireviews";
$result = mysqli_query($conn, $sql);
$counterMei = 0;
$sum = 0;
$meiAvg = 0;
if(mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_assoc($result)){
		$sum = $sum + $row["review"];
		$counterMei = $counterMei + 1;
	}
	$meiAvg = $sum/$counterMei;
}
#End mei review

#Percentage of 5
$sql="SELECT * FROM `meireviews` WHERE review=5";
$result = mysqli_query($conn, $sql);
$numOf5mei = mysqli_num_rows($result);
$percOf5mei = ($numOf5mei/$counterMei)*100;

#percentage of 4
$sql="SELECT * FROM `meireviews` WHERE review=4";
$result = mysqli_query($conn, $sql);
$numOf4mei = mysqli_num_rows($result);
$percOf4mei = ($numOf4mei/$counterMei)*100;

#percentage of 3
$sql="SELECT * FROM `meireviews` WHERE review=3";
$result = mysqli_query($conn, $sql);
$numOf3mei = mysqli_num_rows($result);
$percOf3mei = ($numOf3mei/$counterMei)*100;

#percentage of 2
$sql="SELECT * FROM `meireviews` WHERE review=2";
$result = mysqli_query($conn, $sql);
$numOf2mei = mysqli_num_rows($result);
$percOf2mei = ($numOf2mei/$counterMei)*100;

#percentage of 1
$sql="SELECT * FROM `meireviews` WHERE review=1";
$result = mysqli_query($conn, $sql);
$numOf1mei = mysqli_num_rows($result);
$percOf1mei = ($numOf1mei/$counterMei)*100;

$mail = $_SESSION['Email'];
$sql = "SELECT Promo FROM customer_info WHERE Email='" .$mail. "'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if ($row["Promo"] == 1) {
  header("Location: http://localhost/powerWatch/Shoppage.php?voteMessage=You already used that Promo code!");
  exit();
}

$sql = "SELECT Weaver FROM customer_info WHERE Email='" .$mail. "'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if($row["Weaver"] != 1) {
  header("Location: http://localhost/powerWatch/Shoppage.php?voteMessage=Nice try hacker!");
}
?>

<html lang="en">

  <head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Power Watch - Shop</title>
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

    <!-- Page Content -->
    <div class="container" style="padding-top: 85px">


      <!-- Page Heading -->
      <div class="header">
      <center><h1 class="my-4">Power Watch Cases</h1></center>
    </div>
    <center><a style="color: red"><?php echo $_GET['voteMessage'];?></a></center><br/>
      <!-- Project One -->
      <div class="row">
        <div class="col-md-6">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="img/vortex.jpg" alt="vortex" style="max-width:300px; max-height:300px;margin-left: 200px;margin-top: 10px">
          </a>
        </div>
        <div class="col-md-5">
          <h3>Vortex 350</h3>
          <p>This is an authentic Smart Watch Case that is easily portable, small, and great to use for active lifestyles</p>
          
          <!-- Buy Button -->
          <div class="block">
          	<label>0.008 BTC</label>
            <!--<form action="buyPromo.php">-->
            <form action="https://test.bitpay.com/checkout" method="post" >
              <input type="hidden" name="action" value="checkout" />
              <input type="hidden" name="posData" value="" />
              <input type="hidden" name="data" value="ZIIfZSCIQCb/tOsLmQCOA0FPBgxzZbAUVLJ2ioQogoQqfy0Lri54QnF5KZkwQzuhf0AZXI948U4/GboRYPGMME9aRt9OB4V/GkuA/0RvW8918sCybotLO7A0pcrGmq/S+o8NfUEkHiRfpLvfEM32kGI+HCMoA0OMRAiSoVBz4znkNq44PVvfNywTNzNNsi/4" />
              <input type="image" src="https://test.bitpay.com/img/button-large.png" border="0" name="submit" alt="BitPay, the easy way to pay with bitcoins." >
            </form>
            <!--</form>-->
		      </div>
        <!-- End of button-->

        <!-- Product review-->
          <div class="container">
            <div class="row" style="margin-top:20px; margin-bottom: 20px">
               <div class="col-md-12">
               <!--form class="formtest"-->
                 <button type="button" class="btaval btn btn-success" data-toggle="collapse" data-target="#1" onClick="hide(this)">Leave a review</button>
                   <div id="1" class="collapse">
                     <div class="col-md-12 avaliar ">
                      <!-- Review Area-->
                      <h1 class="rating-num">Average: <?php echo round($vortexAvg, 2); ?></h1>
						  <div class="rating">
						   <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
						   </span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
						   </span><span class="glyphicon glyphicon-star-empty"></span>
						  </div>
<!-- ____________________________ -->
                   <form action="voteVortex.php" method="POST">
                      <div>
                        <input type="radio" id="1starVortex"
                         name="starV" value="1">
                        <label for="contactChoice1">1</label>

                        <input type="radio" id="2starVortex"
                         name="starV" value="2">
                        <label for="contactChoice2">2</label>

                        <input type="radio" id="3starVortex"
                         name="starV" value="3">
                        <label for="contactChoice3">3</label>

                        <input type="radio" id="4starVortex"
                         name="starV" value="4">
                        <label for="contactChoice3">4</label>

                        <input type="radio" id="5starVortex"
                         name="starV" value="5">
                        <label for="contactChoice3">5</label>
                      </div>
                    
    <!-- ____________________________ -->						   
              <div>
						     <span class="glyphicon glyphicon-user"></span><?php echo $counterVortex; ?> total
						   </div>

						  <div class="col-xs-6 col-md-6">
						    <div class="row rating-desc">

						         <div class="col-xs-3 col-md-3 text-right">
						           <span class="glyphicon glyphicon-star"></span>5
						         </div>

						         <div class="col-xs-8 col-md-9">
						           <div class="progress progress-striped">
						             <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
						                                            aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "$percOf5vortex";?>%">
						                <span class="sr-only"><?php echo "$percOf5vortex";?>%</span>
						             </div>
						           </div>
						         </div>
						         <!-- end 5 -->
						         <div class="col-xs-3 col-md-3 text-right">
						            <span class="glyphicon glyphicon-star"></span>4
						         </div>


						         <div class="col-xs-8 col-md-9">
						            <div class="progress">
						                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
						                                       aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "$percOf4vortex";?>%">
						                    <span class="sr-only"><?php echo "$percOf4vortex";?>%</span>
						                </div>
						            </div>
						         </div>


						         <!-- end 4 -->
						         <div class="col-xs-3 col-md-3 text-right">
						             <span class="glyphicon glyphicon-star"></span>3
						         </div>


						         <div class="col-xs-8 col-md-9">
						              <div class="progress">
						                   <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
						                                        aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "$percOf3vortex";?>%">
						                          <span class="sr-only"><?php echo "$percOf3vortex";?>%</span>
						                   </div>
						              </div>
						         </div>
						        <!-- end 3 -->
						         <div class="col-xs-3 col-md-3 text-right">
						           <span class="glyphicon glyphicon-star"></span>2
						         </div>

						         <div class="col-xs-8 col-md-9">
						            <div class="progress">
						               <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20"
						                                       aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "$percOf2vortex";?>%">
						                  <span class="sr-only"><?php echo "$percOf2vortex";?>%</span>
						               </div>
						            </div>
						         </div>


						        <!-- end 2 -->
						        <div class="col-xs-3 col-md-3 text-right">
						           <span class="glyphicon glyphicon-star"></span>1
						        </div>

						        <div class="col-xs-8 col-md-9">
						            <div class="progress">
						               <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
						                                       aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "$percOf1vortex";?>%">
						                  <span class="sr-only"><?php echo "$percOf1vortex";?>%</span>
						               </div>
						            </div>
						      </div>

						                            <!-- end 1 -->
						     </div>
						                        <!-- end row -->
						   </div>
                      <!-- End of Review Area-->
                <div class="text-right">  
                  <button class="btn btn-success" type="submit" >Submit <i class="fa fa-reply"></i> </button>
                  <span class="btn btn-danger" data-toggle="collapse" data-target="#1" onClick="mostrar()">Cancel <i class="fa fa-times"></i> </span></form>
                </div>  
            </div>
          </div>  
        <!--/form-->
        </div>    
        </div>
        </div>
        <!-- End of Product review-->

        </div>
      </div>
      <!-- /.row -->

      <!-- Project Two -->
      <div class="row">
        <div class="col-md-6">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="img/knokia.jpg" alt="knokia" style="max-width:300px; max-height:300px;margin-left: 200px;margin-top: 50px">
          </a>
        </div>
        <div class="col-md-5">
          <h3>The Knokia</h3>
          <p>Feel protected with our most durable case, The Knokia. With a Valyrian Steel interior, this case will tough it during your wildest adventures.</p>
          <div class="block">
          	<label>0.008 BTC</label>
          <!-- Button -->
    			  <form action="https://test.bitpay.com/checkout" method="post" >
              <input type="hidden" name="action" value="checkout" />
              <input type="hidden" name="posData" value="" />
              <input type="hidden" name="data" value="ZIIfZSCIQCb/tOsLmQCOA0FPBgxzZbAUVLJ2ioQogoQqfy0Lri54QnF5KZkwQzuhf0AZXI948U4/GboRYPGMME9aRt9OB4V/GkuA/0RvW8918sCybotLO7A0pcrGmq/S+o8NfUEkHiRfpLvfEM32kGI+HCMoA0OMRAiSoVBz4znkNq44PVvfNywTNzNNsi/4" />
              <input type="image" src="https://test.bitpay.com/img/button-large.png" border="0" name="submit" alt="BitPay, the easy way to pay with bitcoins." >
            </form>
		      </div>
		<!-- End of button-->
		<!-- Product review-->
          <div class="container">
            <div class="row" style="margin-top:20px; margin-bottom: 20px">
               <div class="col-md-12">
               <!--form class="formtest"-->
                 <button type="button" class="btaval btn btn-success" data-toggle="collapse" data-target="#2" onClick="esconder(this)">Leave a review</button>
                   <div id="2" class="collapse">
                     <div class="col-md-12 avaliar ">
                      <!-- Review Area-->
                      <h1 class="rating-num">Average: <?php echo round($knokiaAvg, 2); ?></h1>
						  <div class="rating">
						   <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
						   </span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
						   </span><span class="glyphicon glyphicon-star-empty"></span>
						  </div>
<!-- ____________________________ -->
                   <form action="voteKnokia.php" method="POST">
                      <div>
                        <input type="radio" id="1starKnokia"
                         name="starK" value="1">
                        <label for="contactChoice1">1</label>

                        <input type="radio" id="2starKnokia"
                         name="starK" value="2">
                        <label for="contactChoice2">2</label>

                        <input type="radio" id="3starKnokia"
                         name="starK" value="3">
                        <label for="contactChoice3">3</label>

                        <input type="radio" id="4starKnokia"
                         name="starK" value="4">
                        <label for="contactChoice3">4</label>

                        <input type="radio" id="5starKnokia"
                         name="starK" value="5">
                        <label for="contactChoice3">5</label>
                      </div>
                    
    <!-- ____________________________ -->   
						   <div>
						     <span class="glyphicon glyphicon-user"></span><?php echo $counterKnokia; ?> total
						   </div>

						  <div class="col-xs-6 col-md-6">
						    <div class="row rating-desc">

						         <div class="col-xs-3 col-md-3 text-right">
						           <span class="glyphicon glyphicon-star"></span>5
						         </div>

						         <div class="col-xs-8 col-md-9">
						           <div class="progress progress-striped">
						             <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
						                                            aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "$percOf5knokia";?>%">
						                <span class="sr-only"><?php echo "$percOf5knokia";?>%</span>
						             </div>
						           </div>
						         </div>
						         <!-- end 5 -->
						         <div class="col-xs-3 col-md-3 text-right">
						            <span class="glyphicon glyphicon-star"></span>4
						         </div>


						         <div class="col-xs-8 col-md-9">
						            <div class="progress">
						                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
						                                       aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "$percOf4knokia";?>%">
						                    <span class="sr-only"><?php echo "$percOf4knokia";?>%</span>
						                </div>
						            </div>
						         </div>


						         <!-- end 4 -->
						         <div class="col-xs-3 col-md-3 text-right">
						             <span class="glyphicon glyphicon-star"></span>3
						         </div>


						         <div class="col-xs-8 col-md-9">
						              <div class="progress">
						                   <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
						                                        aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "$percOf3knokia";?>%">
						                          <span class="sr-only"><?php echo "$percOf3knokia";?>%</span>
						                   </div>
						              </div>
						         </div>
						        <!-- end 3 -->
						         <div class="col-xs-3 col-md-3 text-right">
						           <span class="glyphicon glyphicon-star"></span>2
						         </div>

						         <div class="col-xs-8 col-md-9">
						            <div class="progress">
						               <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20"
						                                       aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "$percOf2knokia";?>%">
						                  <span class="sr-only"><?php echo "$percOf2knokia";?>%</span>
						               </div>
						            </div>
						         </div>


						        <!-- end 2 -->
						        <div class="col-xs-3 col-md-3 text-right">
						           <span class="glyphicon glyphicon-star"></span>1
						        </div>

						        <div class="col-xs-8 col-md-9">
						            <div class="progress">
						               <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
						                                       aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "$percOf1knokia";?>%">
						                  <span class="sr-only"><?php echo "$percOf1knokia";?>%</span>
						               </div>
						            </div>
						      </div>

						                            <!-- end 1 -->
						     </div>
						                        <!-- end row -->
						   </div>
                      <!-- End of Review Area-->
                <div class="text-right">  
                  <button class="btn btn-success" type="submit">Submit <i class="fa fa-reply"></i> </button>
                  <span class="btn btn-danger" data-toggle="collapse" data-target="#2" onClick="mostrar()">Cancel <i class="fa fa-times"></i> </span></form>
                </div>  
            </div>
          </div>  
        <!--/form-->
        </div>    
        </div>
        </div>
        <!-- End of Product review-->

        </div>
      </div>
      <!-- /.row -->


      <!-- Project Three -->
      <div class="row">
        <div class="col-md-6">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="img/netero.jpg" alt="netero" style="max-width:300px; max-height:300px;margin-left: 230px">
          </a>
        </div>
        <div class="col-md-5">
          <h3>Netero</h3>
          <p>With inner linings made of Diamonds, this extravagent Watch Case oozes luxury. </p>
          <div class="block">
          	 <label>0.04 BTC</label>
         <!-- Buy Button -->
            <form action="https://test.bitpay.com/checkout" method="post" >
              <input type="hidden" name="action" value="checkout" />
              <input type="hidden" name="posData" value="" />
              <input type="hidden" name="data" value="ZIIfZSCIQCb/tOsLmQCOA0FPBgxzZbAUVLJ2ioQogoQqfy0Lri54QnF5KZkwQzuhf0AZXI948U4/GboRYPGMMMozBqfZXUhgEWM9r1HYVwwIjrV5EJuNlh5KtE+Edlokdf27DUif5CBeJyuu+FFhK95ta5QoJZJ4fVBYg8uj0XhVXU15/7wuU7uFhTP/BGXj" />
              <input type="image" src="https://test.bitpay.com/img/button-large.png" border="0" name="submit" alt="BitPay, the easy way to pay with bitcoins." >
            </form>
			   </div>
        <!-- End of button-->
        <!-- Product review-->
          <div class="container">
            <div class="row" style="margin-top:20px; margin-bottom: 20px">
               <div class="col-md-12">
               <!--form class="formtest"-->
                 <button type="button" class="btaval btn btn-success" data-toggle="collapse" data-target="#3" onClick="esconder(this)">Leave a review</button>
                   <div id="3" class="collapse">
                   	<div class="col-md-12 avaliar ">
                     <!-- Review Area-->
                      <h1 class="rating-num">Average: <?php echo round($neteroAvg,2); ?></h1>
						  <div class="rating">
						   <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
						   </span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
						   </span><span class="glyphicon glyphicon-star-empty"></span>
						  </div>
<!-- ____________________________ -->
                   <form action="voteNetero.php" method="POST">
                      <div>
                        <input type="radio" id="1starNetero"
                         name="starN" value="1">
                        <label for="contactChoice1">1</label>

                        <input type="radio" id="2starNetero"
                         name="starN" value="2">
                        <label for="contactChoice2">2</label>

                        <input type="radio" id="3starNetero"
                         name="starN" value="3">
                        <label for="contactChoice3">3</label>

                        <input type="radio" id="4starNetero"
                         name="starN" value="4">
                        <label for="contactChoice3">4</label>

                        <input type="radio" id="5starNetero"
                         name="starN" value="5">
                        <label for="contactChoice3">5</label>
                      </div>
                    
    <!-- ____________________________ -->  
						   <div>
						     <span class="glyphicon glyphicon-user"></span><?php echo $counterNetero; ?> total
						   </div>

						  <div class="col-xs-6 col-md-6">
						    <div class="row rating-desc">

						         <div class="col-xs-3 col-md-3 text-right">
						           <span class="glyphicon glyphicon-star"></span>5
						         </div>

						         <div class="col-xs-8 col-md-9">
						           <div class="progress progress-striped">
						             <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
						       aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "$percOf5netero";?>%">
						                <span class="sr-only"><?php echo "$percOf5netero";?>%</span>
						             </div>
						           </div>
						         </div>
						         <!-- end 5 -->
						         <div class="col-xs-3 col-md-3 text-right">
						            <span class="glyphicon glyphicon-star"></span>4
						         </div>


						         <div class="col-xs-8 col-md-9">
						            <div class="progress">
						                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
						                   aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "$percOf4netero";?>%">
						                    <span class="sr-only"><?php echo "$percOf4netero";?>%</span>
						                </div>
						            </div>
						         </div>


						         <!-- end 4 -->
						         <div class="col-xs-3 col-md-3 text-right">
						             <span class="glyphicon glyphicon-star"></span>3
						         </div>


						         <div class="col-xs-8 col-md-9">
						              <div class="progress">
						                   <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
						                                        aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "$percOf3netero";?>%">
						                          <span class="sr-only"><?php echo "$percOf3netero";?>%</span>
						                   </div>
						              </div>
						         </div>
						        <!-- end 3 -->
						         <div class="col-xs-3 col-md-3 text-right">
						           <span class="glyphicon glyphicon-star"></span>2
						         </div>

						         <div class="col-xs-8 col-md-9">
						            <div class="progress">
						               <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20"
						                                       aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "$percOf2netero";?>%">
						                  <span class="sr-only"><?php echo "$percOf2netero";?>%</span>
						               </div>
						            </div>
						         </div>


						        <!-- end 2 -->
						        <div class="col-xs-3 col-md-3 text-right">
						           <span class="glyphicon glyphicon-star"></span>1
						        </div>

						        <div class="col-xs-8 col-md-9">
						            <div class="progress">
						               <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
						                                       aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "$percOf1netero";?>%">
						                  <span class="sr-only"><?php echo "$percOf1netero";?>%</span>
						               </div>
						            </div>
						      </div>

						                            <!-- end 1 -->
						     </div>
						                        <!-- end row -->
						   </div>
                      <!-- End of Review Area-->
                <div class="text-right">  
                  <button class="btn btn-success" type="submit">Submit <i class="fa fa-reply"></i> </button>
                  <span class="btn btn-danger" data-toggle="collapse" data-target="#3" onClick="mostrar()">Cancel <i class="fa fa-times"></i> </span></form>
                </div>  
            </div>
          </div>  
        <!--/form-->
        </div>    
        </div>
        </div>
        <!-- End of Product review-->
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Project Four -->
      <div class="row">

        <div class="col-md-6">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="img/mei.jpg" alt="mei" style="max-width:300px; max-height:300px;margin-left: 230px;">
          </a>
        </div>
        <div class="col-md-5">
          <h3>Mei</h3>
          <p>Feel protected with wearing Mei, our 500ft water proof Watch Case, with temperature regulating technology. </p>
          <div class="block">
          	<label>0.008 BTC</label>
          <!-- Buy Button -->
            <form action="https://test.bitpay.com/checkout" method="post" >
              <input type="hidden" name="action" value="checkout" />
              <input type="hidden" name="posData" value="" />
              <input type="hidden" name="data" value="ZIIfZSCIQCb/tOsLmQCOA0FPBgxzZbAUVLJ2ioQogoQqfy0Lri54QnF5KZkwQzuhf0AZXI948U4/GboRYPGMME9aRt9OB4V/GkuA/0RvW8918sCybotLO7A0pcrGmq/S+o8NfUEkHiRfpLvfEM32kGI+HCMoA0OMRAiSoVBz4znkNq44PVvfNywTNzNNsi/4" />
              <input type="image" src="https://test.bitpay.com/img/button-large.png" border="0" name="submit" alt="BitPay, the easy way to pay with bitcoins." >
            </form>
		      </div>
        <!-- End of button-->
        <!-- Product review-->
          <div class="container">
            <div class="row" style="margin-top:20px; margin-bottom: 20px">
               <div class="col-md-12">
               <!--form class="formtest"-->
                 <button type="button" class="btaval btn btn-success" data-toggle="collapse" data-target="#4" onClick="esconder(this)">Leave a review</button>
                   <div id="4" class="collapse">
                     <div class="col-md-12 avaliar ">
                      <!-- Review Area-->
                      <h1 class="rating-num">Average: <?php echo round($meiAvg, 2); ?></h1>
						  <div class="rating">
						   <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
						   </span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
						   </span><span class="glyphicon glyphicon-star-empty"></span>
						  </div>
<!-- ____________________________ -->
                   <form action="voteMei.php" method="POST">
                      <div>
                        <input type="radio" id="1starMei"
                         name="starM" value="1">
                        <label for="contactChoice1">1</label>

                        <input type="radio" id="2starMei"
                         name="starM" value="2">
                        <label for="contactChoice2">2</label>

                        <input type="radio" id="3starMei"
                         name="starM" value="3">
                        <label for="contactChoice3">3</label>

                        <input type="radio" id="4starMei"
                         name="starM" value="4">
                        <label for="contactChoice3">4</label>

                        <input type="radio" id="5starMei"
                         name="starM" value="5">
                        <label for="contactChoice3">5</label>
                      </div>
                    
    <!-- ____________________________ --> 
						   <div>
						     <span class="glyphicon glyphicon-user"></span><?php echo $counterMei; ?> total
						   </div>

						  <div class="col-xs-6 col-md-6">
						    <div class="row rating-desc">

						         <div class="col-xs-3 col-md-3 text-right">
						           <span class="glyphicon glyphicon-star"></span>5
						         </div>

						         <div class="col-xs-8 col-md-9">
						           <div class="progress progress-striped">
						             <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
						                                            aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "$percOf5mei";?>%">
						                <span class="sr-only"><?php echo "$percOf5mei";?>%</span>
						             </div>
						           </div>
						         </div>
						         <!-- end 5 -->
						         <div class="col-xs-3 col-md-3 text-right">
						            <span class="glyphicon glyphicon-star"></span>4
						         </div>


						         <div class="col-xs-8 col-md-9">
						            <div class="progress">
						                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
						                                       aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "$percOf4mei";?>%">
						                    <span class="sr-only"><?php echo "$percOf4mei";?>%</span>
						                </div>
						            </div>
						         </div>


						         <!-- end 4 -->
						         <div class="col-xs-3 col-md-3 text-right">
						             <span class="glyphicon glyphicon-star"></span>3
						         </div>


						         <div class="col-xs-8 col-md-9">
						              <div class="progress">
						                   <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
						                                        aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "$percOf3mei";?>%">
						                          <span class="sr-only"><?php echo "$percOf3mei";?>%</span>
						                   </div>
						              </div>
						         </div>
						        <!-- end 3 -->
						         <div class="col-xs-3 col-md-3 text-right">
						           <span class="glyphicon glyphicon-star"></span>2
						         </div>

						         <div class="col-xs-8 col-md-9">
						            <div class="progress">
						               <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20"
						                                       aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "$percOf2mei";?>%">
						                  <span class="sr-only"><?php echo "$percOf2mei";?>%</span>
						               </div>
						            </div>
						         </div>


						        <!-- end 2 -->
						        <div class="col-xs-3 col-md-3 text-right">
						           <span class="glyphicon glyphicon-star"></span>1
						        </div>

						        <div class="col-xs-8 col-md-9">
						            <div class="progress">
						               <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
						                                       aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "$percOf1mei";?>%">
						                  <span class="sr-only"><?php echo "$percOf1mei";?>%</span>
						               </div>
						            </div>
						      </div>

						                            <!-- end 1 -->
						     </div>
						                        <!-- end row -->
						   </div>
                      <!-- End of Review Area-->
                <div class="text-right">  
                  <button class="btn btn-success" type="submit" >Submit <i class="fa fa-reply"></i> </button>
                  <span class="btn btn-danger" data-toggle="collapse" data-target="#4" onClick="mostrar()">Cancel <i class="fa fa-times"></i> </span></form>
                </div>  
            </div>
          </div>  
        <!--/form-->
        </div>    
        </div>
    	</div>
        <!-- End of Product review-->
        </div>
      </div>
      <!-- /.row -->
      <hr>
    </div>
    <!-- /.container -->
</div>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Power Watch 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>