<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destroy</title>
</head>
<body>

    <h1>Destroy</h1>
    
<?php
// Start a session

// Start a new session or resume the existing session
session_start();

// Unset all session variables
// Remove all session variables

session_unset();
// Destroy the session

// Destroy the session, including all data associated with it
session_destroy();

// Display a message to confirm that the session has been destroyed and all session variables have been unset
echo "Session destroyed and variables unset successfully.";
?>
</body>
</html>