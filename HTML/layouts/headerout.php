<li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="index.php">Welcome <?php echo $_SESSION['userName'] ?></a></li>
<li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider <?php if ($page=='predictions') {echo'-is-active'; }?>" href="<?php include ('includes/checksubs.php'); if ($weekgames==1) {echo 'weekgames.php';} else if ($thirteenj==1) {echo '13jackpot.php';} else if ($fifteenj==1) {echo '15jackpot.php';} else if ($seventeenj==1) {echo '17jackpot.php';} ?>">Predictions</a></li>

<li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="index.php">My Account</a></li>

<form  action="includes/logout.inc.php" method="POST">
    <div class="g-text-center--xs s-header__nav-menu-item">
        <button type="submit" class="text-uppercase s-btn s-btn--xs s-btn--white-bg g-radius--50 g-padding-x-10--xs g-font-weight--700 g-pull-right--xs" id="form-menu" name="submit">Logout</button>
    </div>
</form>
