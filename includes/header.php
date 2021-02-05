<?php
include("includes/config.php");
include("includes/classes/Artist.php");
include("includes/classes/Album.php");


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
    <link rel="stylesheet" href="assests/css/style.css">
</head>

<body>
    <div id="mainContainer">
        <div id="topContainer">
            <?php include("includes/navBarContainer.php"); ?>
            <div id="mainViewContainer">
                <div id="mainContent">