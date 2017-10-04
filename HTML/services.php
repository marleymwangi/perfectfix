<?php session_start() ?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
        <?php $page='signup'; include ("layouts/head.php"); ?>
    <!-- End Head -->

    <!-- Body -->
    <body>

        <!--========== HEADER ==========-->
        <?php $page='services'; include ("layouts/header.php"); ?>
        <!--========== END HEADER ==========-->

        <!--========== PROMO BLOCK ==========-->
        <section class="s-video-v2__bg" style="background: url(img/1920x1080/04.jpg) 50% 0 no-repeat fixed;">
            <div class="container g-position--overlay g-text-center--xs">
                <div class="g-padding-y-50--xs g-margin-t-100--xs g-margin-b-100--xs g-margin-b-250--md">
                    <h1 class="g-font-size-36--xs g-font-size-50--sm g-font-size-60--md g-color--white">Subcribe to the package that</h1>
                    <h2 class="g-font-size-36--xs g-font-size-50--sm g-font-size-60--md g-color--white">best works for you.</h2>
                </div>
            </div>
        </section>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->

        <!-- Plan -->
        <div class="g-bg-color--sky-light" >
            <div class="container g-padding-y-80--xs g-padding-y-125--xsm">
                <div class="g-text-center--xs g-margin-b-80--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Plan</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md">Finding your Plan</h2>
                    <br>
                    <p class="text-uppercase g-font-size-8--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">To Pay. Send Money to 0720010700<br>Input the Transaction Code and Number in the spaces provided<br>click Buy</p>
                </div>

                <div class="row g-row-col--5 g-padding-y-10--xs"  id="package" >
                    <!-- Plan -->
                    <div class="col-md-6 g-margin-b-10--xs g-padding-y-20--xs g-margin-b-0--lg">
                        <section class="container1">
                            <div class="card1">
                                <div class="front flip">
                                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-cup"></i>
                                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">Package1</h3>
                                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs">
                                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>Get 5 sure bets<br>every day for 1 week</li>
                                                <li><i class="g-font-size-18--xs g-color--primary g-margin-r-10--xs ti-arrow-circle-down"></i>  For just </li>
                                            </ul>
                                            <div class="g-margin-b-40--xs">
                                                <span class="s-plan-v1__price-mark">Ksh.</span>
                                                <span class="s-plan-v1__price-tag">150</span>
                                            </div>
                                            <button type="button" class="text-uppercase s-btn s-btn--sm s-btn--primary-bg g-radius--50 g-padding-x-50--xs" onclick="flip()">Buy</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="back flip">
                                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                                        <div class="s-plan-v1 g-text-center--xs g-bg-color--primary g-padding-y-100--xs">
                                            <i class="g-display-block--xs g-font-size-40--xs g-color--white g-margin-b-30--xs ti-wallet"></i>
                                            <h3 class="g-font-size-18--xs g-color--white g-margin-b-30--xs">MPESA</h3>
                                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs">
                                                <li><i class="g-font-size-13--xs g-color--white g-margin-r-10--xs ti-check"></i> Enter the phone Number </li>
                                                <li><i class="g-font-size-13--xs g-color--white g-margin-r-10--xs ti-check"></i> Enter the Transaction code </li>
                                            </ul>
                                            <div class="g-display-inline-block--xs">
                                            <form class="input-group"  action="includes/package.inc.php" method="POST">                                      
        
                                                    <input type="text" class="form-control s-form-v1__input g-radius--left-50 g-radius--right-50 text-uppercase" id="form-menu"  placeholder="*Phone Number" name="mpesaImsi">
                                                
                                                <div class="g-text-center--xs g-margin-b-5--xs">
                                                    <input type="text" class="form-control s-form-v1__input g-radius--left-50 g-radius--right-50 text-uppercase" id="form-menu" placeholder="Trans Code" name="transcode">
                                                </div>
                                                <input type="hidden" name="subs" value="package1"/>
                                                <div class="g-text-center--xs">
                                                    <button type="submit" class="text-uppercase s-btn s-btn--xs s-btn--white-bg g-radius--50 g-font-weight--700" id="form-menu" name="submit">Buy</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- End Plan -->

                    <!-- Plan -->
                    <div class="col-md-6 g-margin-b-10--xs g-padding-y-20--xs g-margin-b-0--lg">
                        <section class="container1">
                            <div class="card2">
                                <div class="front flip">
                                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-cup"></i>
                                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">Package2</h3>
                                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs">
                                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>Pick 13 of 34M<br>Jackpot Prediction </li>
                                                <li><i class="g-font-size-18--xs g-color--primary g-margin-r-10--xs ti-arrow-circle-down"></i>  For just </li>
                                            </ul>
                                            <div class="g-margin-b-40--xs">
                                                <span class="s-plan-v1__price-mark">Ksh.</span>
                                                <span class="s-plan-v1__price-tag">100</span>
                                            </div>
                                            <button type="button" class="text-uppercase s-btn s-btn--sm s-btn--primary-bg g-radius--50 g-padding-x-50--xs" onclick="flip2()">Buy</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="back flip">
                                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                                        <div class="s-plan-v1 g-text-center--xs g-bg-color--primary g-padding-y-100--xs">
                                            <i class="g-display-block--xs g-font-size-40--xs g-color--white g-margin-b-30--xs ti-wallet"></i>
                                            <h3 class="g-font-size-18--xs g-color--white g-margin-b-30--xs">MPESA</h3>
                                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs">
                                                <li><i class="g-font-size-13--xs g-color--white g-margin-r-10--xs ti-check"></i> Enter the phone Number </li>
                                                <li><i class="g-font-size-13--xs g-color--white g-margin-r-10--xs ti-check"></i> Enter the Transaction code </li>
                                            </ul>
                                            <div class="g-display-inline-block--xs">
                                            <form class="input-group"  action="includes/package.inc.php" method="POST">                                      
        
                                                    <input type="text" class="form-control s-form-v1__input g-radius--left-50 g-radius--right-50 text-uppercase" id="form-menu"  placeholder="*Phone Number" name="mpesaImsi">
                                                
                                                <div class="g-text-center--xs g-margin-b-5--xs">
                                                    <input type="text" class="form-control s-form-v1__input g-radius--left-50 g-radius--right-50 text-uppercase" id="form-menu" placeholder="Trans Code" name="transcode">
                                                </div>
                                                <input type="hidden" name="subs" value="package2"/>
                                                <div class="g-text-center--xs">
                                                    <button type="submit" class="text-uppercase s-btn s-btn--xs s-btn--white-bg g-radius--50 g-font-weight--700" id="form-menu" name="submit">Buy</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- End Plan -->
                </div>
                <div class="row g-row-col--5 g-padding-y-10--xs"  id="package" >
                    <!-- Plan -->
                    <div class="col-md-6 g-margin-b-10--xs g-padding-y-20--xs g-margin-b-0--lg">
                        <section class="container1">
                            <div class="card3">
                                <div class="front flip">
                                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-cup"></i>
                                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">Package 3</h3>
                                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs">
                                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>Pick 15 of 38M<br>Jackpot Prediction</li>
                                                <li><i class="g-font-size-18--xs g-color--primary g-margin-r-10--xs ti-arrow-circle-down"></i>  For just </li>
                                            </ul>
                                            <div class="g-margin-b-40--xs">
                                                <span class="s-plan-v1__price-mark">Ksh.</span>
                                                <span class="s-plan-v1__price-tag">100</span>
                                            </div>
                                            <button type="button" class="text-uppercase s-btn s-btn--sm s-btn--primary-bg g-radius--50 g-padding-x-50--xs" onclick="flip3()">Buy</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="back flip">
                                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                                        <div class="s-plan-v1 g-text-center--xs g-bg-color--primary g-padding-y-100--xs">
                                            <i class="g-display-block--xs g-font-size-40--xs g-color--white g-margin-b-30--xs ti-wallet"></i>
                                            <h3 class="g-font-size-18--xs g-color--white g-margin-b-30--xs">MPESA</h3>
                                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs">
                                                <li><i class="g-font-size-13--xs g-color--white g-margin-r-10--xs ti-check"></i> Enter the phone Number </li>
                                                <li><i class="g-font-size-13--xs g-color--white g-margin-r-10--xs ti-check"></i> Enter the Transaction code </li>
                                            </ul>
                                            <div class="g-display-inline-block--xs">
                                            <form class="input-group"  action="includes/package.inc.php" method="POST">                                      
        
                                                    <input type="text" class="form-control s-form-v1__input g-radius--left-50 g-radius--right-50 text-uppercase" id="form-menu"  placeholder="*Phone Number" name="mpesaImsi">
                                                
                                                <div class="g-text-center--xs g-margin-b-5--xs">
                                                    <input type="text" class="form-control s-form-v1__input g-radius--left-50 g-radius--right-50 text-uppercase" id="form-menu" placeholder="Trans Code" name="transcode">
                                                </div>
                                                <input type="hidden" name="subs" value="package3"/>
                                                <div class="g-text-center--xs">
                                                    <button type="submit" class="text-uppercase s-btn s-btn--xs s-btn--white-bg g-radius--50 g-font-weight--700" id="form-menu" name="submit">Buy</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- End Plan -->

                    <!-- Plan -->
                    <div class="col-md-6 g-margin-b-10--xs g-padding-y-20--xs g-margin-b-0--lg">
                        <section class="container1">
                            <div class="card4">
                                <div class="front flip">
                                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-cup"></i>
                                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">Package 4</h3>
                                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs">
                                                <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>Get Sportpesa Mega<br>Jackpot Prediction</li>
                                                <li><i class="g-font-size-18--xs g-color--primary g-margin-r-10--xs ti-arrow-circle-down"></i>  For just </li>
                                            </ul>
                                            <div class="g-margin-b-40--xs">
                                                <span class="s-plan-v1__price-mark">Ksh.</span>
                                                <span class="s-plan-v1__price-tag">100</span>
                                            </div>
                                            <button type="button" class="text-uppercase s-btn s-btn--sm s-btn--primary-bg g-radius--50 g-padding-x-50--xs" onclick="flip4()">Buy</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="back flip">
                                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                                        <div class="s-plan-v1 g-text-center--xs g-bg-color--primary g-padding-y-100--xs">
                                            <i class="g-display-block--xs g-font-size-40--xs g-color--white g-margin-b-30--xs ti-wallet"></i>
                                            <h3 class="g-font-size-18--xs g-color--white g-margin-b-30--xs">MPESA</h3>
                                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs">
                                                <li><i class="g-font-size-13--xs g-color--white g-margin-r-10--xs ti-check"></i> Enter the phone Number </li>
                                                <li><i class="g-font-size-13--xs g-color--white g-margin-r-10--xs ti-check"></i> Enter the Transaction code </li>
                                            </ul>
                                            <div class="g-display-inline-block--xs">
                                            <form class="input-group"  action="includes/package.inc.php" method="POST">                                      
        
                                                    <input type="text" class="form-control s-form-v1__input g-radius--left-50 g-radius--right-50 text-uppercase" id="form-menu"  placeholder="*Phone Number" name="mpesaImsi">
                                                
                                                <div class="g-text-center--xs g-margin-b-5--xs">
                                                    <input type="text" class="form-control s-form-v1__input g-radius--left-50 g-radius--right-50 text-uppercase" id="form-menu" placeholder="Trans Code" name="transcode">
                                                </div>
                                                <input type="hidden" name="subs" value="package4"/>
                                                <div class="g-text-center--xs">
                                                    <button type="submit" class="text-uppercase s-btn s-btn--xs s-btn--white-bg g-radius--50 g-font-weight--700" id="form-menu" name="submit">Buy</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- End Plan -->



                </div>
            </div>
        </div>
        <!-- End Plan -->
        
        <!-- Clients -->
            <?php include ("layouts/clients.php"); ?>
        <!-- End Clients -->
        <!--========== END PAGE CONTENT ==========-->

        <!--========== FOOTER ==========-->
            <?php include ("layouts/footer.php"); ?>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        <script type="text/javascript">
            function flip() {
                $('.card1').toggleClass('flipped');
            }
        </script>
        <script type="text/javascript">
            function flip2() {
                $('.card2').toggleClass('flipped');
            }
        </script>
                <script type="text/javascript">
            function flip3() {
                $('.card3').toggleClass('flipped');
            }
        </script>
                <script type="text/javascript">
            function flip4() {
                $('.card4').toggleClass('flipped');
            }
        </script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                if(window.location.href.indexOf("field=empty") > -1) {
                   swal("Check Transaction Details", "One of the fields is empty", "error");;
                }
                if(window.location.href.indexOf("trans=successful") > -1) {
                   swal("Transaction Complete", "Transaction is being processed. Might take a few minuites", "success");;
                }
                if(window.location.href.indexOf("signup=success") > -1) {
                   swal("signup Complete", "Your Account has been created", "success");;
                }
            });
        </script>
        <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="vendor/swiper/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>

        <!-- General Components and Settings -->
        <script type="text/javascript" src="js/global.min.js"></script>
        <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="js/components/swiper.min.js"></script>
        <script type="text/javascript" src="js/components/wow.min.js"></script>
        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
</html>
