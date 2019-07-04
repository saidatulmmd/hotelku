<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
?>

<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Welcome To Hotel X</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Hotel X Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
          setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
          window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
     <link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
      <!-- //font-awesome icons -->
    <link href="css/simpleLightbox.css" rel='stylesheet' type='text/css' />
      <!--stylesheets-->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
  <link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
   </head>
   <body>
   <!-- Navigation -->
<header>
  <div class="top-nav">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand text-uppercase" href="index.php">Back to Homepage</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
    </div>
  </div>
</header>

<div class="plans-section py-5" id="rooms">
         <div class="container py-md-3">
          <div class="w3-head-all mb-3">
            <br><br>
             <h3>Pick Your Room</h3>
           </div>
            <div class="priceing-table-main">
       <div class="row">
	<?php
	$i = 0;
	$hotel_id = array();
    $hotel_quantity = array();
	$result = $mysqli->query('SELECT * FROM hotel');
	if ($result === FALSE){
		die (mysql_error());
	}

	if($result){
            while($obj = $result->fetch_object()) {
              echo '<div class="col-lg-3 col-md-6 col-sm-6 price-grid">';
              echo '<div class="price-block agile">';
              echo '<div class="price-gd-top">';
              echo '<img src="images/'.$obj->image.'" alt=" " class="img-responsive img-fluid"/>';
              echo '<br><br>';
              echo '<p><h3><strong>'.$obj->nama.'</strong></h3></p>';
              echo '</div>';
              echo '<div class="price-gd-bottom">';
              echo '<p>'.$obj->deskripsi.'</p>';
              echo '<div class="price-selet">';
              echo '<p><span>Rp.</span>'.$obj->harga.'.</p>';
              echo '<br>';
              
              if($obj->qty > 0){
                echo '<p><a href="upcart.php?action=add&id='.$obj->id.'" class="scroll" ><input type="submit" value="Add To Booking List" style="clear:both; background: transparent; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
              }
              else {
                echo 'Out Of Stock!';
              }
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';


              $i++;
            }
          }
          $_SESSION['hotel_id'] = $hotel_id;
          ?>
</div>;
<section class="newsletter text-center py-5">
  <div class="container py-lg-3">
    <div class="subscribe_inner">
      <h4 class="mb-4">Subscribe Us</h4>
      <p class="mb-4">Subscribe to our Newsletter to get latest offers from our Hotel. </p>
      <form action="#" method="post" class="subscribe_form">
        <input class="form-control" type="email" placeholder="Enter Your Email..." required="">
        <button type="submit" class="btn1 btn-primary submit"><i class="fas fa-paper-plane" aria-hidden="true"></i></button>
      </form>
      <div class="social mt-5">
        <ul class="d-flex mt-4 justify-content-center">
          <li class="mx-2"><a href="http://facebook.com"><span class="fab fa-facebook-f"></span></a></li>
          <li class="mx-2"><a href="http://twitter.com"><span class="fab fa-twitter"></span></a></li>
          <li class="mx-2"><a href="http://linkedin.com"><span class="fab fa-linkedin-in"></span></a></li>
          <li class="mx-2"><a href="http://plus.google.com"><span class="fab fa-google-plus"></span></a></li>
        </ul>
      </div>
    </div>
    <div class="copyright mt-5">
      <p>© 2018 Hotel X. All Rights Reserved </p>
    </div>
  </div>
</section>
</body>
</html>