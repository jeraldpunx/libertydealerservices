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
                            <li><a href="index.php" class="active-nav"> Home </a></li>
                            <li><a href="index.php#section1"> About Us </a></li>
                            <?php  if (isset($_SESSION['username'])) : ?>
                                <li><a href="incentives.php">Incentives Sales Contest</a></li>
                                <li><a href="index.php?logout='1'" style="color: red;">Logout</a></li>
                            <?php else : ?>
                                <li><a href="register.php">Become A Dealer</a></li>
                                <li><a href="index.php">Login</a></li>
                            <?php endif ?>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Dropdown
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                              </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- end .header-->
</div>