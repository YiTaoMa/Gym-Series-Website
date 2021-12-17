<!--Code inspired from week 7 Tute.Lab sheet-->
<!--Call teh function file because we need to use the isuser login method-->
<?php require_once('includes/fragment/functionsa2.php'); ?>
<!doctype html>
<html lang="en">
<!--because the header contains the title are all different in other pages so not include in the fragment-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Assignment 2 Gym Website sitemap</title>
    <!--Because the jQuery CDN is different from the other page and only useed in this page 
so not include in the fragment -->
    <!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Source: https://github.com/sutara79/jquery.breadcrumbs-generator -->
    <!-- include the jQuery breadcrumbs plugin -->
    <script src="plugins/jquery.breadcrumbs-generator.js"></script>
    <!-- you will need to write this to invoke/use the plugin -->
    <script>
    $(function() {
        $('#breadcrumbs').breadcrumbsGenerator(); //will be displayed in <ol> element
    });
    </script>

    <style>
    a:hover {
        color: red;
    }

    a:link {
        text-decoration: none;
    }

    a {
        font-weight: bold;
    }
    </style>

</head>

<body>
    <!-- <h1>Menu1-2</h1>

    <h2>Breadcrumb sitemp demo</h2> -->

    <!-- Create an empty list for the breadcrumbs This is where sitemap will be displayed -->
    <ol id="breadcrumbs"></ol>

    <!-- sitemap links for your website you will need to modify these to match your website pages -->
    <nav id="sitemaps">
        <h2>Sitemap</h2>
        <ul>
            <li>
                <a href="index.php">Home</a>
                <ul>
                    <li>
                        <a href="Services.php">Services</a>
                    </li>
                    <li><a href="KnowledgeBlock1.php">10 SIMPLE WAYS TO RECHARGE YOUR BODY</a></li>
                    <li>
                        <a href="KnowledgeBlock2.php">6 WINTER FOOD RULES</a>
                    </li>
                </ul>
            <li><a href="Services.php">Services</a></li>
            <li> <a href="ContactUs.php">ContractUs</a></li>
            <li><a href="Registera2.php">Register</a></li>
            <!--This code here means we check if ther user loged in or not, if the user loged in, they can review the MyFitness page
            in the site map but if the user haven't loged in, the myfitness page will take the user to the log in page instead.-->
            <?php if(isUserLoggedIn()) { ?>

            <li> <a href="myFitness.php" class="nav-item nav-link"> myFitness </a></li>
            <ul>
                <li> <a href="category.php?category=walking" class="nav-item nav-link"> walking</a>
                </li>
                <li> <a href="category.php?category=mowing-the-lawn" class="nav-item nav-link"> mowing-the-lawn </a>
                </li>
                <li> <a href="category.php?category=walking-the-dog" class="nav-item nav-link">walking-the-dog </a>
                </li>
            </ul>
            <?php } else { ?>
            <li> <a href="login.php" class="nav-item nav-link"> myFitness </a></li>
            <?php } ?>
            </li>
        </ul>
    </nav>
</body>

</html>