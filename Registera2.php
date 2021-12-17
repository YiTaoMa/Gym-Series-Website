 <!--Part of the php code is inspired from week7 Tute/Lab sheet-->
 <?php require_once('includes/fragment/functionsa2.php'); ?>
 <?php
    $errors = [];
    if(isset($_POST['register'])) {
        $errors = registerUser($_POST);

        if(count($errors) === 0) {
            header('Location: myFitness.php');
            exit();
        }
    }
?>
 <!doctype html>
 <html lang="en">
 <!--because the header contains the title are all different in other pages so not include in the fragment-->

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>Assignment 2 Gym Website register Page</title>
     <link rel="stylesheet" type="text/css" href="style/Registera2.css" />
     <!-- <script type="text/javascript" src="script/Register.js"></script> -->
     <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script> -->
     <?php require_once("includes/fragment/bootstrap.php"); ?>
     <style>
     .error1 {
         color: yellow;
         font-weight: bold;
     }
     </style>
 </head>

 <body>
     <!--Reerence: The bootstrap is inspired by COSC2413 Web programming Shekhar Lecture5 Example 9.-->
     <!--Notes: The bootstrap is used only for the container(deal with different resolution), not applied to any
    other functionality -->

     <div class="container">
         <div id="container">
             <!--include header-->
             <?php require_once("includes/fragment/header.php"); ?>

             <img class="RegisterBI" src="assets/images/registerBI.jpg" alt="Register" width="500px" height="550px">
             <div class=" box heading">
                 <h1>Register Now!</h1>
             </div>
             <div class="box TextForRegister">
                 <div class="box registerText">
                     <h2>REGISTER YOUR ACCOUNT</h2>
                     <br><br>
                     <p>Create a Adrenaline Buzz Club (ABC) account to access Adrenaline Buzz Club (ABC). </p><br>
                     <p>Your personal details must match the information that ABC FITNESS holds for your membership.
                     </p>
                 </div>
             </div>
             <div id="content" class="box">
                 <!--Reerence: The Form is inspired by COSC2413 Web programming Shekhar Lecture3 Example 8.-->
                 <!--The form is implemented now removed all the client side validation-->
                 <form class="box" id="registration_form" method="post">
                     <div class="padding"><span class="label">First Name:</span><br><input class="textinput"
                             name="firstname" type="text" value="" id="firstname"
                             <?php displayValue($_POST, 'firstname'); ?> />
                         <!--we call the method displayvalue() in the functiona2 file and pass the value and the form to the method-->
                         <div class="error1"> <?php  displayError($errors, 'firstname'); ?> </div>
                         <!--we call the method displayError() in the functiona2 file and pass the value and the error variable to the method-->
                         <!--The rest of the code are all have the same explanation as above-->
                     </div>

                     <div class="padding"><span class="label">Surname:</span><br><input class="textinput" name="surname"
                             type="text" value="" id="surname" <?php displayValue($_POST, 'firstname'); ?> />

                         <div class="error1"> <?php displayError($errors, 'surname'); ?> </div>
                     </div>

                     <div class="padding"><span class="label">Email:</span><br><input class="textinput" name="email"
                             type="text" value="" id="email" <?php displayValue($_POST, 'email'); ?> />

                         <div class="error1"> <?php displayError($errors, 'email'); ?></div>
                     </div>

                     <div class="padding"><span class="label">Home Address:</span><br>
                         <textarea name="address" rows="10" cols="30" value="" id="address"
                             <?php displayValue($_POST, 'address'); ?>></textarea>

                         <div class="error1"><?php displayError($errors, 'address'); ?></div>
                     </div>

                     <div class="padding referr" id="referr"><span class="label">Referred by
                             an existing gym member?<br></span><br>
                         <input type="checkbox" name="RYes" value="Yes" id="RYes"
                             <?php displayValue($_POST, 'RYes'); ?> />Yes<br />
                         <input name="RNo" type="checkbox" value="No" id="RNo"
                             <?php displayValue($_POST, 'RNo'); ?> />No<br />

                         <div class="error1"> <?php  displayError($errors, 'referr'); ?></div>
                     </div>

                     <div class="padding"><span class="label">Membership type:</span><br>
                         <select name="customer" id="customer" <?php displayValue($_POST, 'customer'); ?>>
                             <option selected="selected"></option>
                             <option value="Individual">Individual</option>
                             <option value="Family">Family</option>
                         </select>
                         <div class="error1"> <?php   displayError($errors, 'customer'); ?></div>
                     </div>

                     <div class="padding"><span class="label">Age:</span><br><input class="textinput" name="age"
                             type="text" value="" id="age" <?php displayValue($_POST, 'age'); ?> />

                         <div class="error1"> <?php displayError($errors, 'age'); ?></div>
                     </div>

                     <div class="padding"><span class="label">Duration of
                             membership:</span> <br>
                         <select name="duration" id="duration" <?php displayValue($_POST, 'duration'); ?>>
                             <option selected="selected"></option>
                             <option value="Ongoing">Ongoing</option>
                             <option value="3 months">3 months</option>
                             <option value="6 months">6 months</option>
                             <option value="yearly">yearly</option>
                         </select>
                         <div class="error1"> <?php  displayError($errors, 'duration'); ?></div>
                     </div>

                     <div class="padding"><span class="label">Password:</span><br><input class="textinput"
                             name="password" type="password" value="" id="password"
                             <?php displayValue($_POST, 'password'); ?> />

                         <div class="error1"> <?php  displayError($errors, 'password'); ?></div>
                     </div>

                     <div class="padding">
                         <span class="label">Confirm password</span><br>
                         <input class="textinput" type="password" id="confirmPassword" name="confirmPassword" />
                         <div class="error1"> <?php displayError($errors, 'confirmPassword'); ?></div>
                     </div>

                     <div><input class="textinput" id="registration_submit" type="submit" name="register"
                             value="Submit" />
                     </div>
                 </form>
             </div>
             <?php require_once("includes/fragment/footer.php"); ?>
         </div>
     </div>
 </body>

 </html>