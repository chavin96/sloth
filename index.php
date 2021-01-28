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
    <link rel="stylesheet" href="assests/css/style.css">
</head>

<body>
    <div id="mainContainer">
        <div id="topContainer">
            <div id="navBarContainer">
                <nav class="navBar">
                    <a href="index.php" class="logo">
                        <img src="assests/images/icons/logo.png" alt="logo">
                    </a>
                    <div class="group">
                        <div class="navItem">
                            <a href="search.php" class="navItemLink">Search
                                <img src="assests/images/icons/search.png" class="icon" alt="search">
                            </a>
                        </div>
                    </div>
                    <div class="group">
                        <div class="navItem">
                            <a href="browse.php" class="navItemLink">Browse</a>
                        </div>
                        <div class="navItem">
                            <a href="yourMusic.php" class="navItemLink">Your Music</a>
                        </div>
                        <div class="navItem">
                            <a href="profile.php" class="navItemLink">Chavin</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div id="nowPlayingBarContainer">
            <div id="nowPlayingBar">
                <div id="nowPlayingLeft">
                    <div class="content">
                        <span class="albumLink">
                            <img class="albumArtwork"
                                src="https://image.freepik.com/free-vector/pack-colorful-square-emoticons_23-2147589525.jpg">
                        </span>
                        <div class="trackInfo">
                            <span class="trackName"><span>Happy</span></span>
                            <span class="artistName"><span>John Smith</span></span>

                        </div>
                    </div>
                </div>
                <div id="nowPlayingCenter">
                    <div class="content playerControls">
                        <div class="buttons">
                            <button class="controlButton shuffle" title="Shuffle Button">
                                <img src="assests/images/icons/shuffle.png" alt="Shuffle">
                            </button>
                            <button class="controlButton previous" title="Previous Button">
                                <img src="assests/images/icons/previous.png" alt="Previous">
                            </button>
                            <button class="controlButton play" title="Play Button">
                                <img src="assests/images/icons/play.png" alt="Play">
                            </button>
                            <button class="controlButton pause" title="Pause Button" style="display: none;">
                                <img src="assests/images/icons/pause.png" alt="Pause">
                            </button>
                            <button class="controlButton next" title="Next Button">
                                <img src="assests/images/icons/next.png" alt="Next">
                            </button>
                            <button class="controlButton repeat" title="Repeat Button">
                                <img src="assests/images/icons/repeat.png" alt="Repeat">
                            </button>
                        </div>
                        <div class="playBackBar">
                            <span class="progressTime current"> 0.00</span>
                            <div class="progressBar">
                                <div class="progressBarBg">
                                    <div class="progress"></div>
                                </div>
                            </div>
                            <span class="progressTime remaining"> 0.00</span>
                        </div>
                    </div>
                </div>
                <div id="nowPlayingRight">
                    <div class="volumeBar">
                        <button class="controlButton volume" title="Volume Button">
                            <img src="assests/images/icons/volume.png" alt="Volume">
                        </button>
                        <div class="progressBar">
                            <div class="progressBarBg">
                                <div class="progress"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>