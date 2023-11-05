<!DOCTYPE html>
<html>
<head>
    <title>Session</title>
</head>
<h1> Retrieve-Session </h1>
<body>
<?php
// Start a session

// Start a new session or resume the existing session
session_start();

// Retrieve and display the values of the session variables

// Check if session variables "userId," "userName," and "Age" are set
if (isset($_SESSION["userId"]) && isset($_SESSION["userName"]) && isset($_SESSION["Age"])) {
    // If the session variables are set, retrieve their values
    $userId = $_SESSION["userId"];
    $userName = $_SESSION["userName"];
    $age = $_SESSION["Age"];

    // Display the value of "userId" in the browser
    echo "userId: $userId<br>";

    // Display the value of "userName" in the browser
    echo "userName: $userName<br>";

    // Display the value of "Age" in the browser
    echo "Age: $age";
} else {
    // If the session variables are not set, display a message indicating that
    echo "Session variables not set.";
}
?>
</body>
</html>
