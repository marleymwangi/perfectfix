        <!--========== HEADER V2 ==========-->
        <header class="navbar-fixed-top s-header-v2 js__header-sticky">
            <!-- Navbar -->
            <nav class="s-header-v2__navbar">
                <div class="container g-display-table--lg">
                    <!-- Navbar Row -->
                    <div class="s-header-v2__navbar-row">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="s-header-v2__navbar-col">
                            <button type="button" class="collapsed s-header-v2__toggle" data-toggle="collapse" data-target="#nav-collapse" aria-expanded="false">
                                <span class="s-header-v2__toggle-icon-bar"></span>
                            </button>
                        </div>

                        <div class="s-header-v2__navbar-col s-header-v2__navbar-col-width--180">
                            <!-- Logo -->
                            <div class="s-header-v2__logo g-pull-left--xs">
                                <a href="index.php" class="s-header-v2__logo-link">
                                    <img class="s-header-v2__logo-img s-header-v2__logo-img--default" src="img/logo.png" alt="Perfect Fix">
                                    <img class="s-header-v2__logo-img s-header-v2__logo-img--shrink" src="img/logo-dark.png" alt="Perfect Fix">
                                </a>
                            </div>
                            <!-- End Logo -->
                        </div>
                        
                        <div class="s-header-v2__navbar-col s-header-v2__navbar-col--right">
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse s-header-v2__navbar-collapse" id="nav-collapse">
                                <ul class="s-header-v2__nav">
                                    <li class="s-header-v2__nav-item"><a href="index.php" class="s-header-v2__nav-link <?php if ($page=='home') {echo'-is-active'; }?>">Home</a></li>
                                    <li class="s-header-v2__nav-item"><a href="services.php" class="s-header-v2__nav-link <?php if ($page=='services') {echo'-is-active'; }?>">Get Tips</a></li>
                                    <?php
                                        if (isset($_SESSION['userName'])) {
                                            echo '<li class="s-header-v2__nav-item"><a href="weekgames.php" class="s-header-v2__nav-link">Prediction</a></li>';
                                        }
                                    ?>
                                    <li class="s-header-v2__nav-item"><a href="contacts.php" class="s-header-v2__nav-link s-header-v2__nav-link--dark <?php if ($page=='contacts') {echo'-is-active'; }?>">Contacts</a></li>

                                    <!-- Account -->
                                    <li class="dropdown s-header-v2__nav-item s-header-v2__dropdown-on-hover">
                                        <a href="#" class="dropdown-toggle s-header-v2__nav-link " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="g-font-size-10--xs g-margin-l-5--xs ti-angle-down"></span></a>
                                        <ul class="dropdown-menu s-header-v2__dropdown-menu">
                                                <?php 
                                                    if (isset($_SESSION['userName'])) {
                                                        echo '<li><a href="account.php" class="s-header-v2__dropdown-menu-link">My Account</a></li>
                                            <li><a href="includes/logout.inc.php" class="s-header-v2__dropdown-menu-link">Log Out</a></li>';
                                                        
                                                    } else{

                                                        echo '<li><a href="signin.php" class="s-header-v2__dropdown-menu-link">Sign In</a></li>
                                            <li><a href="signup.php" class="s-header-v2__dropdown-menu-link">Create Account</a></li>';
                                                    }
                                                 ?>
                                        </ul>
                                    </li>
                                    <!-- End Account -->
                                </ul>
                            </div>
                            <!-- End Nav Menu -->
                        </div>
                    </div>
                    <!-- End Navbar Row -->
                </div>
            </nav>
            <!-- End Navbar -->
        </header>
        <!--========== END HEADER V2 ==========-->