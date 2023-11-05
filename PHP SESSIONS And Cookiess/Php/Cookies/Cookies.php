<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Cookies.php</title>
</head>
<body>
    <h1>Cookies</h1>
</body>
</html>
<?php
// Set the "userList" and "userCourse" cookies with values and expiration time

// Define the value for the "userList" cookie
$userName = "Malupa Jhon Mark L.";

// Define the value for the "userCourse" cookie
$userCourse = "IT-NT";

// Calculate the expiration time (3.5 hours from the current time)
$expiration_time = time() + 3.5 * 3600; // 3.5 hours in seconds

// Set the "userList" cookie with its value and expiration time
setcookie("userList", $userName, $expiration_time);

// Set the "userCourse" cookie with its value and expiration time
setcookie("userCourse", $userCourse, $expiration_time);

// Display a message to confirm that the cookies have been set
echo "Cookies have been set with the values 'ODLANYER R. LIAQUEN' and 'IT' and will expire in 3.5 hours.";
?>

</body>
</html>
