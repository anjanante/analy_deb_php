<?php
/**
 * Created By Storm Nant 2022
 * User: Nantenaina
 * Date: 08/05/2023
 * Time: 14:55
 */
?>
<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if we want to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1><?php echo siteName(); ?><span>.</span></h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="/" class="active">Home</a></li>
                <li><a href="/?page=about-us">About</a></li>
                <li><a href="/?page=services">Services</a></li>
                <li><a href="/?page=projects">Projects</a></li>
                <li><a href="/?page=blog">Blog</a></li>
<!--                <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>-->
<!--                    <ul>-->
<!--                        <li><a href="#">Dropdown 1</a></li>-->
<!--                        <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>-->
<!--                            <ul>-->
<!--                                <li><a href="#">Deep Dropdown 1</a></li>-->
<!--                                <li><a href="#">Deep Dropdown 2</a></li>-->
<!--                                <li><a href="#">Deep Dropdown 3</a></li>-->
<!--                                <li><a href="#">Deep Dropdown 4</a></li>-->
<!--                                <li><a href="#">Deep Dropdown 5</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li><a href="#">Dropdown 2</a></li>-->
<!--                        <li><a href="#">Dropdown 3</a></li>-->
<!--                        <li><a href="#">Dropdown 4</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
                <li><a href="/?page=contact-us">Contact</a></li>
            </ul>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->