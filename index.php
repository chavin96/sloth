<?php
include("includes/config.php");

if (isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn = $_SESSION['userLoggedIn'];
} else {
    header("Location: register.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Sloth</title>
</head>

<body>
    HI
</body>

</html>