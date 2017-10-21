<ul class="list-unstyled s-header__nav-menu">
    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider g-color--primary g-margin-l-70--xs g-margin-t-40--xs g-font-weight--400 <?php if ($page=='home') {echo'-is-active'; }?>" href="index.php">Home</a></li>
    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider g-color--primary g-margin-l-70--xs g-margin-t-40--xs g-font-weight--400 <?php if ($page=='about') {echo'-is-active'; }?>"" href="services.php">Packages</a></li>
    <?php 
        if (isset($_SESSION['userName'])) {
            echo '<li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider g-color--primary g-margin-l-70--xs g-margin-t-40--xs g-font-weight--400" href="weekgames.php">Predictions</a></li>';                                          
        }
     ?>
    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider g-color--primary g-margin-l-70--xs g-margin-t-40--xs g-font-weight--400 <?php if ($page=='services') {echo'-is-active'; }?>" href="contacts.php">Contacts</a></li>
    <?php 
        if (isset($_SESSION['userName'])) {
            echo '<li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider g-color--primary g-margin-l-70--xs g-margin-t-40--xs g-font-weight--400" href="includes/logout.inc.php">Log Out</a></li>';                                          
        } else{

            echo '<li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider g-color--primary g-margin-l-70--xs g-margin-t-40--xs g-font-weight--400" href="signin.php">Log In</a></li>'; 
        }
     ?>
</ul>