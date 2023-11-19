<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the login form
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];

    // Check if the file exists and is readable
    $filePath = '../file.json';

    // Read the existing user data from the JSON file
    $jsonData = file_get_contents($filePath);

    // Check if the JSON data is valid
    $users = json_decode($jsonData, true);

    // Check if the decoding was successful or if the file was empty
    if (!is_array($users) && !empty($jsonData)) {
        // If decoding fails or the file is empty, initialize $users as an empty array
        $users = [];
    }

    // Check if the entered username exists in the user data
    $userExists = false;
    $loggedIn=false;
    foreach ($users as $user) {
        if ($user['username'] === $enteredUsername) {
            $userExists = true;

            // Verify the entered password against the stored hashed password
            if (password_verify($enteredPassword, $user['password'])) {

                $loggedIn=true;
                break;    
            } 
            else {
                echo "Incorrect password. Please try again.";
            }

            break; // Exit the loop since we found the user
        }
    }

    // If the entered username doesn't exist
    if (!$userExists) {
        echo "User not found. Please check your username.";
    }
    if ($loggedIn){
        session_start();
        $_SESSION["username"]=$user['username'];
        header("location:../pages/main.php");
    }else{
        header("location:../index.php");
    }

    
}
?>
