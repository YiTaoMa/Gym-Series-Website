<?php require_once('includes/fragment/functionsa2.php'); ?>
<!doctype html>
<html lang="en">
<!--because the header contains the title are all different in other pages so not include in the fragment-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Assignment 2 Gym Website KnowledgeBlock1 Page</title>
    <link rel="stylesheet" type="text/css" href="style/KnowledgeBlock1.css">
</head>

<body>
    <!--Reerence: The bootstrap is inspired by COSC2413 Web programming Shekhar Lecture5 Example 9.-->
    <?php require_once("includes/fragment/bootstrap.php"); ?>

    <div class="container">
        <div class="MainPage">

            <?php require_once("includes/fragment/navbarForKnowledgeBlocksIncludeLogo.php"); ?>

            <div class="Information">
                <div class="BlockText">
                    <!--Reference: block content/name inspired by https://www.anytimefitness.com/-->
                    <h1>
                        <p>10 SIMPLE WAYS TO <br>RECHARGE YOUR BODY</p>
                    </h1>
                </div>

                <!-- Reference:  All images in this HTML file are copied from https://unsplash.com/ -->
                <img class="Image" src="assets/images/KnowledgeBlock1BG.jpg" alt="Image for KnowledgeBlock1">
                <ul class="box text">
                    <li>
                        <p class="formatText">Protein is your friend!</p>
                        <p> Directly after your workout isn't the only time you should be consuming protein to aid
                            muscle
                            recovery. For best results, make sure you're including protein with each meal throughout the
                            day.</p>
                    </li>
                    <li>
                        <p class="formatText">Make sleep a priority</p>
                        <p>It doesn't matter which way you look at it, skimping on sleep is no way to accelerate
                            results-
                            even if you're putting those extra hours towards workout out! When you're training a
                            lot-those
                            zzz
                            are
                            even more precious! Aim for between 7-8 hours every night. </p>
                    </li>
                    <li>
                        <p class="formatText">Get icy</p>
                        <p>Whether it's an ice bath or a dip in the winter ocean-taking a 5-minute cold plunge can
                            significantly reduce muscle soreness and inflammation. </p>
                    </li>
                    <li>
                        <p class="formatText">Consider compression garments</p>
                        <p>Research suggests that wearing compression garments can help to decrease the time it takes
                            for
                            muscle to recover during intense bursts of exercise1. </p>
                    </li>
                    <li>
                        <p class="formatText">Drink up</p>
                        <p> Keeping adequately hydrated both before and after your workout is vital for performance and
                            muscle
                            recovery. If dehydrated, your body simply can't perform at its highest level. Remember, 3L
                            per
                            day
                            is the absolute minimum-and that's before losing any through sweat! </p>
                    </li>
                    <li>
                        <p class="formatText">But only drink the good stuff!</p>
                        <p> Keep booze off the menu! Stick to water if recovery is your focus. Alcohol can leave you
                            dehydrated
                            and as a result, will reduce your body's ability to recover, not to mention reduce liver
                            function. </p>
                    </li>
                    <li>
                        <p class="formatText">Stretch-daily</p>
                        <p> Stretching is one of the absolute best things you can do to aid muscle recovery. Not just
                            some
                            days-every day! Post-workout is the best time to get your stretch on, while your muscles are
                            warm.
                            However, squeezing in another stretch session at the end of the day while you're watching
                            your
                            favourite TV shows is always beneficial! </p>
                    </li>
                    <li>
                        <p class="formatText">Roll it out</p>
                        <p> Foam rolling helps to release muscle tension and prevent injury, but again-consistency is
                            key.
                            Take a few minutes before and after every workout to stretch and foam roll-your body will
                            thank
                            you for it later! Not sure where to start? Learn how to foam roll like a pro here. </p>
                    </li>
                    <li>
                        <p class="formatText">Keep moving</p>
                        <p> Sometimes the best thing you can do when you're too sore to move is to keep moving! Within
                            reason of
                            course. Low-intensity exercises like walking can be great for aiding recovery-not to mention
                            a
                            secret weapon for fighting fat. More on that here. </p>
                    </li>
                    <li>
                        <p class="formatText">Listen to your body</p>
                        <p>You've heard it before and you'll hear is again-you know your body best! If something doesn't
                            feel
                            right or if you're in significant or long-lasting pain, always seek the advice of a medical
                            professional to get the all-clear. Remember-there are no short cuts to success. Pushing on
                            with an
                            injury when you're running on empty will only slow you down in the long run. Listen to your
                            body
                            and
                            give it the rest and recharge it needs! </p>
                    </li>
                </ul>
            </div>

            <?php require_once("includes/fragment/footer.php"); ?>
        </div>
    </div>
</body>

</html>