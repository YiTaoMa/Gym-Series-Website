<?php require_once('includes/fragment/functionsa2.php'); ?>
<!doctype html>
<html lang="en">
<!--because the header contains the title are all different in other pages so not include in the fragment-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Assignment 2 Gym Website KnowledgeBlock2 Page</title>
    <link rel="stylesheet" type="text/css" href="style/KnowledgeBlock2.css">
</head>

<body>
    <!--Reerence: The bootstrap is inspired by COSC2413 Web programming Shekhar Lecture5 Example 9.-->
    <?php require_once("includes/fragment/bootstrap.php"); ?>

    <div class="container">
        <div class="MainPage">
            <!--Reference: The logo design and its css are inspired by https://onaircode.com/html-css-logo-design-examples/-->

            <?php require_once("includes/fragment/navbarForKnowledgeBlocksIncludeLogo.php"); ?>

            <div class="Information">
                <!--Reference: block content/name inspired by https://www.anytimefitness.com/-->
                <div class="BlockText">
                    <h1>
                        <p>6 WINTER <br>FOOD RULES</p>
                    </h1>
                </div>
                <!-- Reference:  All images in this HTML file are copied from https://unsplash.com/ -->
                <img class="Image" src="assets/images/KnowledgeBlock2BG.jpg" alt="Image for KnowledgeBlock1">
                <ul class="box text">
                    <li>
                        <p class="formatText">Soothe your soul with a starter of soup</p>
                        <p> Having a small bowl of low-calorie soup before your dinner and/or lunch can help to manage
                            your
                            weight through winter. Not only can a comforting serve of this winter warmer help to curb
                            carb
                            cravings, but it can also help to reduce the amount of food and calories you consume
                            overall.
                            Opt for a healthy vegetable-based soup to increase your vegie intake.</p>
                    </li>
                    <li>
                        <p class="formatText">Go fish for vitamin D</p>
                        <p>Shorter sunlit days can leave you with lower levels of vitamin D in the winter months-an
                            immune-boosting nutrient that is also linked with improved mood and motivation. Fish is your
                            friend during the winter months, especially fatty fish (like tuna and salmon), which are
                            especially rich in vitamin D. Other foods containing lesser amounts of vitamin D include egg
                            yolks and fortified milk. </p>
                    </li>
                    <li>
                        <p class="formatText">Fight illness with vitamin C</p>
                        <p>Not only can this immune-boosting antioxidant help to fight against winter colds, it can also
                            give your winter skin a boost thanks to its collagen-boosting capabilities. A quick tip to
                            up
                            your vitamin C levels is to drink lemon in hot water first thing in the morning. Topping
                            your
                            lunch or dinner with a squeeze of citrus is another easy way to boost your vitamin C intake.
                        </p>
                    </li>
                    <li>
                        <p class="formatText">Drink plenty of water and herbal teas</p>
                        <p>Drinking plenty of water in winter is just as important as it is in summer! You should be
                            aiming
                            to drink at least two litres per day. Herbal teas count too! Mix up your water intake with a
                            few
                            herbal teas like chamomile, peppermint, and lemongrass to reap numerous benefits. Herbal
                            teas
                            give away a calming and soothing effect which not only promotes good sleep but can also aid
                            in
                            better digestion. </p>
                    </li>
                    <li>
                        <p class="formatText">Be wary of white carbs</p>
                        <p> Carbs aren't the enemy but it's important to choose them wisely! Rather than trying to avoid
                            carbs all together through winter, opt for wholegrain varieties that will leave you feeling
                            satisfied and help to keep you fuller for longer. Good choices include whole oats, brown
                            rice,
                            wholegrain pasta, grainy bread, and quinoa. </p>
                    </li>
                    <li>
                        <p class="formatText">Get protein on your plate</p>
                        <p> Maintain a healthy weight this winter by eating good-quality protein with each meal. Protein
                            foods can help to stabilise your blood sugar levels, which will not only help you feel
                            calmer
                            and more alert, but it will help curb sugar cravings. Protein also promotes a feeling of
                            fullness, which can prevent you from overeating. Some healthy protein choices include lean
                            meats, eggs, fish, dairy products, nuts, seeds, and legumes. </p>
                    </li>
                </ul>
            </div>

            <?php require_once("includes/fragment/footer.php"); ?>
        </div>
    </div>
</body>

</html>