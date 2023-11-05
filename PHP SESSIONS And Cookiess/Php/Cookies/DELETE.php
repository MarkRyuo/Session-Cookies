<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Delete</title>
</head>
<body>
    <h1>Delete</h1>
</body>
</html>
<?php
// Get Delete of the 'userCourse' and 'userList' cookies.
// Remove the 'userList' cookie, set its expiration time to the past (one hour ago).
setcookie("userList", "", time() - 3600);

// Set the "userCourse" cookie's expiration time to the past (1 hour ago) to delete it
setcookie("userCourse", "", time() - 3600);

// Display a message to confirm that the cookies have been deleted
echo "<br>Cookies have been deleted.";
?>
</body>
</html>