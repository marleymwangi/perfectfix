        <!--========== HEADER ==========-->
        <header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
            <!-- Navbar -->
            <div class="s-header__navbar">
                <div class="s-header__container">
                    <div class="s-header__navbar-row">
                        <div class="s-header__navbar-row-col">
                            <!-- Logo -->
                            <div class="s-header__logo">
                                <a href="index.php" class="s-header__logo-link">
                                    <img class="s-header__logo-img s-header__logo-img-default" src="img/logo.png" alt="PerfectFit Logo">
                                    <img class="s-header__logo-img s-header__logo-img-shrink" src="img/logo-dark.png" alt="PerfectFit Logo">
                                </a>
                            </div>
                            <!-- End Logo -->
                        </div>
                        <div class="s-header__navbar-row-col">
                            <!-- Trigger -->
                            <a href="javascript:void(0);" class="s-header__trigger js__trigger g-margin-l-70--xs hamburger">
                                <span class="s-header__trigger-icon"></span>
                                <svg x="0rem" y="0rem" width="3.125rem" height="3.125rem" viewbox="0 0 54 54">
                                    <circle fill="transparent" stroke="#fff" stroke-width="3" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
                                </svg>
                            </a>
                            
                            <div class="flat_nav g-pull-right--xs">
                                <ul>
                                    <li class="g-display-inline-block--xs g-font-weight--400"><a href="index.php" class="g-color--primary">Home</a></li>
                                    <li class="g-display-inline-block--xs g-font-weight--400"><a href="services.php" class="g-color--primary">Packages</a></li>
                                    <?php 
                                        if (isset($_SESSION['userName'])) {
                                            echo '<li class="g-display-inline-block--xs g-font-weight--400"><a href="weekgames.php" class="g-color--primary">Predictions</a></li>';                                            
                                        }
                                     ?>
                                    <li class="g-display-inline-block--xs g-font-weight--400"><a href="contacts.php" class="g-color--primary">Contact Us</a></li>
                                    <?php 
                                        if (isset($_SESSION['userName'])) {
                                            echo '<li class="g-display-inline-block--xs g-font-weight--400"><a href="includes/logout.inc.php" class="g-color--primary">Log Out</a></li>';                                            
                                        } else{

                                            echo '<li class="g-display-inline-block--xs g-font-weight--400"><a href="signin.php" class="g-color--primary">Log In</a></li>';
                                        }
                                     ?>
                                </ul>
                            </div>
                            <!-- End Trigger -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->

                <!-- Overlay -->
                <div class="s-header-bg-overlay js__bg-overlay">
                    <!-- Nav -->
                    <nav class="s-header__nav js__scrollbar">
                        <div class="container-fluid g-height-400--xs">

                            <!-- Menu List -->                             
                            <div id="menumain" class="g-display-none--xs"><?php include "menumain.php" ?></div>
                            <div id="menuuser" class="g-display-none--xs"><?php include "menuuser.php" ?></div>
                            <!-- End Menu List -->
                        </div>
                    </nav>
                    <!-- End Nav -->
            </div>
            <!-- End user Overlay -->
        </header>
        <!--========== END HEADER ==========-->