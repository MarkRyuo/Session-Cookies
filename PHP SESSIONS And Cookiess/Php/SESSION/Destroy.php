<!DOCTYPE html>
<html>
<head>
    <title>Session</title>
</head>
<h1> Destroy </h1>
<body>
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
echo "Session has been destroyed, and all session variables have been unset.";
?>
</body>
</html>