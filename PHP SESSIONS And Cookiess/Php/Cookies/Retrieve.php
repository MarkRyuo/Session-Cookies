<!DOCTYPE html>
<html>
<head>
    <title>Cookies</title>
</head>
<h1> Retrieve </h1>
<body>
<?php
// Retrieve and display the values of the "userList" and "userCourse" cookies

// Check if the "userList" and "userCourse" cookies are set
if (isset($_COOKIE["userList"]) && isset($_COOKIE["userCourse"])) {
    // If both cookies are set, retrieve their values
    $userList = $_COOKIE["userList"];
    $userCourse = $_COOKIE["userCourse"];

    // Display the value of "userList" in the browser
    echo "<br> Value of userList: " . $userList . "<br>";

    // Display the value of "userCourse" in the browser
    echo "<br> Value of userCourse: " . $userCourse;
} else {
    // If the cookies are not set, display a message indicating that
    echo "<br> Cookies not set.";
}
?>
</body>
</html>
