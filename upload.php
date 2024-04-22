<?php
if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) {
    $allowed_formats = ["jpg", "png", "gif"];
    $file_extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
    
    if (in_array($file_extension, $allowed_formats)) {
        move_uploaded_file($_FILES["file"]["tmp_name"], "Pictures/" . $_FILES["file"]["name"]);
        echo "File uploaded successfully.";
    } else {
        echo "Invalid file format. Only JPG, PNG, and GIF files are allowed.";
    }
} else {
    echo "Error uploading file.";
}
?>
