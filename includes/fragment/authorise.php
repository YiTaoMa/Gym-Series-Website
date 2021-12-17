 <!--This file inspired from week7 Tute/Lab sheet-->
 <?php
    require_once('includes/fragment/functionsa2.php');

    if(!isUserLoggedIn()) {
        header('Location: login.php');
        exit();
    }