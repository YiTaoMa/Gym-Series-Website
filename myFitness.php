<!-- php code is inspired from week7 Tute/Lab sheet-->
<!--We check if the user logged in by calling the authorise.php if user logged in then we can do next stept-->
<?php require_once('includes/fragment/authorise.php'); ?>
<?php
//This variable is assigned by a method which will used below to read each category and show the imformtion of each category
    $categories = readCategories();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Assignment 2 Gym Website myFitness Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <!--All the required_once code is repeated code, so i put them into 1 file-->
    <script>
    $(document).ready(function() {
        // Register ajax-form submit event.
        $("#ajax-form").submit(function(event) {
            // Do not submit the form (prevent page refresh).
            event.preventDefault();

            // Make AJAX call in the background to the server.
            $.get("api-search.php", $(this).serialize(), null, "html").
            done(function(html) {

                // Display results (partial page refresh).
                $("#ajax-result").html(html);
            }).
            fail(function() {
                alert("An error has occurred, contact the site administrator!");
            });
        });
    });
    </script>
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
</head>

<body>
    <div class="container">
        <!--Include navbar-->
        <?php require_once("includes/fragment/header.php"); ?>
        <div class="mb-3">
            <h1 class="display-1">myFitness</h1>
        </div>

        <div class="row">
            <div class="col-md-6">
                <form id="ajax-form">
                    <div class="form-group">
                        <label for="text">
                            Text to search your desired Categories
                            <small class="text-muted">leave empty to view all matches</small>
                        </label>
                        <input type="text" class="form-control" id="text" name="text" placeholder="e.g., walking" />
                    </div>
                    <button type="submit" class="btn btn-primary" name="search" value="search">Search</button>
                </form>
            </div>
        </div>
        <!--Display search result-->
        <div class="mt-3" id="ajax-result" name="check">
            <!--Display all categopry at the start-->
            <?php 
             $_GET['text']='';
               require_once('api-search.php');
        ?>
        </div>
        <?php require_once("includes/fragment/footer.php"); ?>
    </div>
</body>

</html>