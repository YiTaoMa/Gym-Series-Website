<?php require_once('includes/fragment/functionsa2.php'); ?>
<!doctype html>
<html lang="en">
<!--because the header contains the title are all different in other pages so not include in the fragment-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Assignment 2 Gym Website Home Page</title>
    <link rel="stylesheet" type="text/css" href="style/index.css?t=<?php echo filemtime("style/index.css"); ?>">
    <!--Reerence: The bootstrap is inspired by COSC2413 Web programming Shekhar Lecture5 Example 9.-->
    <?php require_once("includes/fragment/bootstrap.php"); ?>
</head>

<body>
    <div class="container">
        <div class="MainPage">
            <!--Reference: The logo design and its css are inspired by https://onaircode.com/html-css-logo-design-examples/-->
            <!--include header-->
            <?php require_once("includes/fragment/header.php"); ?>

            <div class="information">
                <img class="GymBI" src="assets/images/gymbackground.jpg" alt="GymImage" width="200px" height="400px">
                <!-- Reference:  All images in this HTML file are copied from https://unsplash.com/ -->
                <div class="SlogonCenter">
                    <h1>Don't stop till you drop!</h1>
                </div>
                <p class="box"> Melbourne-based Adrenaline Buzz Club (ABC) has operated in the sprawling City of Casey
                    for
                    the past 20
                    years. It incorporates a six-lane 25-metre indoor heated swimming pool and aquatics area, fully
                    equipped
                    gymnasium, squash courts and two group fitness studios.
                    All ABC members have access to the swimming pool, wading pool, spa, sauna, steam room and squash
                    courts
                    as part of their membership. Conveniently located change rooms provide direct access to the pool.
                    Access to the Fitness Centre is an optional extra. Fitness Centre access allows unlimited use of the
                    Fitness Centre including the gymnasium, group exercise classes, health appraisals and personalised
                    fitness programs.<br><br></p>
                <!--Background information inspired by https://www.racv.com.au/travel-leisure/racv-club/city-club.html-->

            </div>
            <div class="box MemberSuccessStories">
                <p>Member Success stories<br></p>
            </div>

            <article class="box story1">
                <p class="Ethan">Ethan Taylor<br></p>
                <div class="text1">
                    <p> Bullied for his weight from a young age, Ethan Taylor struggled physically, mentally and
                        emotionally
                        well into adulthood. But after joining Anytime Fitness and working closely with a trainer, Ethan
                        began
                        to feel hopeful about his future for the very first time.</p>
                    <!--Reference: Member success story inspired by https://www.anytimefitness.com/-->
                </div>
                <img class="StoryPerson1" src="assets/images/StoryPerson.jpg" alt="Member: Ethan Taylor"><br><br>
            </article>

            <div class="box story2">
                <p class="Misti">Misti Hernandez<br></p>
                <p>During her fifth pregnancy, Misti Hernandez was hospitalized from complications related to her
                    obesity.
                    She had the courage to take control over her health and joined Anytime Fitness. With help from her
                    trainer and Team workouts, Misti got her life back.</p>
                <!--Reference: Member success story inspired by https://www.anytimefitness.com/-->
                <img class="StoryPerson2" src="assets/images/StoryPerson2.jpg" alt="Member: Misti Hernandez">
                <hr>
            </div>

            <div class="box listServ">

                <div class="box Linktoservicespagetext">
                    <h1>
                        <p>Courses && Activities are all available now at ABC!<br>See
                            the service page for more details</p>
                        <a class="linkstyle" href="Services.php" target="_parent"> Read More</a>
                    </h1>
                </div>
                <img class="ServicesBI" src="assets/images/ServicesBI.jpg" alt="Link to services page background">
            </div>
            <div class="box knowledgeB1">
                <div class="box Linktoknowledgeblock1text">
                    <h1>
                        <p>10 SIMPLE WAYS TO <br>RECHARGE YOUR BODY</p>
                        <!--Reference: block content/name inspired by https://www.anytimefitness.com/-->

                        <a class="linkstyle" href="KnowledgeBlock1.php" target="_parent"> Read More</a>
                    </h1>
                </div>
                <img class="KnowledgeBlock1BG" src="assets/images/KnowledgeBlock1.jpg" alt="Link to KnowledgeBlock1">
            </div>
            <div class="box knowledgeB2">
                <div class="box Linktoknowledgeblock2text">
                    <h1>
                        <p>6 WINTER <br>FOOD RULES</p>
                        <!--Reference: block content/name inspired by https://www.anytimefitness.com/-->
                        <a class="linkstyle" href="KnowledgeBlock2.php" target="_parent">Read More</a>
                    </h1>
                </div>
                <img class="KnowledgeBlock2BG" src="assets/images/KnowledgeBlock2.jpg" alt="Link to KnowledgeBlock2">
            </div>

            <?php require_once("includes/fragment/footer.php"); ?>
        </div>
    </div>
</body>

</html>