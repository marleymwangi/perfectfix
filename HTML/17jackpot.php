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
              <a href="index.php" class="site_title"><img src="img/logo.png"></a>
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
                <h3>13 Games Jackpots</h3>
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
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="">
                  <div class="x_content">
                    <div class="row">
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($homepred[0]>=$awaypred[0]) {echo('winner');}else{echo('loser');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i></div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $homepred[0] ?></div>
                          <h3><?php include 'includes/get17games.php'; echo $home[0] ?></h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($drawpred[0]>=$homepred[0] && $drawpred[0]>=$awaypred[0]) {echo('winner');}elseif($homepred[0]>=$awaypred[0]) {echo('midleft');}else{echo('midright');} ?>">
                          <div class="icon"><i class="fa fa-balance-scale"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $drawpred[0] ?></div>
                          <h3>VS</h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($awaypred[0]>=$homepred[0]) {echo('winner');}else{echo('loserright');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $awaypred[0] ?></div>

                          <h3><?php include 'includes/get17games.php'; echo $away[0] ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($homepred[1]>=$awaypred[1]) {echo('winner');}else{echo('loser');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i></div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $homepred[1] ?></div>
                          <h3><?php include 'includes/get17games.php'; echo $home[1] ?></h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($drawpred[1]>=$homepred[1] && $drawpred[1]>=$awaypred[1]) {echo('winner');}elseif($homepred[1]>=$awaypred[1]) {echo('midleft');}else{echo('midright');} ?>">
                          <div class="icon"><i class="fa fa-balance-scale"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $drawpred[1] ?></div>
                          <h3>VS</h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($awaypred[1]>=$homepred[1]) {echo('winner');}else{echo('loserright');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $awaypred[1] ?></div>

                          <h3><?php include 'includes/get17games.php'; echo $away[1] ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($homepred[2]>=$awaypred[2]) {echo('winner');}else{echo('loser');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i></div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $homepred[2] ?></div>
                          <h3><?php include 'includes/get17games.php'; echo $home[2] ?></h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($drawpred[2]>=$homepred[2] && $drawpred[2]>=$awaypred[2]) {echo('winner');}elseif($homepred[2]>=$awaypred[2]) {echo('midleft');}else{echo('midright');} ?>">
                          <div class="icon"><i class="fa fa-balance-scale"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $drawpred[2] ?></div>
                          <h3>VS</h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($awaypred[2]>=$homepred[2]) {echo('winner');}else{echo('loserright');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $awaypred[2] ?></div>

                          <h3><?php include 'includes/get17games.php'; echo $away[2] ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($homepred[3]>=$awaypred[3]) {echo('winner');}else{echo('loser');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i></div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $homepred[3] ?></div>
                          <h3><?php include 'includes/get17games.php'; echo $home[3] ?></h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($drawpred[3]>=$homepred[3] && $drawpred[3]>=$awaypred[3]) {echo('winner');}elseif($homepred[3]>=$awaypred[3]) {echo('midleft');}else{echo('midright');} ?>">
                          <div class="icon"><i class="fa fa-balance-scale"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $drawpred[3] ?></div>
                          <h3>VS</h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($awaypred[3]>=$homepred[3]) {echo('winner');}else{echo('loserright');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $awaypred[3] ?></div>

                          <h3><?php include 'includes/get17games.php'; echo $away[3] ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($homepred[4]>=$awaypred[4]) {echo('winner');}else{echo('loser');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i></div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $homepred[4] ?></div>
                          <h3><?php include 'includes/get17games.php'; echo $home[4] ?></h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($drawpred[4]>=$homepred[4] && $drawpred[4]>=$awaypred[4]) {echo('winner');}elseif($homepred[4]>=$awaypred[4]) {echo('midleft');}else{echo('midright');} ?>">
                          <div class="icon"><i class="fa fa-balance-scale"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $drawpred[4] ?></div>
                          <h3>VS</h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($awaypred[4]>=$homepred[4]) {echo('winner');}else{echo('loserright');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $awaypred[4] ?></div>

                          <h3><?php include 'includes/get17games.php'; echo $away[4] ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($homepred[5]>=$awaypred[5]) {echo('winner');}else{echo('loser');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i></div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $homepred[5] ?></div>
                          <h3><?php include 'includes/get17games.php'; echo $home[5] ?></h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($drawpred[5]>=$homepred[5] && $drawpred[5]>=$awaypred[5]) {echo('winner');}elseif($homepred[5]>=$awaypred[5]) {echo('midleft');}else{echo('midright');} ?>">
                          <div class="icon"><i class="fa fa-balance-scale"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $drawpred[5] ?></div>
                          <h3>VS</h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($awaypred[5]>=$homepred[5]) {echo('winner');}else{echo('loserright');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $awaypred[5] ?></div>

                          <h3><?php include 'includes/get17games.php'; echo $away[5] ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($homepred[6]>=$awaypred[6]) {echo('winner');}else{echo('loser');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i></div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $homepred[6] ?></div>
                          <h3><?php include 'includes/get17games.php'; echo $home[6] ?></h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($drawpred[6]>=$homepred[6] && $drawpred[6]>=$awaypred[6]) {echo('winner');}elseif($homepred[6]>=$awaypred[6]) {echo('midleft');}else{echo('midright');} ?>">
                          <div class="icon"><i class="fa fa-balance-scale"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $drawpred[6] ?></div>
                          <h3>VS</h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($awaypred[6]>=$homepred[6]) {echo('winner');}else{echo('loserright');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $awaypred[6] ?></div>

                          <h3><?php include 'includes/get17games.php'; echo $away[6] ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($homepred[7]>=$awaypred[7]) {echo('winner');}else{echo('loser');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i></div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $homepred[7] ?></div>
                          <h3><?php include 'includes/get17games.php'; echo $home[7] ?></h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($drawpred[7]>=$homepred[7] && $drawpred[7]>=$awaypred[7]) {echo('winner');}elseif($homepred[7]>=$awaypred[7]) {echo('midleft');}else{echo('midright');} ?>">
                          <div class="icon"><i class="fa fa-balance-scale"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $drawpred[7] ?></div>
                          <h3>VS</h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($awaypred[7]>=$homepred[7]) {echo('winner');}else{echo('loserright');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $awaypred[7] ?></div>

                          <h3><?php include 'includes/get17games.php'; echo $away[7] ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($homepred[8]>=$awaypred[8]) {echo('winner');}else{echo('loser');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i></div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $homepred[8] ?></div>
                          <h3><?php include 'includes/get17games.php'; echo $home[8] ?></h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($drawpred[8]>=$homepred[8] && $drawpred[8]>=$awaypred[8]) {echo('winner');}elseif($homepred[8]>=$awaypred[8]) {echo('midleft');}else{echo('midright');} ?>">
                          <div class="icon"><i class="fa fa-balance-scale"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $drawpred[8] ?></div>
                          <h3>VS</h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($awaypred[8]>=$homepred[8]) {echo('winner');}else{echo('loserright');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $awaypred[8] ?></div>

                          <h3><?php include 'includes/get17games.php'; echo $away[8] ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($homepred[9]>=$awaypred[9]) {echo('winner');}else{echo('loser');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i></div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $homepred[9] ?></div>
                          <h3><?php include 'includes/get17games.php'; echo $home[9] ?></h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($drawpred[9]>=$homepred[9] && $drawpred[9]>=$awaypred[9]) {echo('winner');}elseif($homepred[9]>=$awaypred[9]) {echo('midleft');}else{echo('midright');} ?>">
                          <div class="icon"><i class="fa fa-balance-scale"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $drawpred[9] ?></div>
                          <h3>VS</h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($awaypred[9]>=$homepred[9]) {echo('winner');}else{echo('loserright');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $awaypred[9] ?></div>

                          <h3><?php include 'includes/get17games.php'; echo $away[9] ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($homepred[10]>=$awaypred[10]) {echo('winner');}else{echo('loser');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i></div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $homepred[10] ?></div>
                          <h3><?php include 'includes/get17games.php'; echo $home[10] ?></h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($drawpred[10]>=$homepred[10] && $drawpred[10]>=$awaypred[10]) {echo('winner');}elseif($homepred[10]>=$awaypred[10]) {echo('midleft');}else{echo('midright');} ?>">
                          <div class="icon"><i class="fa fa-balance-scale"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $drawpred[10] ?></div>
                          <h3>VS</h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($awaypred[10]>=$homepred[10]) {echo('winner');}else{echo('loserright');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $awaypred[10] ?></div>

                          <h3><?php include 'includes/get17games.php'; echo $away[10] ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($homepred[11]>=$awaypred[11]) {echo('winner');}else{echo('loser');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i></div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $homepred[11] ?></div>
                          <h3><?php include 'includes/get17games.php'; echo $home[11] ?></h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($drawpred[11]>=$homepred[11] && $drawpred[11]>=$awaypred[11]) {echo('winner');}elseif($homepred[11]>=$awaypred[11]) {echo('midleft');}else{echo('midright');} ?>">
                          <div class="icon"><i class="fa fa-balance-scale"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $drawpred[11] ?></div>
                          <h3>VS</h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($awaypred[11]>=$homepred[11]) {echo('winner');}else{echo('loserright');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $awaypred[11] ?></div>

                          <h3><?php include 'includes/get17games.php'; echo $away[11] ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($homepred[12]>=$awaypred[12]) {echo('winner');}else{echo('loser');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i></div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $homepred[12] ?></div>
                          <h3><?php include 'includes/get17games.php'; echo $home[12] ?></h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($drawpred[12]>=$homepred[12] && $drawpred[12]>=$awaypred[12]) {echo('winner');}elseif($homepred[12]>=$awaypred[12]) {echo('midleft');}else{echo('midright');} ?>">
                          <div class="icon"><i class="fa fa-balance-scale"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $drawpred[12] ?></div>
                          <h3>VS</h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($awaypred[12]>=$homepred[12]) {echo('winner');}else{echo('loserright');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $awaypred[12] ?></div>

                          <h3><?php include 'includes/get17games.php'; echo $away[12] ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($homepred[13]>=$awaypred[13]) {echo('winner');}else{echo('loser');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i></div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $homepred[13] ?></div>
                          <h3><?php include 'includes/get17games.php'; echo $home[13] ?></h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($drawpred[13]>=$homepred[13] && $drawpred[13]>=$awaypred[13]) {echo('winner');}elseif($homepred[13]>=$awaypred[13]) {echo('midleft');}else{echo('midright');} ?>">
                          <div class="icon"><i class="fa fa-balance-scale"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $drawpred[13] ?></div>
                          <h3>VS</h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($awaypred[13]>=$homepred[13]) {echo('winner');}else{echo('loserright');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $awaypred[13] ?></div>

                          <h3><?php include 'includes/get17games.php'; echo $away[13] ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($homepred[14]>=$awaypred[14]) {echo('winner');}else{echo('loser');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i></div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $homepred[14] ?></div>
                          <h3><?php include 'includes/get17games.php'; echo $home[14] ?></h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($drawpred[14]>=$homepred[14] && $drawpred[14]>=$awaypred[14]) {echo('winner');}elseif($homepred[14]>=$awaypred[14]) {echo('midleft');}else{echo('midright');} ?>">
                          <div class="icon"><i class="fa fa-balance-scale"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $drawpred[14] ?></div>
                          <h3>VS</h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($awaypred[14]>=$homepred[14]) {echo('winner');}else{echo('loserright');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $awaypred[14] ?></div>

                          <h3><?php include 'includes/get17games.php'; echo $away[14] ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($homepred[15]>=$awaypred[15]) {echo('winner');}else{echo('loser');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i></div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $homepred[15] ?></div>
                          <h3><?php include 'includes/get17games.php'; echo $home[15] ?></h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($drawpred[15]>=$homepred[15] && $drawpred[15]>=$awaypred[15]) {echo('winner');}elseif($homepred[15]>=$awaypred[15]) {echo('midleft');}else{echo('midright');} ?>">
                          <div class="icon"><i class="fa fa-balance-scale"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $drawpred[15] ?></div>
                          <h3>VS</h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($awaypred[15]>=$homepred[15]) {echo('winner');}else{echo('loserright');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $awaypred[15] ?></div>

                          <h3><?php include 'includes/get17games.php'; echo $away[15] ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($homepred[16]>=$awaypred[16]) {echo('winner');}else{echo('loser');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i></div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $homepred[16] ?></div>
                          <h3><?php include 'includes/get17games.php'; echo $home[16] ?></h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="tile-stats <?php include 'includes/getgames.php'; if($drawpred[16]>=$homepred[16] && $drawpred[16]>=$awaypred[16]) {echo('winner');}elseif($homepred[16]>=$awaypred[16]) {echo('midleft');}else{echo('midright');} ?>">
                          <div class="icon"><i class="fa fa-balance-scale"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $drawpred[16] ?></div>
                          <h3>VS</h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="tile-stats <?php include 'includes/get17games.php'; if($awaypred[16]>=$homepred[16]) {echo('winner');}else{echo('loserright');} ?>">
                          <div class="icon"><i class="fa fa-futbol-o"></i>
                          </div>
                          <div class="count"><?php include 'includes/get17games.php'; echo $awaypred[16] ?></div>

                          <h3><?php include 'includes/get17games.php'; echo $away[16] ?></h3>
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