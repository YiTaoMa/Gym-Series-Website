 <!--Part of the php code is inspired from week7 Tute/Lab sheet-->
 <?php require_once('includes/fragment/functionsa2.php'); ?>
 <?php
    $errors = [];
    if(isset($_POST['login'])) {
        $errors = loginUser($_POST);
//if the user loged in/no errors exists we auto loged in the user to the my fitness page
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
     <title>Assignment 2 Gym Website login Page</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
         integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
     <style>
     body {
         padding: 50px;
         margin: 0px;
     }

     .a {
         color: blue;
         margin-left: 150px;
         font-weight: bold;
     }

     a:hover {
         color: red;
     }

     a:link {
         text-decoration: none;
     }

     nav {
         grid-area: nav;
         text-align: center;
         position: -webkit-sticky;
         position: sticky;
         top: 0;
         font-size: 20px;
     }

     footer {
         grid-area: footer;
         font-size: 100%;
         font-weight: bold;
     }

     .createby {
         text-align: left;
     }

     .privacy {
         float: right;
     }
     </style>
     <?php require_once("includes/fragment/bootstrap.php"); ?>
 </head>

 <body>
     <div class="container">
         <!--include header-->
         <?php require_once("includes/fragment/header.php"); ?>
         <br><br><br>
         <div class="row">
             <div class="col-sm-8 col-md-6 col-lg-4">
                 <form method="post">
                     <div class="form-group">
                         <label for="lastname">Email</label>
                         <input type="text" class="form-control" id="email" name="email"
                             <?php displayValue($_POST, 'email'); ?> />
                         <!--we call the method displayvalue() in the functiona2 file and pass the value and the form to the method-->
                         <?php displayError($errors, 'email'); ?>
                         <!--we call the method displayError() in the functiona2 file and pass the value and the error variable to the method-->
                         <!--The rest of the code are all have the same explanation as above-->
                     </div>

                     <div class="form-group">
                         <label for="phone">Password</label>
                         <input type="password" class="form-control" id="password" name="password" />
                         <?php displayError($errors, 'password'); ?>
                     </div>

                     <button type="submit" class="btn btn-primary" name="login" value="login">Login</button>
                 </form>
             </div>
         </div>
         <br><br>
         <?php require_once("includes/fragment/footer.php"); ?>
     </div>
 </body>

 </html>