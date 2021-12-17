<?php require_once('includes/fragment/functionsa2.php'); ?>
<!doctype html>
<html lang="en">
<!--because the header contains the title are all different in other pages so not include in the fragment-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Assignment 2 Gym Website Services Page</title>
    <link rel="stylesheet" type="text/css" href="style/Services.css?t=<?php echo filemtime("stytle/Services.css"); ?>">
    <!--Refrence: The bootstrap is inspired by COSC2413 Web programming Shekhar Lecture5 Example 9.-->
    <?php require_once("includes/fragment/bootstrap.php"); ?>
</head>

<body>

    <div class="container-fluid">
        <div class="MainPage">
            <!--Reference: The logo design and its css are inspired by https://onaircode.com/html-css-logo-design-examples/-->
            <!--include header-->
            <?php require_once("includes/fragment/header.php"); ?>

            <div class="box headingForFirstBlock">
                <h1>What can you do in our gym?</h1>
            </div>
            <div class="box Aerobic">
                <img src="assets/images/Bicycle.jpg" alt="bicycle" width="300px" height="350px">
                <!--Reference: All images from this HTML are all inspired by https://unsplash.com/-->
                <p class="box textforamt">Aerobic</p>
                <!--Reference: content are inspired by https://www.takingcharge.csh.umn.edu/what-physical-activity-fitness 
            and https://www.fitnessfirst.com.au/-->
                <p class="box">Aerobic activities make you breathe harder and make <br>your heart and blood vessels
                    healthier.<br><br></p>

                <ul class="text">
                    <li>
                        <p>BODYATTACK</p>
                    </li>
                    <li>
                        <p>BODYJAM</p>
                    </li>
                    <li>
                        <p>BODYSTEP</p>
                    </li>
                    <li>
                        <p>Boxing </p>
                    </li>
                    <li>
                        <p>Cycle</p>
                    </li>
                    <li>
                        <p> Grit Cardio </p>
                    </li>
                    <li>
                        <p>Lo Lite</p>
                    </li>
                    <li>
                        <p> MMA </p>
                    </li>
                    <li>
                        <p>RPM </p>
                    </li>
                    <li>
                        <p>Shockwave</p>
                    </li>
                </ul>
            </div>
            <div class="box Flexibility">
                <img src="assets/images/Flexibility.jpg" alt="Flexibility" width="300px" height="350px">
                <p class="box textforamt">RELAX, STRETCH & BALANCE</p>
                <!--Reference: content are inspired by https://www.takingcharge.csh.umn.edu/what-physical-activity-fitness 
            and https://www.fitnessfirst.com.au/-->
                <p class="box">Flexibility-enhancing activities ensure a good range of motion in the <br>joints.Loss of
                    flexibility can be a predisposing factor for physical issues, <br>such as pain syndromes or balance
                    disorders. Gender, age, <br>and genetics may all influence range of motion.<br><br></p>

                <ul class="text">
                    <li>
                        <p> Stretching</p>
                    </li>
                    <li>
                        <p>Yoga</p>
                    </li>
                    <li>
                        <p>Tai Chi or Qi Gong </p>
                    </li>
                    <li>
                        <p>Pilates </p>
                    </li>
                </ul>
            </div>
            <div class="box Muscle">

                <img src="assets/images/Muscle.jpg" alt="Muscle" width="300px" height="350px">
                <p class="box textforamt">Muscle-strengthening</p>
                <!--Reference: content are inspired by https://www.takingcharge.csh.umn.edu/what-physical-activity-fitness 
            and https://www.fitnessfirst.com.au/-->
                <p class="box">Muscle-strengthening activities build up your strength. <br>These activities work all the
                    different parts of the body-legs,<br> hips, back, chest, stomach, shoulders, and arms.<br><br>
                </p>

                <ul class="text">
                    <li>
                        <p> BODYPUMP</p>
                    </li>
                    <li>
                        <p>XT Strength</p>
                    </li>
                    <li>
                        <p>XT Circuit</p>
                    </li>
                    <li>
                        <p>Gymnastics Strength </p>
                    </li>
                    <li>
                        <p>Suspension </p>
                    </li>
                </ul>
            </div>
            <div class="box LossWeight">
                <img src="assets/images/LossWeight.jpg" alt="LossWeight" width="300px" height="350px">
                <p class="box textforamt">LOSE WEIGHT</p>
                <!--Reference: content are inspired by https://www.takingcharge.csh.umn.edu/what-physical-activity-fitness 
            and https://www.fitnessfirst.com.au/-->
                <p class="box">Some great choices for burning calories include <br>walking, jogging, running, cycling,
                    swimming,<br>
                    weight training, interval training, yoga, and Pilates.<br> That said, many other exercises can also
                    help
                    boost your<br> weight loss efforts. It's most important to choose<br> an exercise that you enjoy
                    doing.<br><br>
                </p>

                <ul class="text">
                    <li>
                        <p>Athletic</p>
                    </li>
                    <li>
                        <p>Basic Training Circuit</p>
                    </li>
                    <li>
                        <p>BODYCOMBAT</p>
                    </li>
                    <li>
                        <p>Fusion</p>
                    </li>
                    <li>
                        <p>H.I.I.T</p>
                    </li>
                </ul>
            </div>

            <div class="box Heading">
                <br>
                <h1>Want training online?<br><br></h1>
            </div>
            <div class="box descriptionOfOnlineT">
                <h2>We know it's a tough time, but our gym provides you with exclusive online training courses. You can
                    still learn from my online courses at home and exercise to build your perfect body!</h2>
                <h2>Don't forget that we also provide two sections on fitness diet to help you achieve better fitness
                    results<br>See the 2 links below:</h2>
                <a class="servicesLinktoKnowledge1" href="KnowledgeBlock1.php" target="_parent">1: 10 SIMPLE WAYS TO
                    RECHARGE YOUR BODY </a><br><br>
                <a class="servicesLinktoKnowledge2" href="KnowledgeBlock2.php" target="_parent">2: 6 WINTER FOOD RULES
                </a>
            </div>
            <div class="box videosText">
                <h2>Here are two videos to help you train at home </h2>
            </div>
            <div class="box video textCentral">
                <!--Reference: 2 videos are inspired by https://www.youtube.com/embed/UoC_O3HzsH0 and https://www.youtube.com/embed/9p7-YC91Q74-->
                <iframe width="500" height="350" src="https://www.youtube.com/embed/UoC_O3HzsH0" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="box video2">
                <iframe width="500" height="350" src="https://www.youtube.com/embed/9p7-YC91Q74" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="box GIFText">
                <h2>Step by step fitness</h2>
            </div>

            <div class="box pushup">
                <h3>Press-Up</h3>
                <!--Reference: All GIFS and content are inspired by https://www.menshealth.com/uk/building-muscle/a754099/the-15-best-beginners-exercises-to-do-at-home/-->
                <img class="GIFs" src="assets/images/pushup.gif" alt="PushUpGIF" width="400px" height="350px">
                <br>
                <div class="box StepFitnessText">
                    How to do it: Get down into a press-up position with your <br>hands placed shoulder-width apart and
                    back
                    flat, so a straight <br>line forms from your head to heels, via your glutes. Lower your <br>body
                    until
                    your
                    chest is an inch from the ground then explosively<br> drive up by fully extending your arms. That's
                    on
                    rep.
                    <br><br>
                    Why: This move uses multiple muscle groups for maximum<br> growth and strengthens your shoulder
                    joints.
                    Easily done as<br> an exercise at home, this prepares you for progression to the more<br> demanding
                    shoulder
                    exercises you'll face in a gym, like the incline<br> bench press.
                </div>
            </div>
            <div class="box DumbbellStandingShoulderPress">
                <h3>Dumbbell standing shoulder press</h3>
                <img class="GIFs" src="assets/images/dumbbell-press.gif" alt="Dumbbell standing shoulder press GIF"
                    width="400px" height="350px">
                <br>
                <div class="box StepFitnessText">
                    How to do it: Stand holding two dumbbells at <br>shoulder height with an overhand grip-palms
                    facing<br>
                    forwards. Ensure your elbows are in front of the bar and<br> don't flare out to the sides. Press the
                    weights up above your<br> head until your arms are fully extended. Return slowly<br> to the start
                    position.
                    <br><br>
                    Why: This is a safer shoulder-sculptor than lifting from<br> behind your neck. As a beginner the aim
                    should be to <br>keep strain off your joints and protect against an injury called<br> shoulder
                    impingement
                    syndrome. Missed sessions this early in<br> your lifting career are especially costly.
                </div>
            </div>

            <div class="box Skipping">
                <h3>Skipping</h3>
                <img class="GIFs" src="assets/images/skip.gif" alt="Skipping" width="400px" height="350px">
                <br>
                <div class="box StepFitnessText skippingtext">
                    How to do it: Grab the rope at both ends. Use your<br> wrists to flick it round your body, jumping
                    to
                    clear the<br> rope as it hits the ground. Make the move more intense<br> with double unders –
                    letting the
                    rope pass round your twice<br> for every jump.
                    <br><br>
                    Why: The ultimate no-nonsense workout, jumping rope<br> could be the most efficient form of cardio.
                    A
                    study that<br> found just 10 minutes a day with the rope was similar to<br> 30 minutes of jogging
                </div>
            </div>
            <div class="box DumbbellSquat">
                <h3>Dumbbell squat</h3>
                <img class="GIFs" src="assets/images/squat.gif" alt="Squat" width="400px" height="350px">
                <br>
                <div class="box StepFitnessText">
                    How to do it: Holding a dumbbell in each hand,<br> position your legs shoulder width apart.
                    Keeping<br>
                    your
                    head up and back straight, sit back into the<br> squat until the dumbbells are an inch from the
                    floor.
                    <br>Focus on keeping your knees over your toes and<br> chest out – don't arch your back or lean
                    forward
                    as<br>
                    you drop down. Exhale, straighten your legs and return<br> to the starting position.
                    <br><br>
                    Why: Squats are an excellent all-round exercise and<br> one of the best moves for building overall
                    strength. Dumbbells<br> let you concentrate on technique and work on your range<br> of movement at
                    low
                    weight. Only advance to barbell squats in<br> the gym once you've got this nailed.
                </div>
            </div>

            <div class="box LateralRaise">
                <h3>Lateral raise</h3>
                <img class="GIFs" src="assets/images/latraise.gif" alt="Lateral raise GIF" width="400px" height="350px">
                <br>
                <div class="box StepFitnessText">
                    How to do it: Stand holding a light dumbbell in each<br> hand. Slowly lift the dumbbells out to the
                    side
                    until they<br> reach shoulder height – no higher – and resist the<br> urge to cheat by swinging the
                    weight.
                    Pause, then<br> lower back to your sides, slowly – you'll build more<br> muscle fighting gravity
                    than
                    letting it do the work for you.
                    <br><br>
                    Why: If you're doing exercise at home, this is the best<br> move for visible shoulder development.
                    The
                    lateral raise<br> isolates your medial deltoid, the middle of three shoulder<br> muscles, helping to
                    develop
                    your shoulder width and mass. <br>Perfect for creating the V-shape that you covet.
                </div>
            </div>
            <div class="box Burpees">
                <h3>Burpees</h3>
                <img class="GIFs" src="assets/images/32-burpee.gif" alt="Burpees GIF" width="400px" height="350px">
                <br>
                <div class="box StepFitnessText">
                    How to do it: From a standing position squat down<br> until your thighs are parallel to the floor
                    and
                    place<br> your palms on the floor. From there kick your feet<br> back as far as you can while
                    keeping your
                    arms<br> extended. As soon as your feet land jump them<br> back in towards your hands, then jump up
                    into<br> the
                    air. Land and immediately squat down to <br>go into the next rep.
                    <br><br>
                    Why: When it comes to burning fat at home,<br> few moves can do better then the burpee. Perfect<br>
                    for
                    frying fat with zero equipment, work these into<br> your home workout routine to ramp up your
                    heart<br> rate
                    or set yourself daily challenges.
                </div>
            </div>

            <div class="box Plyometric">
                <h3>Plyometric, Jumping Lunges</h3>
                <img class="GIFs" src="assets/images/29-jumping-lunge.gif" alt="Plyometric, Jumping Lunge GIF"
                    width="400px" height="350px">
                <br>
                <div class="box StepFitnessText">
                    How to do it: Lunge forward until your rear knee is<br> almost touching the ground. Jump into the
                    air,<br>
                    bringing your rear foot forward and the front<br> foot back. Land in a lunge and repeat. Land<br> on
                    both
                    feet simultaneously to cushion the impact<br> on your joints.
                    <br><br>
                    Why: Just like burpees, these are perfect for<br> building up your cardiovascular system, but<br>
                    will also
                    help you build faster, more powerful<br> quadriceps. Ideal if your leg day has taken a hit.
                </div>
            </div>

            <div class="box Spiderman">
                <h3>Spiderman Press-Up</h3>
                <img class="GIFs" src="assets/images/93-Spiderman-press-ups.gif" alt="Spiderman Press-Up GIF"
                    width="400px" height="350px">
                <br>
                <div class="box StepFitnessText">
                    How to do it: Get into a traditional press-up position.<br> Lower yourself toward the floor and
                    bring
                    your right<br> knee to your right elbow, keeping it off the ground. <br>Press back up and return
                    your leg to
                    the starting position.<br> Repeat with the alternate leg.
                    <br><br>
                    Why: Perfect if you're looking to get some mobility in<br> before a workout or just want to switch
                    up
                    your chest<br> routine, Spiderman press-ups are the perfect alternative<br> if you're looking to
                    scale
                    things up.
                </div>
            </div>
            <div class="box BicepCurl">
                <h3>Bicep curl</h3>
                <img class="GIFs" src="assets/images/bicepcurl.gif" alt="Bicep curlGIF" width="400px" height="350px">
                <br>
                <div class="box StepFitnessText">
                    How to do it: Stand with a dumbbell in each hand<br> and, keeping your upper arms stationary, curl
                    the<br>
                    weights until the dumbbells are at shoulder level. <br>Focus on keeping your elbows still – only
                    your<br>
                    lower arm should move. Squeeze your bicep at the<br> top of the contraction then lower slowly and
                    repeat.
                    <br><br>
                    Why: This is the perfect move for developing those<br> mirror muscles you crave. By keeping your
                    upper
                    arm<br> stationary you hit the whole bicep for maximum growth.
                </div>
            </div>
            <div class="box plank">
                <h3>Plank</h3>
                <img class="GIFs" src="assets/images/plank.gif" alt="PlankGIF" width="400px" height="350px">
                <br>
                <div class="box StepFitnessText">
                    How to do it: Get in a press-up position, but rest<br> on your forearms rather than your hands.
                    Make<br>
                    sure your back is straight and tense your abs and <br>glutes. Hold without allowing your hips to
                    sag.
                    <br><br>
                    Why: Endless crunches put pressure on your spine<br> and, when done incorrectly, can give you a set
                    of<br>
                    weird, distended abs. Planks are perfect for working<br> your core in a way that keeps you
                    injury-free
                    and <br>builds the flat six-pack you're after.
                </div>
            </div>

            <?php require_once("includes/fragment/footer.php"); ?>
        </div>
    </div>
</body>

</html>