<!-- php code is inspired from week7 Tute/Lab sheet-->
<?php require_once('includes/fragment/authorise.php'); ?>
<?php
    $user = getLoggedInUser();
    $category = getCategory($_GET['category']);
    $userStats = getUserStatsForCategory($user['email'], $category['key']);

    $errors = [];
    if(isset($_POST['createActivity'])) {
        $errors = createActivity($_POST, $user['email'], $category['key']);

        if(count($errors) === 0) {
            header("Location: category.php?category={$category['key']}");
            exit();
        }
    }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Assignment 2 Gym Website categoryActivities Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <style>
    body {
        padding: 50px;
        margin: 0px;
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
        <!--Below I implemented by adding more field to suit requirements-->
        <div class="row">
            <div class="col-md-6">
                <form method="post">
                    <div class="form-group">
                        <label for="date">
                            *Date
                            <small class="text-muted">
                                format: yyyy/mm/dd, for example today would be <?= date(DATE_FORMAT); ?>
                            </small>
                        </label>
                        <input type="text" class="form-control" id="date" name="date"
                            <?php displayValue($_POST, 'date'); ?> />

                        <!--Means we call the display value method in function file and display the value 
                            have the name date with in the this post form and call display errors about this input
                            if there is any error will be displayed for example user not enter anything etc.-->
                        <?php displayError($errors, 'date'); ?>
                    </div>
                    <!--Same explanation for below same method-->
                    <div class="form-group">
                        <label for="minutes">
                            *Duration (minutes)
                            <small class="text-muted">
                                minimum <?= MINUTES_MINIMUM; ?> minute, maximum <?= MINUTES_MAXIMUM; ?> minutes
                            </small>
                        </label>
                        <input type="text" class="form-control" id="minutes" name="minutes"
                            <?php displayValue($_POST, 'minutes'); ?> />
                        <?php displayError($errors, 'minutes'); ?>
                    </div>

                    <div class="form-group">
                        <label for="kilos">
                            *Weight (kg.)
                            <small class="text-muted">
                                minimum 1 kg. maximum 500 kg.
                            </small>
                        </label>
                        <input type="text" class="form-control" id="kilos" name="kilos"
                            <?php displayValue($_POST, 'kilos'); ?> />
                        <?php displayError($errors, 'kilos'); ?>
                    </div>

                    <div class="form-group">
                        <label for="age">
                            *Age
                            <small class="text-muted">
                                Age should between 16 and 90 years old.
                            </small>
                        </label>
                        <input type="text" class="form-control" id="age" name="age"
                            <?php displayValue($_POST, 'age'); ?> />
                        <?php displayError($errors, 'age'); ?>
                    </div>

                    <div class="form-group">
                        <label for="BMI">
                            *BMI (Weight (kg.)/height^2 (meter))
                            <small class="text-muted">
                                Calculate your own BMI, greater than 0, less than 60.
                            </small>
                        </label>
                        <input type="text" class="form-control" id="BMI" name="BMI"
                            <?php displayValue($_POST, 'BMI'); ?> />
                        <?php displayError($errors, 'BMI'); ?>
                    </div>

                    <div class="form-group">
                        <label for="goal">
                            *Weekly goal
                            <small class="text-muted">
                                i.e. how much would you like to walk or exercise(hours per week)
                            </small>
                        </label>
                        <input type="text" class="form-control" id="goal" name="goal"
                            <?php displayValue($_POST, 'goal'); ?> />
                        <?php displayError($errors, 'goal'); ?>
                    </div>


                    <button type="submit" class="btn btn-primary mr-5" name="createActivity" value="createActivity">
                        Create activity
                    </button>
                    <a href="category.php?category=<?= $category['key']; ?>" class="btn btn-outline-dark">Cancel</a>
                    <br><br><br><br>
                </form>
            </div>
        </div>

        <?php require_once("includes/fragment/footer.php"); ?>
    </div>
</body>

</html>