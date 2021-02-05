<?php include("includes/header.php");
if (isset($_GET['id'])) {
    $albumId = $_GET['id'];
} else {
    header("location: index.php");
}
$album = new Album($con, $albumId);

$artist = $album->getArtist();

echo $album->getTitle();
echo $artist->getName();

?>
<?php include("includes/footer.php"); ?>