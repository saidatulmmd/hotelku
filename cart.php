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
      <link rel="stylesheet" type="text/css" href="inicss.css">
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
<br><br><br><br><br>
<form method="post" action="bookingup.php">
  <div class="row" style="margin-top:10px;">
        <?php
          echo '<p><h3>Your Booking List</h3></p>';
          if(isset($_SESSION['cart'])) {
            $total = 0;
            echo '<table align="center">';
            echo '<tr>';
            echo '<th>Code</th>';
            echo '<th>Hotel Name</th>';
            echo '<th>Quantity</th>';
            echo '<th>Price</th>';
            echo '<th>Name</th>';
            echo '<th>KTP Number</th>';
            echo '<th>Handphone Number</th>';
            echo '<th>Tanggal Check-In</th>';
            echo '<th>Tanggal Check-Out</th>';
            echo '</tr>';
            foreach($_SESSION['cart'] as $hotel_id => $quantity) {
            $result = $mysqli->query("SELECT code, nama, qty, harga FROM hotel WHERE id = ".$hotel_id);
            if($result){
              while($obj = $result->fetch_object()) {
                $cost = $obj->harga * $quantity;
                $total = $total + $cost;
                echo '<tr>';
                echo '<td>'.$obj->code.'</td>';
                echo '<td>'.$obj->nama.'</td>';                
                echo '<td>'.$quantity.'&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="upcart.php?action=add&id='.$hotel_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="upcart.php?action=remove&id='.$hotel_id.'">-</a></td>';
                echo '<td>Rp'.$cost.'.000</td>';
                echo '<td><input type="text" name="name"></td>';
                echo '<td><input type="text" name="noktp" ></td>';
                echo '<td><input type="text" name="nohp" ></td>';
                echo '<td><input type="date(dd/mm/yy)" name="tanggalcin"></td>';
                echo '<td><input type="date(dd/mm/yy)" name="tanggalco" ></td>';
              }
            }
          }
          echo '<tr>';
          echo '<td colspan="3" align="right">Total :</td>';
          echo '<td>Rp.'.$total.'.000</td>';
          echo '</tr>';
          echo '<tr>';
          echo '<td colspan="4" align="right"><a href="upcart.php?action=empty" class="button alert">Cancel All</a>&nbsp;';
          echo '<button type="submit" class="button alert" value="simpan">BOOKING</button>';
          echo '<tr><td colspan="5" align="right"><a href="booking.php" class="button alert">Continue Pick</a>';
          echo '</td>';
          echo '</tr>';
          echo '</table>';
        }
        else {
          echo "You have no items in your shopping cart.";
        }
          echo '</div>';
          echo '</div>';
          ?>
        </div>
        </form>
        <br><br><br>
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
