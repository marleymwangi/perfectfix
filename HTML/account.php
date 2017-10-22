<?php session_start() ?>
<?php include ("includes/checkTransHist.php") ?>
<?php include ("includes/checksubs.php") ?>

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
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="css/custom.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><img src="img/logo.png"></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_info">
                <span>Welcome, <?php echo $_SESSION['userName']; ?></span>
                <h2></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Home</span></a></li>
                  <li><a href="services.php"><i class="fa fa-gift"></i>Get Tips</span></a></li>
                  <li><a href="weekgames.php"><i class="fa fa-balance-scale"></i> Predictions</span></a></li>
                  <li><a href="includes/logout.inc.php"><i class="fa fa-sign-out"></i> logout</span></a></li>
                </ul>
              </div>
            </div>
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
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-6 col-sm-6 col-xs-12 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i>User Account Name</span>
              <div class="count">Welcome <?php echo $_SESSION['userName']; ?></div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Amount</span>
              <div class="count green">Ksh <?php echo $_SESSION['amount']; ?></div>
            </div>
          </div>
          <!-- /top tiles -->
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">

                    <h2 >Account Summary</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="col-md-6 col-sm-12 col-xs-12">
                      <div>
                        <div class="x_title">
                          <h2> Resent Transaction History </h2>
                          <div class="clearfix"></div>
                        </div>
                        <ul class="list-unstyled top_profiles scroll-view">
                          <li class="media event">
                            <a class="pull-left border-aero profile_thumb">
                              <i class="fa fa-user blue"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#"><?php echo $_SESSION['userName']; ?></a>
                              <p><strong><?php if(!isset($amount[0])){ echo '0.00';} else {echo $amount[0];} ?> </strong> <?php if(!isset($debit[0])){ echo 'No Transaction';}elseif ($debit[0]==1) { echo 'Ksh. Debited to Account';} elseif ($debit[0]==0){ echo 'Ksh. Credited from Account';}?></p>
                              <p> <small>Date : <?php if(!isset($transTime[0])){ echo '0.00';} else { echo $transTime[0];}?></small>
                              </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left border-green profile_thumb">
                              <i class="fa fa-user green"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#"><?php echo $_SESSION['userName']; ?></a>
                              <p><strong><?php if(!isset($amount[1])){ echo '0.00';} else {echo $amount[1];} ?> </strong> <?php if(!isset($debit[1])){ echo 'No Transaction';}elseif ($debit[1]==1) { echo 'Ksh. Debited to Account';} elseif ($debit[1]==0){ echo 'Ksh. Credited from Account';}?></p>
                              <p> <small>Date : <?php if(!isset($transTime[1])){ echo '0.00';} else { echo $transTime[1];}?></small>
                              </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left border-blue profile_thumb">
                              <i class="fa fa-user blue"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#"><?php echo $_SESSION['userName']; ?></a>
                              <p><strong><?php if(!isset($amount[2])){ echo '0.00';} else {echo $amount[2];}  ?> </strong> <?php if(!isset($debit[2])){ echo 'No Transaction';}elseif ($debit[2]==1) { echo 'Ksh. Debited to Account';} elseif ($debit[2]==0){ echo 'Ksh. Credited from Account';}?></p>
                              <p> <small>Date : <?php if(!isset($transTime[2])){ echo '0.00';} else { echo $transTime[2];}?></small>
                              </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left border-aero profile_thumb">
                              <i class="fa fa-user green"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#"><?php echo $_SESSION['userName']; ?></a>
                              <p><strong><?php if(!isset($amount[3])){ echo '0.00';} else {echo $amount[3];} ?> </strong> <?php if(!isset($debit[3])){ echo 'No Transaction';}elseif ($debit[3]==1) { echo 'Ksh. Debited to Account';} elseif ($debit[3]==0){ echo 'Ksh. Credited from Account';}?></p>
                              <p> <small>Date : <?php if(!isset($transTime[3])){ echo '0.00';} else { echo $transTime[3];}?></small>
                              </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left border-green profile_thumb">
                              <i class="fa fa-user blue"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#"><?php echo $_SESSION['userName']; ?></a>
                              <p><strong><?php if(!isset($amount[4])){ echo '0.00';} else {echo $amount[4];}  ?> </strong> <?php if(!isset($debit[4])){ echo 'No Transaction';}elseif ($debit[4]==1) { echo 'Ksh. Debited to Account';} elseif ($debit[4]==0){ echo 'Ksh. Credited from Account';}?></p>
                              <p> <small>Date : <?php if(!isset($transTime[4])){ echo '0.00';} else { echo $transTime[4];}?></small>
                              </p>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12">
                      <div>
                        <div class="x_title">
                          <h2>Subscriptions</h2>
                          <div class="clearfix"></div>
                        </div>
                        <ul class="list-unstyled top_profiles scroll-view">
                          <li class="media event">
                            <div class="col-xs-9">
                              <a class="pull-left border-<?php if($weekgames==1){ echo 'green';} else { echo 'blue'; } ?> profile_thumb">
                                <i class="fa fa-futbol-o <?php if($weekgames==1){ echo 'green';} else { echo 'blue'; } ?>"></i>
                              </a>
                              <div class="media-body">
                                <a class="title" href="#"><h2 class="<?php if($weekgames==1){ echo 'green';} else { echo 'blue'; } ?>">Package 1</h2></a>
                                <h4 class="<?php if($weekgames==1){ echo 'green';} else { echo 'red'; } ?>"><?php if($weekgames==1){ echo 'Valid Subscription';} else { echo 'Not Subscribed'; } ?></h4>
                              </div>
                            </div>
                            <div class="col-xs-3">
                              <form style="padding-top: 2.5rem; <?php if($weekgames==1){ echo 'display: none;';}?>">
                              <button type="button" class="btn btn-round btn-success" onclick="window.location.href='services.php'">BUY</button>
                              </form>
                            </div>
                          </li>
                          <li class="media event">
                            <div class="col-xs-9">
                              <a class="pull-left border-<?php if($thirteenj==1){ echo 'green';} else { echo 'blue'; } ?> profile_thumb">
                                <i class="fa fa-futbol-o <?php if($thirteenj==1){ echo 'green';} else { echo 'blue'; } ?>"></i>
                              </a>
                              <div class="media-body">
                                <a class="title" href="#"><h2 class="<?php if($thirteenj==1){ echo 'green';} else { echo 'blue'; } ?>">Package 1</h2></a>
                                <h4 class="<?php if($thirteenj==1){ echo 'green';} else { echo 'red'; } ?>"><?php if($thirteenj==1){ echo 'Valid Subscription';} else { echo 'Not Subscribed'; } ?></h4>
                              </div>
                            </div>
                            <div class="col-xs-3">
                              <form style="padding-top: 2.5rem; <?php if($thirteenj==1){ echo 'display: none;';}?>">
                              <button type="button" class="btn btn-round btn-success" onclick="window.location.href='services.php'">BUY</button>
                              </form>
                            </div>
                          </li>
                          <li class="media event">
                            <div class="col-xs-9">
                              <a class="pull-left border-<?php if($fifteenj==1){ echo 'green';} else { echo 'blue'; } ?> profile_thumb">
                                <i class="fa fa-futbol-o <?php if($fifteenj==1){ echo 'green';} else { echo 'blue'; } ?>"></i>
                              </a>
                              <div class="media-body">
                                <a class="title" href="#"><h2 class="<?php if($fifteenj==1){ echo 'green';} else { echo 'blue'; } ?>">Package 1</h2></a>
                                <h4 class="<?php if($fifteenj==1){ echo 'green';} else { echo 'red'; } ?>"><?php if($fifteenj==1){ echo 'Valid Subscription';} else { echo 'Not Subscribed'; } ?></h4>
                              </div>
                            </div>
                            <div class="col-xs-3">
                              <form style="padding-top: 2.5rem; <?php if($fifteenj==1){ echo 'display: none;';}?>">
                              <button type="button" class="btn btn-round btn-success" onclick="window.location.href='services.php'">BUY</button>
                              </form>
                            </div>
                          </li>
                          <li class="media event">
                            <div class="col-xs-9">
                              <a class="pull-left border-<?php if($seventeenj==1){ echo 'green';} else { echo 'blue'; } ?> profile_thumb">
                                <i class="fa fa-futbol-o <?php if($seventeenj==1){ echo 'green';} else { echo 'blue'; } ?>"></i>
                              </a>
                              <div class="media-body">
                                <a class="title" href="#"><h2 class="<?php if($seventeenj==1){ echo 'green';} else { echo 'blue'; } ?>">Package 1</h2></a>
                                <h4 class="<?php if($seventeenj==1){ echo 'green';} else { echo 'red'; } ?>"><?php if($weekgames==1){ echo 'Valid Subscription';} else { echo 'Not Subscribed'; } ?></h4>
                              </div>
                            </div>
                            <div class="col-xs-3">
                              <form style="padding-top: 2.5rem; <?php if($seventeenj==1){ echo 'display: none;';}?>">
                              <button type="button" class="btn btn-round btn-success" onclick="window.location.href='services.php'">BUY</button>
                              </form>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>


        <!-- footer content -->
        <footer>
          <div class="pull-right">
             Result Provided by<a href="index.php">Perfectfix</a>
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
    
    <!-- Custom Theme Scripts -->
    <script src="js/custom.min.js"></script>
  </body>
</html>