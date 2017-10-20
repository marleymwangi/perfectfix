<ul class="list-unstyled s-header__nav-menu">

    <?php 
        if (isset($_SESSION['userName'])) {
            include ("headerout.php");
            
        } else{

            include("headerin.php");
        }
     ?>
</ul>