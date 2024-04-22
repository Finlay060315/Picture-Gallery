<!DOCTYPE html>
<html>
<head>
    <title>Simple Gallery</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="gallery">
        <?php
        $images = glob("Pictures/*.{jpg,png,gif}", GLOB_BRACE);
        foreach ($images as $image) {
            echo '<img src="' . $image . '" alt="Gallery Image">';
        }
        ?>
    </div>
</body>
</html>
