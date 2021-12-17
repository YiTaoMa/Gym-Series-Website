 <!--This file inspired from week7 Tute/Lab sheet-->
 <?php
    const USERS_PATH = 'data/users.json';
    const USER_STATS_PATH = 'data/user_stats.json';
    const CATEGORIES_PATH = 'data/categories.json';

    const USER_SESSION_KEY = 'user';
//constants declared for creat activity page 
    const DATE_FORMAT = 'Y/m/d';
    const MINUTES_MINIMUM = 1;
    const MINUTES_MAXIMUM = 720;
    const KILOS_MINIMUM = 1;
    const KILOS_MAXIMUM = 500;
    const ACTIVITYAGE_MINIMUM = 16;
    const ACTIVITYAGE_MAXIMUM = 90;
    const BMI_MINIMUM = 0;
    const BMI_MAXIMUM = 60;
    const GOAL_MINIMUM = 0;
    const GOAL_MAXIMUM = 168;
//constants declared for register page 
    const REGISTERAGE_MINIMUM = 16;

    

    // Always call session_start.
    session_start();

    // --- Utils ----------------------------------------------------------------------------------
    function readJsonFile($path) {
        $json = file_get_contents($path);

        return json_decode($json, true);
    }

    function updateJsonFile($data, $path) {
        $json = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents($path, $json, LOCK_EX);
    }

    function displayError($errors, $name) {
        if(isset($errors[$name]))
            echo "<div class='text-danger'>{$errors[$name]}</div>";
    }

    function displayValue($form, $name) {
        if(isset($form[$name]))
            echo 'value="' . htmlspecialchars($form[$name]) . '"';
}
    // If using PHP >= 5.5 do not use this function, use the password_hash function:
    // https://www.php.net/manual/en/function.password-hash.php
    function generatePasswordHash($password, $salt = null) {
        if($salt === null)
            $salt = randomString(20);
        $blowfish_salt = '$2y$10$' . $salt . '$';

        return crypt($password, $blowfish_salt);
    }

    // If using PHP >= 5.5 do not use this function, use the password_verify function:
    // https://www.php.net/manual/en/function.password-verify.php
    function verifyPasswordHash($password, $hash) {
        $tokens = explode('$', $hash);
        $salt = $tokens[3];

        return $hash === generatePasswordHash($password, $salt);
    }

    // Only needed due to the generatePasswordHash function.
    function randomString($length) {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

        $randomString = '';
        for($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $randomString;
    }

    // Source: https://www.php.net/manual/en/function.checkdate.php#113205
    function isDateValid($date, $format = DATE_FORMAT) {
        $d = DateTime::createFromFormat($format, $date);

        return $d && $d->format($format) === $date;
    }

    // --- Categories -----------------------------------------------------------------------------
    function readCategories() {
        return readJsonFile(CATEGORIES_PATH);
    }

    function getCategory($category) {
        $categories = readCategories();

        return isset($categories[$category]) ? $categories[$category] : null;
    }

    // --- User Stats -----------------------------------------------------------------------------
    function readUserStats() {
        return readJsonFile(USER_STATS_PATH);
    }

    function updateUserStats($userStats) {
        updateJsonFile($userStats, USER_STATS_PATH);
    }

    function getUserStats($email) {
        $userStats = readUserStats();

        // An empty array is returned if stats are not set - used to streamline the code for readind & inserting.
        return isset($userStats[$email]) ? $userStats[$email] : [];
    }

    function getUserStatsForCategory($email, $category) {
        $userStats = getUserStats($email);

        // An empty array is returned if stats are not set - used to streamline the code for readind & inserting.
        return isset($userStats[$category]) ? $userStats[$category] : [];
    }

    function createActivity($form, $email, $category) {
        $errors = [];
        //Get the current time.(today)
        $t=time();
        //Key from the create activity page
        $key = 'date';
        //current date at the format of d/m/y
        $today_date=date('Y/m/d',$t); 
        //Convert today's date to the Unix timestamp
        $current_date=strtotime($today_date); 
         //retrieved from user's input and Convert the date from 
         //the user entered to the Unix timestamp
        $Userinput_date=strtotime($form[$key]);

       //The date field in create activity page can not be empty and no space character allowed,
       // must be in the proper format of yyyy/mm/dd. If the user entered date greater than current 
       //date than the error message will appear.
            if(!isset($form[$key]) || !isDateValid($form[$key])|| $Userinput_date> $current_date){
                $errors[$key] = 'Date is required and must be in the format yyyy/mm/dd.
                Future date is not allowed to be entered! Please enter the date less than or 
                equal to today!';}
        //only allow user to enter integer by using filter to sanatise the user input.
        $key = 'minutes';
        if(!isset($form[$key]) || filter_var($form[$key], FILTER_VALIDATE_INT,
            ['options' => ['min_range' => MINUTES_MINIMUM, 'max_range' => MINUTES_MAXIMUM]]) === false)
        {
            $errors[$key] =
                implode(['Minutes is required and must be between ', MINUTES_MINIMUM, ' and ', MINUTES_MAXIMUM, '.']);
        }
        // Convert validated minutes to an integer for future use (storing as number rather than string in JSON).
        else
            $form[$key] = (int) $form[$key];
        //User can not input 0 or empty or space or greater than 500 kg.
        $key = 'kilos';
        if(!isset($form[$key]) || $form[$key]<KILOS_MINIMUM||$form[$key]>KILOS_MAXIMUM)
            $errors[$key] = 'Please enter your weight that greater than 1 kg. and less than 500kg.';
        //Age user input should between 16-90. must be int
        $key = 'age';
        if(!isset($form[$key]) ||$form[$key]<ACTIVITYAGE_MINIMUM||$form[$key]>ACTIVITYAGE_MAXIMUM|| filter_var($form[$key], FILTER_VALIDATE_INT)===false)
         $errors[$key] = 'Please enter your age between 16 and 90';
         else
         $form[$key] = (int) $form[$key];
//User input must be greater than 0 and less than 60 because BMI at the level of 40 is serverely obese patients
//nut there still 2% of people have BMI greater than 40 so I set the maximum index of BMI to 60.
//Also not allowed user enter space, character,etc. only int and float type of input allowed.
         $key = 'BMI';
         if(!isset($form[$key])||$form[$key]<=BMI_MINIMUM||$form[$key]>BMI_MAXIMUM)
          $errors[$key] = 'Please enter your BMI greater than 0, less than 60';
//User can't enter space or other string/character. only int allowed.(whole number)
//of course, the user can not enter a number less than or equal to 0,and can not 
//exceed 168 hours as a week have 7 days maximum 24(a day)*7=168
          $key = 'goal';
         if(!isset($form[$key])||$form[$key]<=GOAL_MINIMUM||$form[$key]>GOAL_MAXIMUM|| filter_var($form[$key], FILTER_VALIDATE_INT)===false)
          $errors[$key] = 'Please enter your weekly exercise goal (in whole hours) and above 0 hour, below 168 hours.';
          else
         $form[$key] = (int) $form[$key];

        if(count($errors) === 0) {
            // Add activity.
            $activity = [
                'date' => htmlspecialchars(trim($form['date'])),
                'minutes' => $form['minutes'],
                'kilos'=>$form['kilos'],
                'age'=>$form['age'],
                'BMI'=>$form['BMI'],
                'goal'=>$form['goal'],
            ];

            $userStats = readUserStats();
            $userStats[$email][$category][] = $activity;

            // Update file.
            updateUserStats($userStats);
        }

        return $errors;
    }

    // --- User -----------------------------------------------------------------------------------
    function readUsers() {
        return readJsonFile(USERS_PATH);
    }

    function updateUsers($users) {
        updateJsonFile($users, USERS_PATH);
    }

    function getUser($email) {
        $users = readUsers();

        return isset($users[$email]) ? $users[$email] : null;
    }

    function isUserLoggedIn() {
        return isset($_SESSION[USER_SESSION_KEY]);
    }

    function getLoggedInUser() {
        return isUserLoggedIn() ? $_SESSION[USER_SESSION_KEY] : null;
    }

    function loginUser($form) {
        $errors = [];

        $key = 'email';
        if(!isset($form[$key]) || filter_var($form[$key], FILTER_VALIDATE_EMAIL) === false)
            $errors[$key] = 'Email is invalid.';

        $key = 'password';
        //the user must provided same password when they registered in the register form
        if(!isset($form[$key]) || preg_match('/^[A-Z].*(?=.{5,})(?=.*[!^&]).*[0-9]$/', $form[$key]) !== 1)
            $errors[$key] = 'Password must start with a capital alphabet, must have at least 6 characters,
            one of these characters must be either !, ^, & and must end with a number!';

        if(count($errors) === 0) {
            $user = getUser($form['email']);

            // If using PHP >= 5.5 use the password_verify function.
            // if($user !== null && password_verify($form['password'], $user['password-hash']))
            if($user !== null && verifyPasswordHash($form['password'], $user['password-hash']))
                // Login user.
                $_SESSION[USER_SESSION_KEY] = $user;
            else
                $errors[$key] = 'Login failed, email and / or password incorrect. Please try again.';
        }

        return $errors;
    }

    function logoutUser() {
        session_unset();
        // OR
        // unset($_SESSION[USER_SESSION_KEY]);
    }
//This is the server side validation for the register page
    function registerUser($form) {
        $errors = [];
//Added a regex here to sanitise user input.User are not allowed to input any number or symbol etc..
        $key = 'firstname';
        if(!isset($form[$key])|| preg_match('/^[a-zA-Z]{1,}$/', $form[$key]) !== 1)
            $errors[$key] = 'First name is required. And must be composed of letters. NO space allowed';
//Added a regex here to sanitise user input.User are not allowed to input any number or symbol etc..
        $key = 'surname';
        if(!isset($form[$key]) || preg_match('/^[a-zA-Z]{1,}$/', $form[$key]) !== 1)
            $errors[$key] = 'Last name is required. And must be composed of letters. NO space allowed';
//we use the filter_validate_email to sanitise the user input
        $key = 'email';
        if(!isset($form[$key]) || filter_var($form[$key], FILTER_VALIDATE_EMAIL) === false)
            $errors[$key] = 'Email is invalid.';
        else if(getUser($form[$key]) !== null)
            $errors[$key] = 'Email is already registered.';
//The address can not be empty.
        $key = 'address';
        if(!isset($form[$key])|| preg_match('/^\s*$/', $form[$key]) === 1)
         $errors[$key] = 'Address is required.';

//This is used to validate the check box in the register page, the user must select 1 and only 1 
//choice and can not be empty
         $key = 'RYes';
         if(!isset($form[$key])){
         $key = 'RNo';
         if(!isset($form[$key])){
            $errors["referr"] = 'Please select an option';
         }

         }

         $key = 'RNo';
         if(!isset($form[$key])){
         $key = 'RYes';
         if(!isset($form[$key])){
            $errors["referr"] = 'Please select an option';
         }

         }

         $key = 'RYes';
         if(isset($form[$key])){
         $key = 'RNo';
         if(isset($form[$key])){
            $errors["referr"] = 'Please select only 1 option';
         }

         }

         $key = 'RNo';
         if(isset($form[$key])){
         $key = 'RYes';
         if(isset($form[$key])){
            $errors["referr"] = 'Please select only 1 option';
         }

         }
         //User must choose an option
         $key = 'customer';
         if(empty($form[$key]))
          $errors[$key] = 'Please select an option';
//We have a sanitise here as we only allow the user to put the int /whole number of the age no string and other format allowed.
          $key = 'age';
         if(empty($form[$key])||($form[$key]) <REGISTERAGE_MINIMUM||filter_var($form[$key], FILTER_VALIDATE_INT)===false)
          $errors[$key] = 'Please enter an age in the format of Integer and above 16';
           //User must choose an option
          $key = 'duration';
          if(empty($form[$key]))
           $errors[$key] = 'Please select an option';

        $key = 'password';
        //this is the regex for the password in the register form
        if(empty($form[$key]) || preg_match('/^[A-Z].*(?=.{5,})(?=.*[!^&]).*[0-9]$/', $form[$key]) !== 1)
            $errors[$key] = 'Password must start with a capital alphabet, must have at least 6 characters,
            one of these characters must be either !, ^, & and must end with a number!';

        $key = 'confirmPassword';
        if(isset($form['password']) && (!isset($form[$key]) || $form['password'] !== $form[$key]))
        $errors[$key] = 'Passwords do not match.';

        if(count($errors) === 0) {
            // Add user.
            //implemented more error message to suite my website
            $user = [
                'firstname' => htmlspecialchars(trim($form['firstname'])),
                'surname' => htmlspecialchars(trim($form['surname'])),
                'email' => htmlspecialchars(trim($form['email'])),
                'address' => htmlspecialchars(trim($form['address'])),
                'referr' => htmlspecialchars(trim($form['referr'])),
                'customer' => htmlspecialchars(trim($form['customer'])),
                'age' => htmlspecialchars(trim($form['age'])),
                'duration' => htmlspecialchars(trim($form['duration'])),
                'password-hash' => generatePasswordHash($form['password'])
                // If using PHP >= 5.5 use the password_hash function.
                // 'password-hash' => password_hash($form['password'], PASSWORD_DEFAULT)
            ];

            $users = readUsers();
            $users[$user['email']] = $user;

            // Update file.
            updateUsers($users);

            // Auto-login registered user.
            loginUser([
                'email' => $user['email'],
                'password' => $form['password']
            ]);
        }

        return $errors;
    }