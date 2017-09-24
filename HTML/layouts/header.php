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

                            <a href="javascript:void(0);" class="s-header__trigger js__trigger-user">
                                	<i class="g-display-block--xs g-font-size-40--xs g-color--primary-opacity g-margin-b-30--xs ti-user"></i>
                            </a>
                            <!-- Trigger -->
                            <a href="javascript:void(0);" class="s-header__trigger js__trigger">
                                <span class="s-header__trigger-icon"></span>
                                <svg x="0rem" y="0rem" width="3.125rem" height="3.125rem" viewbox="0 0 54 54">
                                    <circle fill="transparent" stroke="#fff" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
                                </svg>
                            </a>
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
                        <div class="container-fluid">

                            <!-- Menu List -->                                
                            <div id="menumain"><?php include "menumain.php" ?></div>
                            <div id="menuuser"><?php include "menuuser.php" ?></div>
                            <!-- End Menu List -->
                        </div>
                    </nav>
                    <!-- End Nav -->
            </div>
            <!-- End user Overlay -->
        </header>
        <!--========== END HEADER ==========-->