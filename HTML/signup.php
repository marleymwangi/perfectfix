<?php session_start() ?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
        <?php $page='signup'; include ("layouts/head.php"); ?>
    <!-- End Head -->

    <!-- Body -->
    <body>

        <!--========== HEADER ==========-->
            <?php $page='signup'; include ("layouts/header.php"); ?>
        <!--========== END HEADER ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- Sign Up Form -->
        <div class="g-position--relative g-bg-color--dark-light">
            <div class="g-container--md g-padding-y-125--xs">
                <div class="g-text-center--xs g-margin-t-50--xs g-margin-b-80--xs">
                    <p class="text-uppercase g-font-size-16--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Sign Up</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--sm g-color--white">Create an Account</h2>
                </div>
                <div class="row g-row-col--5 g-margin-b-80--xs ">
                    <div class="col-xs-6 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                        <div class="g-text-center--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-email"></i>
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Email</h4>
                            <p class="g-color--white-opacity">info@perfectfix.co</p>
                        </div>
                    </div>
                    <div class="col-xs-6 g-full-width--xs">
                        <div class="g-text-center--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-headphone-alt"></i>
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Call at</h4>
                            <p class="g-color--white-opacity">+ (254) 700  473 319</p>
                        </div>
                    </div>
                </div>
                <form class="center-block g-width-500--sm g-width-550--md" action="includes/signup.inc.php" method="POST">
                    <div class="g-margin-b-30--xs">
                        <input type="text" class="form-control s-form-v3__input g-font-weight--700" placeholder="* FIRST NAME" name = "firstName" >
                    </div>
                    <div class="g-margin-b-30--xs">
                        <input type="text" class="form-control s-form-v3__input g-font-weight--700" placeholder="* LAST NAME" name="lastName">
                    </div>
                    <div class="g-margin-b-30--xs">
                        <input type="text" class="form-control s-form-v3__input g-font-weight--700" placeholder="* USER NAME" name="userName">
                    </div>
                    <div class="row g-row-col-5 g-margin-b-50--xs">
                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <input type="password" class="form-control s-form-v3__input g-font-weight--700" placeholder="* PASSWORD" name="passwrd">
                        </div>
                        <div class="col-sm-6">
                            <input type="password" class="form-control s-form-v3__input g-font-weight--700" placeholder="* RE-TYPE PASSWORD" name="retypepass">
                        </div>
                    </div>
                    <div class="g-margin-b-30--xs">
                            <input type="email" class="form-control s-form-v3__input g-font-weight--700" placeholder="* EMAIL" name="email">
                            </i>
                    </div>
                    <div class="g-margin-b-30--xs">
                            <input type="text" class="form-control s-form-v3__input g-font-weight--700" placeholder="* 07XX XXX XXX" name="phone">
                    </div>
                    <div class="g-text-center--xs">
                        <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs g-font-weight--700" name="submit">Submit</button>
                    </div>
                </form>
                <div class="g-text-center--xs g-margin-t-50--xs g-margin-b-80--xs">
                    <a class="text-uppercase g-font-size-16--xs g-font-weight--700 g-color--primary-opacity g-letter-spacing--2 g-margin-b-25--xs" href="signin.php">Already have an account? Click here!</a>
                </div>
            </div>
            <img class="s-mockup-v2" src="img/mockups/pencil-01.png" alt="Mockup Image">
        </div>
        <!-- End sign up Form -->
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
            $(document).ready(function () {
                if(window.location.href.indexOf("signup=empty") > -1) {
                   swal("Check Sign in Details", "One of the fields is empty", "error");;
                }
                if(window.location.href.indexOf("signup=invalidname") > -1) {
                   swal("Check First or Last", "Names cannot contain Special Characters", "error");;
                }
                if(window.location.href.indexOf("signup=invaliduserName") > -1) {
                   swal("Check User Name", "Account exist with that User Name", "error");;
                }
                if(window.location.href.indexOf("signup=invalidemail") > -1) {
                   swal("Check Email address", "You entered an Invald Email address", "error");
                }
                if(window.location.href.indexOf("ssignup=invalidphone") > -1) {
                   swal("Check Phone Number", "Account exist with that User Name", "error");;
                }
                if(window.location.href.indexOf("signup=signup=passmismatch") > -1) {
                   swal("Password Mismatch", "Password Verification Mismatch", "error");;
                }
                if(window.location.href.indexOf("login=success") > -1) {
                   swal("Transaction Complete", "Transaction is being processed. Might take a few minuites", "success");;
                }
                if(window.location.href.indexOf("login=notsignedinerror") > -1) {
                   swal("Sorry", "You don't seem to be signed in", "info");;
                }
            });
        </script>
        <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>

        <!-- General Components and Settings -->
        <script type="text/javascript" src="js/global.min.js"></script>
        <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
</html>
