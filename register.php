<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Liberty Dealer Services</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="telephone=no" name="format-detection">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href="http://templines.rocks/html/motorland/assets/css/master.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet">

    <script type="text/javascript" charset="UTF-8" src="./Motor Land _ Home_files/common.js.download"></script>
    <script type="text/javascript" charset="UTF-8" src="./Motor Land _ Home_files/util.js.download"></script>
    <script type="text/javascript" charset="UTF-8" src="./Motor Land _ Home_files/map.js.download"></script>
    <script type="text/javascript" charset="UTF-8" src="./Motor Land _ Home_files/marker.js.download"></script>
    <style type="text/css">
        .gm-style {
            font: 400 11px Roboto, Arial, sans-serif;
            text-decoration: none;
        }
        
        .gm-style img {
            max-width: none;
        }
    </style>
    <script type="text/javascript" charset="UTF-8" src="./Motor Land _ Home_files/onion.js.download"></script>
    <script type="text/javascript" charset="UTF-8" src="./Motor Land _ Home_files/stats.js.download"></script>
    <style type="text/css">
        @-webkit-keyframes _gm3026 {
            0% {
                -webkit-transform: translate3d(0px, -500px, 0);
                -webkit-animation-timing-function: ease-in;
            }
            50% {
                -webkit-transform: translate3d(0px, 0px, 0);
                -webkit-animation-timing-function: ease-out;
            }
            75% {
                -webkit-transform: translate3d(0px, -20px, 0);
                -webkit-animation-timing-function: ease-in;
            }
            100% {
                -webkit-transform: translate3d(0px, 0px, 0);
                -webkit-animation-timing-function: ease-out;
            }
        }
    </style>
    <script type="text/javascript" charset="UTF-8" src="./Motor Land _ Home_files/controls.js.download"></script>
    <script type="text/javascript" src="https://ui.reachmail.net/api/lists/SubscriptionForm/optin/dynamic/noredirect/0a007ce5-4ca3-48e5-a361-a9fb00e6538a"></script>
<style type="text/css">
.rmSubsrciptionFormBody {
background-color: #FFFFFF;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      $("a").on('click', function(event) {
        if (this.hash !== "") {
          event.preventDefault();
            var hash = this.hash;
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){
        window.location.hash = hash;
          });
        } 
      });
    });
    </script>

</head>

<body class="">
   
    <div class="l-theme animated-css" data-header="sticky" data-header-top="200" data-canvas="container">

        <header class="header header-boxed-width navbar-fixed-top header-background-white header-color-black header-topbar-dark header-logo-black header-topbarbox-1-left header-topbarbox-2-right header-navibox-1-left header-navibox-2-right header-navibox-3-right header-navibox-4-right">
            <div class="container container-boxed-width">
               
                <nav class="navbar" id="nav">
                    <div class="container">
                        <div class="header-navibox-1">
                            <!-- Mobile Trigger Start-->
                            <button class="menu-mobile-button visible-xs-block js-toggle-mobile-slidebar toggle-menu-button"><i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i>
                            </button>
                            <!-- Mobile Trigger End-->
                            <a class="navbar-brand scroll" href="index.php">
                                <img class="normal-logo img-responsive" src="images/logo1.png" alt="logo">
                                <img style="width: 204px;" class="scroll-logo hidden-xs img-responsive" src="images/logo1.png" alt="logo">
                            </a>
                        </div>
                        <div class="header-navibox-2">
                            <ul class="yamm main-menu nav navbar-nav">
                                <li><a href="index.php"> Home </a></li>
                                <li><a href="index.php#section1"> About Us </a></li>
                                <li><a href="register.php" class="active-nav">Become A Dealer</a></li>
                                <li><a href="index.php">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        

        <div class="dealer-sec mrgtop" style="position: relative;overflow: hidden;">
            <div class="overlay"></div>
            <div class="container-fluid">
                <div class="dealInside">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-md-5 col-sm-5"></div>
                                <div class="col-md-7 col-sm-7">
                        			<form name="rm_signup_form" id="rm_signup_form" class="form-container-register" action="register.php" method="post">
                                        <?php include('errors.php'); ?>

                                        <h3>Register</h3>
                            			<fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="email">Email: </label>

                                                    <input class="form-field" type="text" name="email" id="email" required placeholder="Email address" value="<?php echo $email; ?>"/>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="username">Username: </label>

                                                    <input class="form-field" type="text" name="username" id="username" required placeholder="Username" value="<?php echo $username; ?>"/>
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="username">Password: </label>

                                                    <input class="form-field" type="password" name="password_1" id="password_1" required placeholder="Password"/>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="username">Confirm Password: </label>

                                                    <input class="form-field" type="password" name="password_2" id="password_2" required placeholder="Confirm Password"/>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="first_name">First Name: </label>
                                                    <input class="form-field" type="text" name="first_name" id="first_name" required placeholder="First name" value="<?php echo $first_name; ?>"/>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="last_name">Last Name: </label>
                                                    <input class="form-field" type="text" name="last_name" id="last_name" required placeholder="Last name" value="<?php echo $last_name; ?>"/>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="company_name">Company Name: </label>
                                                    <input class="form-field" type="text" name="company_name" id="company_name" required placeholder="Company name" value="<?php echo $company_name; ?>"/>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="website">Website: </label>
                                                    <input class="form-field" type="text" name="website" id="website" required placeholder="Website" value="<?php echo $website; ?>"/>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="">Address: </label>
                                                    <input class="form-field" type="text" name="address" id="address" required placeholder="Street address" value="<?php echo $address; ?>"/>
                                                </div>
                                                <div class="col-md-4">
                                                    <input class="form-field" type="text" name="city" id="city" required placeholder="City" value="<?php echo $city; ?>"/>
                                                </div>
                                                <div class="col-md-4">
                                                    <input class="form-field" type="text" name="state" id="state" required placeholder="State" value="<?php echo $state; ?>"/>
                                                </div>
                                                <div class="col-md-4">
                                                    <input class="form-field" type="text" name="zip" id="zip" required placeholder="Zip/postal code" value="<?php echo $zip; ?>"/>
                                                </div>
                                                <div class="col-md-6">
                                                    <input class="form-field" type="text" name="phone" id="phone" required placeholder="Phone number" value="<?php echo $phone; ?>"/>
                                                </div>
                                                <div class="col-md-6">
                                                    <input class="form-field" type="text" name="fax" id="fax" optional placeholder="Fax number (Optional)" value="<?php echo $fax; ?>"/>
                                                </div>
                                            </div>
                                         </fieldset>
                                         <fieldset>
                                             <button class="register-button" name="reg_user" type="submit" id="contact-submit" data-submit="...Sending">Register</button>
                                         </fieldset>
                                         Already a member? <a href="login.php">Sign in</a>
                        			</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        <!-- end .block-table-->
        <footer class="footer">
            <div class="area-bg__inner">
                <div class="footer__main">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="footer-section">
                                    <a class="footer__logo" href="#">
                                        <img class="img-responsive" src="images/logo1.png" alt="Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4" id="section1">
                                <section class="footer-section">
                                    <!--<h3 class="footer-section__title ui-title-inner">Address Information</h3>-->
                                    <div class="footer-contact footer-contact_lg">Liberty Dealer Services</div>
                                   <div class="footer-contact"><i class="icon icon-xs fa fa-phone" style="top: 5px;"></i>888.623.5547</div>
                                    <div class="footer-contact"><i class="icon icon-xs fa fa-fax" style="top: 5px;"></i>888.623.5547</div>
                                    <div class="footer-contact"><i class="icon icon-xs fa fa-envelope-o" style="top: 5px;"></i>info@libertydealerservices.com</div>
                                </section>
                            </div>
                            <div class="col-md-4">
                                <section class="footer-section">
                                    <h3 class="footer-section__title ui-title-inner">Social</h3>
                                    <ul class="social-net list-inline">
                                        <li class="social-net__item"><a href="#"><i class="icon fa fa-facebook"></i></a>
                                        </li>
                                        <li class="social-net__item"><a href="#"><i class="icon fa fa-twitter"></i></a>
                                        </li>
                                        <li class="social-net__item"><a href="#"><i class="icon fa fa-linkedin"></i></a>
                                        </li>
                                        <li class="social-net__item"><a href="#"><i class="icon fa fa-instagram"></i></a>
                                        </li>
                                        <li class="social-net__item"><a href="#"><i class="icon fa fa-youtube-play"></i></a>
                                        </li>
                                    </ul>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12"><p style="color: #cecaca; font-size: 17px;"> &copy; 1998-2019 Liberty Dealer Services All Rights Reserved </p> </div>
                        </div>
                    </div>
                </div><span class="btn-up" id="toTop">TOP</span>
            </div>
        </footer>
        <!-- .footer-->
    </div>
    <!-- end layout-theme-->
<script type="text/javascript" src="https://ui.reachmail.net/api/lists/SubscriptionForm/optin/dynamic/noredirect/0a007ce5-4ca3-48e5-a361-a9fb00e6538a"></script>
    <!-- ++++++++++++-->
    <!-- MAIN SCRIPTS-->
    <!-- ++++++++++++-->
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <!-- Bootstrap-->
    <script src="js/bootstrap.min.js"></script>
    <!-- User customization-->
    <script src="js/custom.js"></script>
    <!-- Headers scripts-->
    <script src="js/slidebar.js"></script>
    <script src="js/header.js"></script>
    <!-- Color scheme-->
    <script src="js/dmss.js"></script>
    <!-- Select customization & Color scheme-->
    <script src="js/bootstrap-select.min.js"></script>
    <!-- Slider-->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Pop-up window-->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Mail scripts-->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- Filter and sorting images-->
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/imagesLoaded.js"></script>
    <!-- Progress numbers-->
    <script src="js/jquery.easypiechart.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!-- NoUiSlider-->
    <script src="js/nouislider.min.js"></script>
    <script src="js/wNumb.js"></script>
    <!-- Animations-->
    <script src="js/scrollreveal.min.js"></script>
    <!-- Main slider-->
    <script src="js/jquery.sliderPro.min.js"></script>
    <!-- User map-->
    <script src="./Motor Land _ Home_files/js"></script>
    <!-- Maps customization-->
    <script src="js/map-custom.js"></script>

</body>

</html>