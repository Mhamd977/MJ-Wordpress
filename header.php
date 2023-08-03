<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/assets/image/logos/1.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>ShoeSafari</title>
    <!-- Stylesheets & Fonts -->
    <link href="<?php echo get_template_directory_uri();?>/assets/css/plugins.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/assets/css/our.css" rel="stylesheet">
 <?php wp_head(); ?> 
</head>

<body class="home">
    <!--  -->
    <!-- Body Inner -->
    <div class="body-inner">
        <!--This Is a Body Comment-->

        <!-- Header -->
        <header id="header" data-transparent="true">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo">
                        <a href="index.html">
                            <span class="logo-default">
                                <img src="<?php echo get_template_directory_uri();?>/assets/image/logos/2.png" />
                            </span>
                            <span class="logo-dark">
                                <img src="<?php echo get_template_directory_uri();?>/assets/image/logos/1.png" />
                            </span>
                        </a>
                    </div>
                    <!--End: Logo-->
                    <!-- Search -->
                    <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i
                                class="icon-x"></i></a>
                        <form class="search-form" action="search-results-page.html" method="get">
                            <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                            <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                        </form>
                    </div>
                    <!-- end: search -->
                    <!--Header Extras-->
                    <div class="header-extras">
                        <ul>
                            <li>
                                <a id="btn-search" href="#"> <i class="icon-search"></i></a>
                            </li>
                            <li>
                                <div class="p-dropdown"> <a href="#"><i class="icon-globe"></i><span>EN</span></a>
                                    <ul class="p-dropdown-content">
                                        <li style="color: #000;"><a href="#">French</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">English</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--end: Header Extras-->
                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a></div>
                    <!--end: Navigation Resposnive Trigger-->
                    <!--Navigation-->
                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li class="dropdown"><a href="#">Collection</a>
                                        <ul class="dropdown-menu">
                                            <li class=""><a href="#">New Collection <span
                                                        class="badge bg-danger">NEW</span></a></li>
                                            <li class=""><a href="#">Sales</a></li>
                                            <li class=""><a href="#">Last Piece</a></li>
                                            <li class=""><a href="#">Accessories</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Men</a>
                                        <ul class="dropdown-menu">
                                            <li class=""><a href="#">Casual</a></li>
                                            <li class="dropdown-submenu"><a href="#">Sport</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="">Football</a></li>
                                                    <li><a href="">Basketball</a></li>
                                                    <li><a href="">Running</a></li>
                                                    <li><a href="">Others</a></li>
                                                </ul>
                                            </li>
                                            <li class=""><a href="#">Sneakers <span
                                                        class="badge bg-danger">NEW</span></a></li>
                                            <li class=""><a href="#">Boots</a></li>
                                            <li class=""><a href="#">Slippers</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Women</a>
                                        <ul class="dropdown-menu">
                                            <li class=""><a href="#">Casual</a></li>
                                            <li class="dropdown-submenu"><a href="#">Sport</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="">Football</a></li>
                                                    <li><a href="">Basketball</a></li>
                                                    <li><a href="">Running</a></li>
                                                    <li><a href="">Others</a></li>
                                                </ul>
                                            </li>
                                            <li class=""><a href="#">Sneakers <span
                                                        class="badge bg-danger">NEW</span></a></li>
                                            <li class=""><a href="#">Boots</a></li>
                                            <li class=""><a href="#">Slippers</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"><a href="#">Kids</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-menu-title">Baby Girl</li>
                                                            <li><a href="#">Sandals</a></li>
                                                            <li><a href="#">Sneakers</a></li>
                                                            <li><a href="#">Ballerina</a></li>
                                                            <li><a href="#">Boots</a></li>

                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-menu-title">Girls</li>
                                                            <li><a href="#">Slippers / Slides</a></li>
                                                            <li><a href="#">Sandals</a></li>
                                                            <li><a href="#">Sneakers</a></li>
                                                            <li><a href="#">Ballerina</a></li>
                                                            <li><a href="#">Boots</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-menu-title">Baby Boy</li>
                                                            <li><a href="#">Sneakers</a></li>
                                                            <li><a href="#">Slippers/Sliders</a></li>
                                                            <li><a href="#">Sandals</a></li>
                                                            <li><a href="#">Boots</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-menu-title">Boy</li>
                                                            <li><a href="#">Sandals</a></li>
                                                            <li><a href="#">Slippers Slide</a></li>
                                                            <li><a href="#">Sneakers </a></li>
                                                            <li><a href="#">Boot</a></li>

                                                        </ul>
                                                    </div>


                                                </div>
                                            </li>
                                        </ul>
                                    </li>



                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!-- end: Header -->