<?php
include("includes/config.php");
include("includes/classes/Artist.php");
include("includes/classes/Album.php");
include("includes/classes/Song.php");



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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assests/js/script.js"></script>
</head>

<body>
    <!-- <script>
    var audioElement = new Audio();
    audioElement.setTrack("assests/music/bensound-acousticbreeze.mp3");
    audioElement.audio.play();
    </script> -->
    <div id="mainContainer">
        <div id="topContainer">
            <?php include("includes/navBarContainer.php"); ?>
            <div id="mainViewContainer">
                <div id="mainContent">