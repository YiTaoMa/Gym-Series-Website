 <!--This file inspired from week10 Tute/Lab sheet-->
 <?php
    if(!isset($_GET['text'])) {
        echo '<p class="alert alert-danger">The "text" variable is required.</p>';
        exit();
    }
   
    $text = $_GET['text'];
    //Convert all user input to lowercase because all name in data.txt are all lower case.
    $LowerCasetext=strtolower($text);
    // Read file and remove all empty lines.
    //the data file which contains the categories' name
    $lines = array_filter(file('data.txt'), function($line) {
        return trim($line) !== "";
    });
   

    $matches = [];
    if(strlen($LowerCasetext) === 0)
        $matches = $lines;
        
    else {
        // Search for lines containing the specified text.
        foreach($lines as $line) {
            if(strpos($line, $LowerCasetext) !== false)
                $matches[] = $line;
        }
    }

    if(count($matches) === 0) {
        //if no match display the original text that the user input and say no matches
        echo "<p class='alert alert-info'>No matches found for '$text'.</p>";
        exit();
    }
  
?>
<p class="lead">Choose from any of the following categories of exercises:</p><br>
<div class="row">
 <!--display the image with hyper link and its name depend on the $match which is the search result-->
    <?php foreach($matches as $match) { ?>
    <div class="col-sm-6 col-md-4 col-lg-2">
        <a href="category.php?category=<?= $match; ?>"> <img class="alert alert-success"
                src="assets/imagesForCategories/<?= $match; ?>"></a>
                <br><?= $match; ?><br><br><br>
    </div>
    <?php } ?>
</div>