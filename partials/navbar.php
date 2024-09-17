<?php
session_start();
?>
<header id="site-header" class="site-header sticky-header header-static">
            <div class="octf-main-header">
                <div class="octf-area-wrap">
                    <div class="container octf-mainbar-container">
                        <div class="octf-mainbar">
                            <div class="octf-mainbar-row octf-row">
                                <div class="octf-col logo-col">
                                    <div id="site-logo" class="site-logo my-0 py-0">
                                        <a href="<?=$dir?>index.php">
                                            <img src="<?=$dir?>images/logo-navbar.png" alt="Fikti Space" class="nav-logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="octf-col menu-col">
                                    <nav id="site-navigation" class="main-navigation">
                                        <ul class="menu">
                                            <li><a href="<?=$dir?>index.php">Home</a></li>
                                            <li><a href="<?=$dir?>index.php#about">About</a></li>
                                            <li><a href="<?=$dir?>index.php#timeline">Timeline</a></li>
                                            <li class="menu-item-has-children"><a href="">Sport</a>
                                                <ul class="sub-menu">
                                                    <li><a href="<?=$dir?>competition/mobile-legends.php">Mobile Legends</a></li>
                                                    <li><a href="<?=$dir?>competition/valorant.php">Valorant</a></li>
                                                    <!-- <li><a href="<?=$dir?>competition/pubgm.php">PUBG Mobile</a></li> -->
                                                    <li><a href="<?=$dir?>competition/point-blank.php">Point Blank</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="">Art</a>
                                                <ul class="sub-menu">
                                                    <li><a href="<?=$dir?>competition/photography.php">Photography</a></li>
                                                    <li><a href="<?=$dir?>competition/solo-vocal.php">Solo Vocal</a></li>
                                                    <li><a href="<?=$dir?>competition/poster.php">Poster</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                
                                <div class="octf-col cta-col text-right">
                                <!-- Call To Action -->

                                <?php
                                
                                if (isset($_SESSION['user-username'])){
                                    $username= $_SESSION['user-username'];
                                    $user_lomba= $_SESSION['user-jenis-lomba'];

                                    if($user_lomba == 'poster' || $user_lomba == 'photography' || $user_lomba == 'solo-vocal'){
                                        $jenis_lomba_user= 'art';
                                    }else{
                                        $jenis_lomba_user= 'sport';
                                    }

                                    echo"<div class='octf-btn-cta'>

                                            <div class='octf-header-module mx-1'>
                                                <p class='my-0 py-0'>Hello, <b>$username</b></p>
                                            </div>

                                            <div class='octf-header-module mx-1'>
                                                <p class='mb-1' style='font-size: 30px; opacity: 0.3;'> | </p>
                                            </div>
                                            
                                            <div class='octf-header-module mx-1'>
                                                <a href='".$dir."administration/".$jenis_lomba_user."/'><button class='btn text-prum px-0' title='Administration'><i class='fa-solid fa-house'></i></button></a>
                                            </div>

                                            <div class='octf-header-module mx-1'>
                                                <p class='mb-1' style='font-size: 30px; opacity: 0.3;'> | </p>
                                            </div>

                                            <div class='octf-header-module mx-1'>
                                                <a href='".$dir."logout.php'><button class='btn text-prum px-0' title='Logout'><i class='fa-solid fa-power-off'></i></button></a>
                                            </div>
                                            
                                        </div>";
                                }else{
                                    echo"<div class='octf-btn-cta'>

                                            <div class='octf-header-module mx-1'>
                                                <a href='".$dir."sign-up.php'><button class='btn text-prim'>Sign Up</button></a>
                                            </div>

                                            <div class='octf-header-module mx-1'>
                                                <a href='".$dir."sign-in.php'><button class='btn btn-prim'>Sign In</button></a>
                                            </div>
                                            
                                        </div>";
                                }
                                ?>
                                                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_mobile">
                <div class="container">
                    <div class="mlogo_wrapper clearfix">
                        <div class="mobile_logo">
                            <a href="<?=$dir?>index.php">
                                <img src="<?=$dir?>images/logo-navbar.png" alt="Fikti space">
                            </a>
                        </div>
                        <div id="mmenu_toggle">
                            <button></button>
                        </div>
                    </div>
                    <div class="mmenu_wrapper">
                        <div class="mobile_nav collapse">
                            <ul id="menu-main-menu" class="mobile_mainmenu">
                                <li><a href="<?=$dir?>index.php">Home</a></li>
                                <li><a href="<?=$dir?>index.php#about">About</a></li>
                                <li><a href="<?=$dir?>index.php#timeline">Timeline</a></li>
                                <li class="menu-item-has-children"><a href="">Sport</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?=$dir?>competition/mobile-legends.php">Mobile Legends</a></li>
                                        <li><a href="<?=$dir?>competition/valorant.php">Valorant</a></li>
                                        <!-- <li><a href="<?=$dir?>competition/pubgm.php">PUBG Mobile</a></li> -->
                                        <li><a href="<?=$dir?>competition/point-blank.php">Point Blank</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="">Art</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?=$dir?>competition/photography.php">Photography</a></li>
                                        <li><a href="<?=$dir?>competition/solo-vocal.php">Solo Vocal</a></li>
                                        <li><a href="<?=$dir?>competition/poster.php">Poster</a></li>
                                    </ul>
                                </li>
                                <li class="mt-2">
                                    <div class="octf-col cta-col text-center">
                                    <!-- Call To Action -->

                                    <?php
                                    
                                    if (isset($_SESSION['user-username'])){
                                        echo"<div class='octf-btn-cta'>

                                                <div class='octf-header-module mx-1'>
                                                    <a href='".$dir."administration/".$jenis_lomba_user."/'><button class='btn text-prum px-0' title='Administration'><i class='fa-solid fa-house'></i></button></a>
                                                </div>

                                                <div class='octf-header-module mx-1'>
                                                    <p class='mb-1' style='font-size: 30px; opacity: 0.3;'> | </p>
                                                </div>

                                                <div class='octf-header-module mx-1'>
                                                    <a href='".$dir."logout.php'><button class='btn text-prum px-0' title='Logout'><i class='fa-solid fa-power-off'></i></button></a>
                                                </div>
                                                
                                            </div>";
                                    }else{
                                        echo"<div class='octf-btn-cta'>

                                                <div class='octf-header-module mx-1'>
                                                    <a href='".$dir."sign-up.php'><button class='btn text-prim'>Sign Up</button></a>
                                                </div>

                                                <div class='octf-header-module mx-1'>
                                                    <a href='".$dir."sign-in.php'><button class='btn btn-prim'>Sign In</button></a>
                                                </div>
                                                
                                            </div> ";
                                    }
                                    ?>

                                                                     
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>