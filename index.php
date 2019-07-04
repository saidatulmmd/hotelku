<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
?>

<!DOCTYPE html>
<html>
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
        <a class="navbar-brand text-uppercase" href="booking.php">Booking Now</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center pr-md-4" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link scroll" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link scroll" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link scroll" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link scroll" href="#rooms">Room</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link scroll" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- //Navigation -->
<!--Slider-->
<div class="slider">
  <div class="callbacks_container">
    <ul class="rslides callbacks callbacks1" id="slider4">
      <li>
        <div class="slider-img1">
          <div class="dot">
            <div class="container">
              <div class="slider_banner_info_w3ls">
                <h1 class="text-uppercase mb-3">Enjoy the greatest pleasure in our hotel </h1>
                <p>Hotel kami menyediakan beberapa fasilitas dan kenyamanan untuk kepuasan anda.</p>

                <a href="single.html" class="read" data-toggle="modal" data-target="#exampleModalCenter" role="button">Read more </a>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li>
        <div class="slider-img2">
          <div class="dot">
            <div class="container">
              <div class="slider_banner_info_w3ls">
                <h4 class="text-uppercase mb-3">Enjoy the food and rooms in our hotel</h4>
                <p>Hotel kami menyajikan makanan berkualitas yang dimasak oleh chef profesional.</p>

                <a href="#" class="read" data-toggle="modal" data-target="#exampleModalCenter" role="button">Read more </a>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li>
        <div class="slider-img3">
          <div class="dot">
            <div class="container">
              <div class="slider_banner_info_w3ls">
                <h4 class="text-uppercase mb-3">Enjoy the best services in our hotel</h4>
                <p>Kami menyediakan pelayanan yang ramah.</p>

                <a href="#" class="read" data-toggle="modal" data-target="#exampleModalCenter" role="button">Read more </a>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li>
        <div class="slider-img4">
          <div class="dot">
            <div class="container">
              <div class="slider_banner_info_w3ls">
                  <h4 class="text-uppercase mb-3">Enjoy the food and rooms in our hotel</h4>
                <p>Hotel kami menyajikan makanan berkualitas yang dimasak oleh chef profesional.</p>

                <a href="#" class="read" data-toggle="modal" data-target="#exampleModalCenter" role="button">Read more </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <div class="clearfix"></div>
    </ul>
</div>

<!--//Slider-->
      <!-- //banner -->
    <!-- welcome -->
<div class="welcome py-5" id="about"> 
  <div class="container py-md-3">
    <div class="row">
    <div class="col-lg-6 welcome-w3lright">
      <div class="video-grid-single-page-agileits">
       <img src="images/w1.png" alt="" class="img-responsive img-fluid" />
      </div>
    </div> 
    <div class="col-lg-6 welcome_left">
      <h3 class="agileits-title">Welcome To Our Hotel</h3>
      <h4>Hotel X</h4>
      <p>Hotel X Didirikan Oleh Mahasiswa Sistem Informasi A</p>
      <p>- Saidatul Mahmuda (173140914111017)</p>  

    </div>
      </div>
    <div class="clearfix"> </div>
  </div> 
</div>
<!-- //welcome -->

    <!-- services -->
  <div class="services py-5" id="services">
    <div class="container py-md-3">
    <div class="w3-head-all mb-3 w3-head-col">
             <h3>Our Services</h3>
           </div>
      <div class="row w3-services-grids mt-md-5 mt-3">
        <div class="col-md-4 w3l-services-grid">
          <div class="w3ls-services-img">
            <i class="fas fa-home"></i>
          </div>
          <div class="agileits-services-info">
            <h4 class="my-sm-3 my-2">Largest Hotel</h4>
            <p>Kami memiliki hotel yang luas. </p>
          </div>
        </div>
        <div class="col-md-4 w3l-services-grid mt-sm-5 mt-3">
          <div class="w3ls-services-img">
            <i class="fas fa-globe"></i>
          </div>
          <div class="agileits-services-info">
            <h4 class="my-sm-3 my-2">Larges Destinations</h4>
            <p>Hotel kami dekat dengan beberapa wisata </p>
          </div>
        </div>
        <div class="col-md-4 w3l-services-grid mt-sm-5 mt-3">
          <div class="w3ls-services-img mt-md-5 ">
            <i class="fas fa-utensils"></i>
          </div>
          <div class="agileits-services-info">
            <h4 class="my-sm-3 my-2">Tasty Food</h4>
            <p>Menyajikan makanan yang dimasak oleh chef profesional</p>
          </div>
        </div>
      </div>
      <div class="row w3-services-grids">
        <div class="col-md-4 w3l-services-grid mt-md-0 mt-sm-5 mt-3">
          <div class="w3ls-services-img">
            <i class="fas fa-bed"></i>
          </div>
          <div class="agileits-services-info">
            <h4 class="my-sm-3 my-2">Modern rooms</h4>
            <p>Menyediakan kamar yang bernuansa modern dan kenyamanan anda adalah prioritas kami </p>
          </div>
        </div>
        <div class="col-md-4 w3l-services-grid mt-sm-5 mt-3">
          <div class="w3ls-services-img">
            <i class="fas fa-users"></i>
          </div>
          <div class="agileits-services-info">
            <h4 class="my-sm-3 my-2">100% satisfied customers</h4>
            <p>Memberikan kepuasan kepada pelanggan yang menginap di hotel X. </p>
          </div>
        </div>
        <div class="col-md-4 w3l-services-grid mt-sm-5 mt-3">
          <div class="w3ls-services-img mt-md-5">
            <i class="fas fa-phone"></i>
          </div>
          <div class="agileits-services-info">
            <h4 class="my-sm-3 my-2">24x7 Customer Support</h4>
            <p>Pelayanan Pelanggan 24 Jam, jika pelanggan memiliki kendala CS kami siap melayani anda kapanpun. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- //services -->
      <!--/Gallry-->
  <div class="banner-bottom py-5" id="gallery">
    <div class="container py-md-3">
       <div class="w3-head-all mb-3">
             <h3>Our Gallery</h3>
           </div>
      <div class="row inner-sec">

        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 proj_gallery_grid" data-aos="zoom-in">
          <div class="section_1_gallery_grid">
            <a title="Couple Room <br> Rp. 1.700.000" href="images/g1.jpg" class="img-fluid">
              <div class="section_1_gallery_grid1">
                <img src="images/g1.jpg" alt=" " class="img-fluid" />
                <div class="proj_gallery_grid1_pos">
                  <h3>Hotel X</h3>
                  <p>Couple Room</p>
                </div>
              </div>
            </a>
          </div>
          <div class="section_1_gallery_grid" data-aos="zoom-in">
            <a title="Family Room <br> Rp. 2.400.000" href="images/g2.jpg" class="img-fluid">
              <div class="section_1_gallery_grid1">
                <img src="images/g2.jpg" alt=" " class="img-fluid" />
                <div class="proj_gallery_grid1_pos">
                  <h3>Hotel X</h3>
                  <p>Family Room</p>
                </div>
              </div>
            </a>
          </div>

        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 proj_gallery_grid" data-aos="zoom-in">
          <div class="section_1_gallery_grid">
            <a title="Lounge Room <br> Free Entry. Food Available At Different Prices" href="images/g3.jpg" class="img-fluid">
              <div class="section_1_gallery_grid1">
                <img src="images/g3.jpg" alt=" " class="img-fluid" />
                <div class="proj_gallery_grid1_pos">
                  <h3>Hotel X</h3>
                  <p>Lounge Room</p>
                </div>
              </div>
            </a>
          </div>
          <div class="section_1_gallery_grid" data-aos="zoom-in">
            <a title="Dessert <br> Food Available At Different Prices" href="images/g4.jpg" class="img-fluid">
              <div class="section_1_gallery_grid1">
                <img src="images/g4.jpg" alt=" " class="img-fluid" />
                <div class="proj_gallery_grid1_pos">
                  <h3>Hotel X</h3>
                  <p>Dessert</p>
                </div>
              </div>
            </a>
          </div>

        </div>
    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 proj_gallery_grid" data-aos="zoom-in">
        <div class="row">
        <div class="col-lg-12 col-md-6 col-sm-6 pr-lg-3 pr-2 section_1_gallery_grid">
        <a title="Cafe <br> Free Entry. Food Available At Different Prices" href="images/g5.jpg" class="img-fluid">
        <div class="section_1_gallery_grid1">
        <img src="images/g5.jpg" alt=" " class="img-fluid">
        <div class="proj_gallery_grid1_pos">
        <h3>Hotel X</h3>
        <p>Cafe</p>
        </div>
        </div>
        </a>
        </div>
        <div class="col-lg-12 col-md-6 col-sm-6 pl-lg-3 pl-2 section_1_gallery_grid" data-aos="zoom-in">
        <a title="Cream & Fruits <br> Food Available At Different Prices" href="images/g6.jpg" class="img-fluid">
        <div class="section_1_gallery_grid1">
        <img src="images/g6.jpg" alt=" " class="img-fluid">
        <div class="proj_gallery_grid1_pos">
        <h3>Hotel X</h3>
        <p>Ice Cream & Fruits</p>
        </div>
        </div>
        </a>
        </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  <!--//gallery-->
  <!-- odometer stats-->
<section class="odometer1">
  <div class="layer py-5">
    <div class="container py-md-3">
      <div class="w3-head-all mb-3 w3-head-col">
             <h3>Company Stats</h3>
           </div>
      <div class="row w3layouts_statistics_grid_right">
        <div class="col-sm-3 col-6 text-center w3_stats_grid">
          <h3 id="w3l_stats1" class="odometer">0</h3>
          <p class="mt-2">Branches</p>
        </div>
        <div class="col-sm-3 col-6 text-center w3_stats_grid">
          <h3 id="w3l_stats2" class="odometer">0</h3>
          <p class="mt-2">Clients</p>
        </div>
        <div class="col-sm-3 col-6 mt-sm-0 mt-4 text-center w3_stats_grid">
          <h3 id="w3l_stats3" class="odometer">0</h3>
          <p class="mt-2">Team</p>
        </div>
        <div class="col-sm-3 col-6 mt-sm-0 mt-4 text-center w3_stats_grid">
          <h3 id="w3l_stats4" class="odometer">0</h3>
          <p class="mt-2">Reviews</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //odometer stats -->


   <!-- rooms & rates -->
      <div class="plans-section py-5" id="rooms">
         <div class="container py-md-3">
          <div class="w3-head-all mb-3">
             <h3>Rooms And Rates</h3>
           </div>
            <div class="priceing-table-main">
       <div class="row">
         <div class="col-lg-3 col-md-6 col-sm-6 price-grid">
          <div class="price-block agile">
            <div class="price-gd-top">
            <img src="images/r1.jpg" alt=" " class="img-responsive img-fluid" />
              <h4>Deluxe Room</h4>
            </div>
            <div class="price-gd-bottom">
                 <div class="price-list">
                  <ul>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  
                     </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 price-grid ">
          <div class="price-block agile">
            <div class="price-gd-top">
            <img src="images/r2.jpg" alt=" " class="img-responsive img-fluid" />
              <h4>Luxury Room</h4>
            </div>
            <div class="price-gd-bottom">
              <div class="price-list">
                  <ul>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 price-grid lost">
          <div class="price-block agile">
            <div class="price-gd-top">
            <img src="images/r3.jpg" alt=" " class="img-responsive img-fluid" />
              <h4>Breakfast Package</h4>
            </div>
            <div class="price-gd-bottom">
              <div class="price-list">
                <ul>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 price-grid wthree lost">
          <div class="price-block agile">
            <div class="price-gd-top ">
              <img src="images/r4.jpg" alt=" " class="img-responsive img-fluid" />
              <h4>Dessert Package</h4>
            </div>
            <div class="price-gd-bottom">
              <div class="price-list">
                <ul>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
   <!--// rooms & rates -->


  <!--//main-->

      <!-- Contact-form -->
      <div class="contact py-5" id="contact">
         <div class="container  py-md-3">
     <div class="w3-head-all mb-3 w3-head-col">
             <h3>Contact us</h3>
           </div>
       <div class="address-below">
            <div class="contact-icons text-center row">
               <div class="col-md-4 col-sm-4 col-xs-4 footer_grid_left">
                  <div class="icon_grid_left">
                     <span class="fas fa-map-marker" aria-hidden="true"></span>
                  </div>
                  <div class="address-gried">
                     <p>Soekarno-Hatta 15a<span>Malang, Indonesia</span></p>
                  </div>
                  <div class="clearfix"> </div>
               </div>
               <div class="col-md-4 col-sm-4 col-xs-4 footer_grid_left">
                  <div class="icon_grid_left">
                     <span class="fas fa-phone" aria-hidden="true"></span>
                  </div>
                  <div class="address-gried">
                     <p>+(62) 81 111 234 567</p>
                  </div>
                  <div class="clearfix"> </div>
               </div>
               <div class="col-md-4 col-sm-4 col-xs-4 footer_grid_left">
                  <div class="icon_grid_left">
                     <span class="fas fa-envelope-open" aria-hidden="true"></span>
                  </div>
                  <div class="address-gried">
                     <p><a href="mailto:info@example.com">infohotelx@xmail.com</a>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         </div>
      </div>
    <!-- footer section -->
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
<!-- //footer section -->
    <!-- Vertically centered Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-uppercase text-center" id="exampleModalLongTitle"> Hotel X</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <img src="images/ban5.jpg" class="img-fluid mb-3" alt="Hotel X" />
         Merupakan hotel Bintang 5 yang berlokasi di Jalan Soekarno-Hatta 15A Malang, Hotel kami memiliki kualitas layanan serta makanan yang dijamin akan membuat anda yang akan menginap di Hotel X sangat betah.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- //Vertically centered Modal -->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!-- //js  working-->
     
  <!-- Banner Responsive slider -->
  <script src="js/responsiveslides.min.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 4
      $("#slider4").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });
  </script>
  <!-- // Banner Responsive slider -->

      <!--// banner-->
    <!-- simpleLightbox -->
  <script src="js/simpleLightbox.js"></script>
  <script>
    $('.proj_gallery_grid a').simpleLightbox();
  </script>
  <!-- //simpleLightbox -->
<!-- flexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
  <script>
    $(window).load(function () {
      $('.flexslider').flexslider({
        animation: "slide",
        start: function (slider) {
          $('body').removeClass('loading');
        }
      });
    });
  </script>

  <!-- //flexSlider -->
<!-- Calendar -->
        <link rel="stylesheet" href="css/jquery-ui.css" />
        <script src="js/jquery-ui.js"></script>
          <script>
              $(function() {
              $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
              });
          </script>
      <!-- //Calendar -->
      <!-- odometer-script -->
  <script src="js/odometer.js"></script>
  <script>
    window.odometerOptions = {
      format: '(ddd).dd'
    };
  </script>
  <script>
    setTimeout(function () {
      jQuery('#w3l_stats1').html(25);
    }, 1500);
  </script>
  <script>
    setTimeout(function () {
      jQuery('#w3l_stats2').html(330);
    }, 1500);
  </script>
  <script>
    setTimeout(function () {
      jQuery('#w3l_stats3').html(542);
    }, 1500);
  </script>
  <script>
    setTimeout(function () {
      jQuery('#w3l_stats4').html(222);
    }, 1500);
  </script>
  <!-- //odometer-script -->

      <!-- start-smoth-scrolling -->
      <script  src="js/move-top.js"></script>
      <script  src="js/easing.js"></script>
      <script >
         jQuery(document).ready(function ($) {
          $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
          });
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
          /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear' 
            };
          */
         
          $().UItoTop({ easingType: 'easeOutQuart' });
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="js/bootstrap.js"></script>
      <!-- //bootstrap working-->
   </body>
</html>