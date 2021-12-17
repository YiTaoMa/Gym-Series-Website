<nav class="box">
    <div class="Logo">
        <a class="a" href="index.php" target="_parent">
            <h1 class="logo">
                <!--Reference: The logo design and its css are inspired by https://onaircode.com/html-css-logo-design-examples/-->
                <span>ABC</span>
                <span class="cuboid">
                    <span class="cuboid-face cuboid-face-front"></span>
                    <span class="cuboid-face cuboid-face-back"></span>
                    <span class="cuboid-face cuboid-face-top"></span>
                    <span class="cuboid-face cuboid-face-bottom"></span>
                    <span class="cuboid-face cuboid-face-left"></span>
                    <span class="cuboid-face cuboid-face-right"></span>
                </span>
                <span>FITNESS</span>
            </h1>
        </a>
    </div>
    <a class="box a" href="index.php" target="_parent">Home </a>
    <a class="box a" href="Services.php" target="_parent">Services </a>
    <a class="box a" href="ContactUs.php" target="_parent">ContactUs </a>
    <a class="box a" href="Registera2.php" target="_parent">Register </a>

    <?php if(isUserLoggedIn()) { ?>
    <!--If the user logged in we will show the welcome message with its firstname
    which we call the method getLoggedInUser() in the functiona2.php -->
    <span>
        Welcome, <?= getLoggedInUser()['firstname']; ?>&nbsp;&nbsp;
    </span>
    <!--This if and else ststement means if the user is logged in we display the logout. otherwise 
     if the user haven't logged in we display login instead-->
    <a href="logout.php" style="color:cyan;font-weight:bold;"> Logout </a>
    <?php } else { ?>&nbsp;
    <a href="login.php" style="color:cyan;font-weight:bold;"> Login </a>
    <?php } ?>&nbsp;
    <!--If the user logged in they will see the member only page which is the myFitness page-->
    <?php if(isUserLoggedIn()) { ?>
    <a href="myFitness.php" class="nav-item nav-link" style="color:red;font-weight:bold;"> myFitness </a>
    <?php } ?>
</nav>