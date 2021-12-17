<!-- php code is inspired from week7 Tute/Lab sheet-->
<?php require_once('includes/fragment/authorise.php'); ?>
<?php
    $user = getLoggedInUser();
    $category = getCategory($_GET['category']);
    $userStats = getUserStatsForCategory($user['email'], $category['key']);
    $t=time();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Assignment 2 Gym Website category Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <style>
    body {
        padding: 50px;
        margin: 0px;
    }

    td {
        font-size: 20px;
        font-weight: bold;
    }

    .suggestions {
        background-color: #f44336;
        color: white;
        padding: 14px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
    }

    .a {
        color: blue;
        margin-left: 20px;
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
        <div class="mb-3">
            <h1 class="display-1">myFitness</h1>
            <h1>
                <img src="assets/imagesForCategories/<?= $category['image-name']; ?>"
                    class="d-block d-sm-inline-block" />
                <?= $category['name']; ?>
            </h1>
        </div>

        <div class="mb-3">
            <a href="createActivity.php?category=<?= $category['key']; ?>" class="btn btn-success mr-5">
                Record activity
            </a>
            <a href="myFitness.php" class="btn btn-outline-dark">Back to myFitness</a>
        </div>

        <?php if(count($userStats) !== 0) { ?>
        <h3>Here is your Log Book!</h3>
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <!--These means the fixed category image will remain the same depend on the category user chosen, it will vary, but the fixed thing 
                is different other images like weight,etc. -->
                    <!--All the images below from https://unsplash.com/-->
                    <th><img src="assets/imagesForActivities/date.jpg" alt="date" width="125" height="125" /><br>
                        <span>Date</span>
                    </th>
                    <th><img src="assets/imagesForCategories/<?= $category['image-name']; ?>" /><br>
                        <?= $category['name']; ?>
                    </th>
                    <th><img src="assets/imagesForActivities/weight.jpg" alt="weight" width="125" height="125" /><br>
                        <span>Weight</span>
                    </th>
                    <th><img src="assets/imagesForActivities/BMI.jpg" alt="BMI" width="125" height="125" /><br>
                        <span>BMI</span>
                    </th>
                    <th><img src="assets/imagesForActivities/goal.jpg" alt="goal" width="125" height="125" /><br>
                        <span>Weekly Activity Goal</span>
                    </th>

                </tr>


                <?php foreach($userStats as $value) { ?>
                <!--We display the value user putted in the create activity page-->
                <tr>
                    <td><?= $value['date']; ?></td>
                    <td><?= $value['minutes']; ?> minutes</td>
                    <td> <?=$value['kilos']; ?> kg.</td>
                    <td> <?= $value['BMI']; ?> BMI</td>
                    <td><?= $value['goal']; ?> hours</td>
                    <?php } ?>
                </tr>
            </thead>
        </table>
        <?php } else { ?>
        <!--If the user not record any activities the message will be displayed and no other image will be shown-->
        <p class="alert alert-info">You have not yet recorded any activities in this category.</p>
        <?php } ?><br><br>

        <?php require_once("includes/fragment/footer.php"); ?>
    </div>
</body>

</html>