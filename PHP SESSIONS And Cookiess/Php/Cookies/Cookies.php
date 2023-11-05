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
    // Assign values to the 'userList' and 'userCourse' cookies and specify when they should expire.
    // Establish the 'userList' cookie's value.
    // Define the value for the 'userCourse' cookie
    $userName = "Malupa Jhon Mark L.";
    $userCourse = "IT-NT";

    // Calc the expiration time (3.5 hours from the current time)
    $expiration_time = time() + 3.5 * 3600; // 3.5 hours in seconds(3600)

   // Set the value and expiration time of the "userList" cookie.
    setcookie("userList", $userName, $expiration_time);

    // Set the 'userCourse' cookie with its value and expired time
    setcookie("userCourse", $userCourse, $expiration_time);

    // Show a message to verify that cookies have been set.
    echo "The cookies have been configured with the values 'Malupa Jhon Mark L.' and 'IT NT'. Will automatically expire after 3.5 hours.";
    ?>
</body>
</html>
