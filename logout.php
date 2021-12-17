 <!--code is inspired from week7 Tute/Lab sheet-->
<?php
    require_once('includes/fragment/functionsa2.php');
    logoutUser();
    header('Location: login.php');
    exit();
