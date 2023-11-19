<?php
$galleryFile = '../images.json';
$galleryData = json_decode(file_get_contents($galleryFile), true);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['newImage'])) {
    $newImageName = $_POST['newImage'];

    // Add the new image name to the gallery data
    $galleryData['images'][] = $newImageName;

    // Save the updated data back to the JSON file
    file_put_contents($galleryFile, json_encode($galleryData, JSON_PRETTY_PRINT));
    header("location:../pages/gallery2.php");
}
?>
