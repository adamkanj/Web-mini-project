<?php
if (isset($_POST["submit"])) {
    $uploadDirectory = '../images/';
    $uploadFile = $uploadDirectory . basename($_FILES['image']['name']);
    $imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));

    // Check if the file is an actual image
    $check = getimagesize($_FILES['image']['tmp_name']);
    if ($check !== false) {
        // Check file size if needed
        // if ($_FILES['image']['size'] > 500000) {
        //     echo "Sorry, your file is too large.";
        //     exit();
        // }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            exit();
        }

        // Upload the file
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            // Add the uploaded image name to imageD.txt
            $imageName = basename($_FILES['image']['name']);
            file_put_contents('../Data/imageD.txt', $imageName . PHP_EOL, FILE_APPEND);

            echo "The file " . basename($_FILES['image']['name']) . " has been uploaded.";
            header("location:../Pages/Home.php");
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "File is not an image.";
    }
}
