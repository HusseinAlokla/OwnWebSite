<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the signup form
    $newUsername = $_POST["username"];
    $newPassword = $_POST["pass"];
    $newConfirmPassword = $_POST["confirmPassword"];

    // Check if the password and confirm password match
    if ($newPassword != $newConfirmPassword || empty($newPassword)) {
        echo "Passwords must be equal.";
        exit();
    }

    // Check if the file exists and is readable
    $filePath = '../file.json';
    if (!file_exists($filePath) || !is_readable($filePath)) {
        echo "Error: Unable to read user data.";
        exit();
    }

    // Read the existing user data from the JSON file
    $jsonData = file_get_contents($filePath);

    // Check if the JSON data is valid
    if ($jsonData === false) {
        echo "Error: Unable to read user data.";
        exit();
    }

    // Decode the JSON data into an array
    $users = json_decode($jsonData, true);

    // Check if the decoding was successful
    if ($users === null && !empty($jsonData)) {
        $users = [];
    }

    // Check if the username already exists
    foreach ($users as $user) {
        if ($user['username'] === $newUsername) {
            echo "Username already exists. Please choose a different one.";
            exit();
        }
    }

    // Hash the password
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    // Add the new user to the array
    $newUser = [
        'username' => $newUsername,
        'password' => $hashedPassword
    ];

    $users[] = $newUser;

    // Encode the updated user data back to JSON
    $newJsonData = json_encode($users, JSON_PRETTY_PRINT);

    // Write the updated data back to the file
    if (file_put_contents($filePath, $newJsonData) === false) {
        echo "Error: Unable to write user data.";
        exit();
    }

    echo "Registration successful! You can now log in.";
    header("location:../pages/main.php");
}
?>
