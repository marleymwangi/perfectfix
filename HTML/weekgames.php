<?php session_start() ?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PerfectFix</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="css/custom.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php"><img src="img/logo.png"></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_info">
                <span>Welcome, <?php echo $_SESSION['userName'] ?></span>
                <h2></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <?php include ("includes/checksubs.php") ?>
            <?php include ("layouts/sidemenu.php"); ?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <?php include ("layouts/sidemenufooter.php"); ?>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <?php include ("layouts/gamesnav.php"); ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>This Week's Games</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="">
                  <div class="x_content">
                    <div class="row">
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($homepred[0]>=$awaypred[0]) {echo('winner');}else{echo('loser');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i></div>
                          <div class="count"><?php include 'includes/getgames.php'; echo $homepred[0] ?></div>
                          <h3><?php include 'includes/getgames.php'; echo $home[0] ?></h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($drawpred[0]>=$homepred[0] && $drawpred[0]>=$awaypred[0]) {echo('winner');}else{echo('mid');} ?>">
                          <div class="icon"><i class="fa fa-balance-scale"></i>
                          </div>
                          <div class="count"><?php include 'includes/getgames.php'; echo $drawpred[0] ?></div>
                          <h3>VS</h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($awaypred[0]>=$homepred[0]) {echo('winner');}else{echo('loser');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i>
                          </div>
                          <div class="count"><?php include 'includes/getgames.php'; echo $awaypred[0] ?></div>

                          <h3><?php include 'includes/getgames.php'; echo $away[0] ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($homepred[1]>=$awaypred[1]) {echo('winner');}else{echo('loser');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i></div>
                          <div class="count"><?php include 'includes/getgames.php'; echo $homepred[1] ?></div>
                          <h3><?php include 'includes/getgames.php'; echo $home[1] ?></h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($drawpred[1]>=$homepred[1] && $drawpred[1]>=$awaypred[1]) {echo('winner');}else{echo('mid');} ?>">
                          <div class="icon"><i class="fa fa-balance-scale"></i>
                          </div>
                          <div class="count"><?php include 'includes/getgames.php'; echo $drawpred[1] ?></div>
                          <h3>VS</h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($awaypred[1]>=$homepred[1]) {echo('winner');}else{echo('loser');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i>
                          </div>
                          <div class="count"><?php include 'includes/getgames.php'; echo $awaypred[1] ?></div>

                          <h3><?php include 'includes/getgames.php'; echo $away[1] ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($homepred[2]>=$awaypred[2]) {echo('winner');}else{echo('loser');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i></div>
                          <div class="count"><?php include 'includes/getgames.php'; echo $homepred[2] ?></div>
                          <h3><?php include 'includes/getgames.php'; echo $home[2] ?></h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($drawpred[2]>=$homepred[2] && $drawpred[2]>=$awaypred[2]) {echo('winner');}else{echo('mid');} ?>">
                          <div class="icon"><i class="fa fa-balance-scale"></i>
                          </div>
                          <div class="count"><?php include 'includes/getgames.php'; echo $drawpred[2] ?></div>
                          <h3>VS</h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($awaypred[2]>=$homepred[2]) {echo('winner');}else{echo('loser');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i>
                          </div>
                          <div class="count"><?php include 'includes/getgames.php'; echo $awaypred[2] ?></div>

                          <h3><?php include 'includes/getgames.php'; echo $away[2] ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($homepred[3]>=$awaypred[3]) {echo('winner');}else{echo('loser');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i></div>
                          <div class="count"><?php include 'includes/getgames.php'; echo $homepred[3] ?></div>
                          <h3><?php include 'includes/getgames.php'; echo $home[3] ?></h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($drawpred[3]>=$homepred[3] && $drawpred[3]>=$awaypred[3]) {echo('winner');}else{echo('mid');} ?>">
                          <div class="icon"><i class="fa fa-balance-scale"></i>
                          </div>
                          <div class="count"><?php include 'includes/getgames.php'; echo $drawpred[3] ?></div>
                          <h3>VS</h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($awaypred[3]>=$homepred[3]) {echo('winner');}else{echo('loser');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i>
                          </div>
                          <div class="count"><?php include 'includes/getgames.php'; echo $awaypred[3] ?></div>

                          <h3><?php include 'includes/getgames.php'; echo $away[3] ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($homepred[4]>=$awaypred[4]) {echo('winner');}else{echo('loser');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i></div>
                          <div class="count"><?php include 'includes/getgames.php'; echo $homepred[4] ?></div>
                          <h3><?php include 'includes/getgames.php'; echo $home[4] ?></h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($drawpred[4]>=$homepred[4] && $drawpred[4]>=$awaypred[4]) {echo('winner');}else{echo('mid');} ?>">
                          <div class="icon"><i class="fa fa-balance-scale"></i>
                          </div>
                          <div class="count"><?php include 'includes/getgames.php'; echo $drawpred[4] ?></div>
                          <h3>VS</h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($awaypred[4]>=$homepred[4]) {echo('winner');}else{echo('loser');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i>
                          </div>
                          <div class="count"><?php include 'includes/getgames.php'; echo $awaypred[4] ?></div>

                          <h3><?php include 'includes/getgames.php'; echo $away[4] ?></h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>    
    <!-- Chart.js -->
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- easy-pie-chart -->
    <script src="vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="js/custom.min.js"></script>
	
  </body>
</html>