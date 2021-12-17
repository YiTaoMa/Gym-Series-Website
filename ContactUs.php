<?php require_once('includes/fragment/functionsa2.php'); ?>
<!doctype html>
<html lang="en">
<!--because the header contains the title are all different in other pages so not include in the fragment-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Assignment 2 Gym Website ContactUS Page</title>
    <!-- <link rel="stylesheet" type="text/css" href="stytle/ContactUS.css"> -->
    <link rel="stylesheet" type="text/css" href="style/ContactUS.css?t=<?php echo filemtime("style/ContactUS.css"); ?>">

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

    <!-- include the plugin -->
    <?php require_once("includes/fragment/bootstrap.php"); ?>
    <script src="plugins/jquery.validate.js?t=<?php echo filemtime("plugins/jquery.validate.js"); ?>"></script>
    <!-- write the JS code to play with the plugin -->
    <!--This js is used to validate the Countract Us page-->
    <script src="js/form-validationa2.js?t=<?php echo filemtime("js/form-validationa2.js"); ?>"></script>

</head>

<body>
    <!--Reerence: The bootstrap is inspired by COSC2413 Web programming Shekhar Lecture5 Example 9.-->
    <div class="container">
        <div id="container">
            <!--Reference: The logo design and its css are inspired by https://onaircode.com/html-css-logo-design-examples/-->
            <!--include header-->
            <?php require_once("includes/fragment/header.php"); ?>

            <!-- Reference:  All images in this HTML file are copied from https://unsplash.com/ -->
            <img class="contactUsBI" src="assets/images/contactUsBI.jpg" alt="ContactUs" width="500px" height="550px">
            <div class=" box heading">
                <h1>SEND US A MESSAGE</h1>
            </div>
            <div class="box TextForEnquiry">
                <div class="box enquiryText">

                    If you have any feedback or questions about our clubs, <br>our website or our service in general,
                    please
                    send
                    us <br>a message by completing our enquiry form.<br><br>

                    <h3>Update Your Details</h3>

                    Did you know you can now update your details online? <br>Adrenaline Buzz Club (ABC) allows you
                    to:<br><br>

                    - Change your personal details<br>

                    - Update your payment details, make a payment and view the
                    details of your next payment<br>

                    - Freeze your membership if you are unable to use the club
                </div>
                <br><br> <a class="RegisterNow RegisterNow1" href="Registera2.php" target="_parent">Register
                    Now!</a><br><br>
                <h1> WANT TO FIND US?</h1>
                <div class="box contactText">Adrenaline Buzz Club (ABC) <br>Australia <br> 37 Sweetland <br>Ringwood
                    3134<br>ABN 00 123 456 789<br><br>
                    Phone: +61 5 1234 1234<br>Email: ABC@abc.com.au</div>
                <img class="mapBI" src="assets/images/map.png" alt="ContactUs" width="400px" height="350px">
            </div>
            <div id="content" class="box">
                <!--Reerence: The Form is inspired by COSC2413 Web programming Shekhar Lecture3 Example 7.-->
                <!--All the code below is from a1 which just the field of different input-->
                <form class="box" id="registration_form" method="get" action="mailto:admin@abcgym.com.au"
                    name="registration">

                    <div class="padding"> <span class="label">First Name:</span>
                        <br><input name="firstname" type="text" value="" id="firstname" placeholder="e.g.John" />
                    </div>

                    <div class="padding"><span class="label">Surname:</span> <br><input type="text" name="surname"
                            id="surname" placeholder="e.g.Smith" />
                    </div>
                    <div class="padding"><span class="label">Email Address:</span><br><input type="text" value=""
                            id="email" name="email" placeholder="e.g.John@ABC.com" />
                    </div>

                    <div class="padding"><span class="label">Phone Number:</span><br><input type="text" value=""
                            id="phone" name="PhoneNumber" placeholder="e.g.0400 000 000" />
                    </div>

                    <div class="padding"><span class="label">Home Club:</span>
                        <br><select name="club" id="club">
                            <option selected="selected"></option>
                            <option value="ABC City">ABC City</option>
                            <option value="ABC Ringwood">ABC Ringwood</option>
                            <option value="ABC BoxHill">ABC BoxHill</option>
                            <option value="ABC Mitcham">ABC Mitcham</option>
                            <option value="ABC Hawthorn">ABC Hawthorn</option>
                        </select>
                    </div>

                    <div class="padding"><span class="label">Member Number (optional):</span><br><input name="member"
                            type="text" value="" id="member" placeholder="e.g.0000000000" />
                    </div>
                    <div class="padding"><span class="label">I would like.../ I would like to talk about...</span>
                        <br><select name="talkabout" id="talkabout">
                            <option selected="selected"></option>
                            <option value="Request: Online Training">Request: Online Training</option>
                            <option value="Request: Membership change">Request: Membership change</option>
                            <option value="Request: Personal details change">Request: Personal details change</option>
                            <option value="Request: Payment details change">Request: Payment details change</option>
                            <option value="Request: Membership transfer">Request: Membership transfer</option>
                            <option value="Request: Tax Statement">Request: Tax Statement</option>
                            <option value="Request: International access">Request: International access</option>
                            <option value="Issue: Billing (error/process issue)">Issue: Billing (error/process issue)
                            </option>
                            <option value="Issue: Membership freeze (error/process issue)">Issue: Membership freeze
                                (error/process issue)</option>
                            <option value="Issue Overdue account">Issue Overdue account</option>
                            <option value="Issue: Cancellation (error/process issue)">Issue: Cancellation (error/process
                                issue)</option>
                            <option value="Issue: Pricing">Issue: Pricing</option>
                            <option value="Issue: My Fitness First login">Issue: My Fitness First login</option>
                            <option value="Issue: Club incident">Issue: Club incident</option>
                            <option value="Issue: Cleanliness, maintenance, facilities">Issue: Cleanliness, maintenance,
                                facilities</option>
                            <option value="Issue: Group Exercise">Issue: Group Exercise</option>
                            <option value="Issue: Personal Training">Issue: Personal Training</option>
                            <option value="Enquiry: New membership">Enquiry: New membership</option>
                            <option value="Enquiry: Membership Number">Enquiry: Membership Number</option>
                            <option value="Enquiry: Sponsorship">Enquiry: Sponsorship</option>
                            <option value="Enquiry: Lost Property">Enquiry: Lost Property</option>
                            <option value="Enquiry: Staff">Enquiry: Staff</option>
                            <option value="Enquiry: Website">Enquiry: Website</option>
                            <option value="Enquiry: Jobs at Fitness First">Enquiry: Jobs at Fitness First</option>
                            <option value="Complaint: Group Fitness">Complaint: Group Fitness</option>
                            <option value="Complaint: Other">Complaint: Other</option>
                            <option value="Positive Feedback">Positive Feedback</option>
                        </select>
                    </div>

                    <div class="padding"><span class="label">Comments:</span>
                        <br><textarea name="message" rows="10" cols="30"
                            placeholder="Enter your enquiry,feedback or comments."></textarea>
                    </div>
                    <br>
                    <div><input id="registration_submit" type="submit" value="Submit" />
                        <input id="registration_reset" type="reset" value="Reset" />
                    </div>
                </form>

            </div>
            <!--Because all footer are same just include in the fragment folder to avoid code repeated-->
            <?php require_once("includes/fragment/footer.php"); ?>
        </div>
    </div>

</body>

</html>