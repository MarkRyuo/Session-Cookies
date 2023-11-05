<!DOCTYPE html>
<html>
<head>
    <title>Session</title>
</head>
<h1> Assign - Session </h1>
<body>
<?php
// Start a session

// Start a new session or resume the existing session
session_start();

// Set session variables

// Assign values to session variables
$_SESSION["userId"] = 19842;
$_SESSION["userName"] = "ODLANYER R. LIAQUEN";
$_SESSION["Age"] = "20";

// Display a message to confirm that the session variables have been set
echo "Session variables have been set.";
?>
</body>
</html>