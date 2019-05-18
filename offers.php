<?php 
  include('server.php');
  if(!isset($_SESSION))  { 
    session_start(); 
  } 

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
  }
?>
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


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
        .gm-style {
            font: 400 11px Roboto, Arial, sans-serif;
            text-decoration: none;
        }
        
        .gm-style img {
            max-width: none;
        }

        /* Tabs*/
        section {
            padding: 60px 0;
        }

        section .section-title {
            text-align: center;
            color: #007b5e;
            margin-bottom: 50px;
            text-transform: uppercase;
        }
        #tabs{
            background: #007b5e;
            color: #eee;
        }
        #tabs h6.section-title{
            color: #eee;
        }

        #tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
            color: #f3f3f3;
            background-color: transparent;
            border-color: transparent transparent #f3f3f3;
            border-bottom: 4px solid !important;
            font-size: 20px;
            font-weight: bold;
        }
        #tabs .nav-tabs .nav-link {
            border: 1px solid transparent;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
            color: #eee;
            font-size: 20px;
        }
        #tabs p {
            font-size: 18px;
        }
    </style>
</head>

<body class="">
    <!-- Loader-->
    <div id="page-preloader" style="display: none;"><span class="spinner border-t_second_b border-t_prim_a"></span>
    </div>
    <!-- Loader end-->
    <!-- ==========================-->
    <!-- MOBILE MENU-->
    <!-- ==========================-->
   
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
                        <!--<div class="header-navibox-3"><a class="btn btn-primary" href="become-a-dealer.html">BECOME A DEALER</a>-->
                        <!--</div>-->
                        <div class="header-navibox-2">
                            <ul class="yamm main-menu nav navbar-nav">
                                <li><a href="javascript:;"> Customers </a></li>
                                <li><a href="become-a-dealer.html"> Dealers </a></li>
                                <li><a href="#section2"> Contact Us </a></li>
                                <li><a href="#section1"> About Us </a></li>
                                <?php  if (isset($_SESSION['username'])) : ?>
                                    <li><a href="offers.php" style="color: #1e74ff;">Offers</a></li>
                                    <li><a href="index.php?logout='1'" style="color: red;">Logout</a></li>
                                <?php else : ?>
                                    <li><a href="index.php" style="color: #59AAAC;">Login</a></li>
                                <?php endif ?>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end .header-->
        <!-- Tabs -->
        <section id="tabs">
            <div class="container">
                <div class="row mt-5"></div>
                <div class="row mt-5"></div>
                <div class="row">

                    <div class="col-xs-12 ">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Dealer Rates</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Create a Contract</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Dealer Agreement</a>
                                <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Dealer Incentives/Sales Contests</a>
                            </div>
                        </nav>
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <object data="sample.pdf" type="pdf/html" width="350" height="250">
                                <p>
                                Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.</p>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <p>
                                    Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.</p>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <p>
                                Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.</p>
                            </div>
                            <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                <p>
                                Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.</p>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </section>
        <!-- ./Tabs -->
      
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
                            <div class="col-md-4" id="section2">
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
                                    <!--<h3 class="footer-section__title ui-title-inner">Social</h3>-->
                                    <ul class="social-net list-inline">
                                        <li class="social-net__item"><a  href="#"><i class="icon fa fa-facebook"></i></a>
                                        </li>
                                        <li class="social-net__item"><a  href="#"><i class="icon fa fa-twitter"></i></a>
                                        </li>
                                        <li class="social-net__item"><a  href="#"><i class="icon fa fa-linkedin"></i></a>
                                        </li>
                                        <li class="social-net__item"><a  href="#"><i class="icon fa fa-instagram"></i></a>
                                        </li>
                                        <li class="social-net__item"><a  href="#"><i class="icon fa fa-youtube-play"></i></a>
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
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="js/jquery-1.12.4.min.js"></script> -->
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <!-- Bootstrap-->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
</body>

</html>