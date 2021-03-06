<?php session_start() ?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
        <?php $page='home'; include ("layouts/head.php"); ?>
    <!-- End Head -->

    <!-- Body -->
    <body>
    	<!--========== HEADER ==========-->
        <?php $page='home'; include ("layouts/header.php"); ?>
        <!--========== END HEADER ==========-->

        <!--========== SWIPER SLIDER ==========-->

        <div class="s-swiper js__swiper-one-item">
            <!-- Swiper Wrapper -->
            <div class="swiper-wrapper">
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('img/1920x1080/02.jpg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">Welcome to PerfectFix<br> The Place you make your own luck</h1>
                        </div>
                    </div>
                </div>
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('img/1920x1080/01.jpg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <div class="g-margin-b-30--xs">
                                <h2 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">Be a Winner<br>With PerfectFix</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Swiper Wrapper -->

            <!-- Arrows -->
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
            <!-- End Arrows -->
            
            <a href="#js__scroll-to-section" class="s-scroll-to-section-v1--bc g-margin-b-15--xs">
                <span class="g-font-size-18--xs g-color--white ti-angle-double-down"></span>
                <p class="text-uppercase g-color--white g-letter-spacing--3 g-margin-b-0--xs">Learn More</p>
            </a>
        </div>
        <!--========== END SWIPER SLIDER ==========-->

        <!--========== PAGE CONTENT ==========-->

        <!-- information -->
        <div class="g-promo-section">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="row">
                    <div class="col-md-4 g-margin-t-15--xs g-margin-b-60--xs g-margin-b-0--lg">
                        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Welcome to Perfect Fix</p>
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md">Predict</h2>
                        </div>
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md"> A Winner</h2>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <p class="g-font-size-18--xs"><span class="g-font-weight--700">Serious Bettors like you know they need to look at as many facts as possible before betting on the outcome of any soccer match.</span> But the problem is that it takes such a long time to pull all the facts together. Even for your “favourite” team, the opponent’s details will be completely different from week-to-week. You could try compiling your own database and then unfailingly updating it, but a worthwhile database system would take you a long time to build and a lot of effort to systematically update. </p>
                        <p class="g-font-size-18--xs g-font-weight--700"><span class="g-font-style-italics g-color--primary">Do you really want to go through all that pain if you can avoid it?</span> Of course not! And that's where we come in.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 g-promo-section__img-right--lg g-bg-position--center g-height-100-percent--md js__fullwidth-img">
                <img class="img-responsive" src="img/970x970/03.jpg" alt="Image">
            </div>
        </div>
        <!-- End Information -->

        <!-- Parallax -->
        <div class="js__parallax-window" style="background: url(img/1920x1080/03.jpg) 50% 0 no-repeat fixed;">
            <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-margin-b-80--xs">
                    <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white">Subscribe to our Prediction packages</h2>
                </div>
                <a href="signup.php" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50">Join Us</a>
            </div>
        </div>
        <!-- End Parallax -->

        <!-- Features -->
        <div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="g-text-center--xs g-margin-b-10--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">information</p>
                <h2 class="g-font-size-32--xs g-font-size-36--md">We help you Improve your Chances<br> That will guide you to WIN.</h2>
            </div>
        </div>
        <!-- End Features -->


        <!-- Counter -->
            <?php include("layouts/clients.php") ?>
        <!-- End Counter -->

        <!--========== END PAGE CONTENT ==========-->

        <!--========== FOOTER ==========-->
            <?php include ("layouts/footer.php"); ?>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.min.js"></script>
        <script type="text/javascript">
                if(window.location.href.indexOf("login=success") > -1) {
                   swal("Log In successfull", "You were Logged in successfully", "success");
                }
                if(window.location.href.indexOf("logout=success") > -1) {
                   swal("Log Out successfull", "You were Logged out successfully", "success");
                }
        </script>
        <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="vendor/swiper/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.parallax.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>

        <!-- General Components and Settings -->
        <script type="text/javascript" src="js/global.min.js"></script>
        <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="js/components/swiper.min.js"></script>
        <script type="text/javascript" src="js/components/parallax.min.js"></script>
        <script type="text/javascript" src="js/components/wow.min.js"></script>
        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
</html>
