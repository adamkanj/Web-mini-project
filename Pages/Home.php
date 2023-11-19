<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Gallery</title>
  <link rel="stylesheet" href="../styles/style.css" />
  <link rel="stylesheet" href="../styles/Form.css" />
  <link rel="stylesheet" href="../icons.css" />
</head>

<body>
  <h1>My Gallery</h1>
  <div class="row right-content" id="header">
    <div id="dropdown-menu">
      <span><i class="ico menu-ico"></i>MENU</span>
      <div class="dropdown-content menu-rtl">
        <ul>
          <li>
            <a href="Home.php"><i class="ico ico-l pg3-ico"> Gallery</i></a>
          </li>
          <li style="text-align:right;">
            <a href="CV.php"><i class="ico ico-l pg1-ico"></i>Profile</a>
          </li>
          <li style="text-align:right;">
            <a href="#"><i class="ico ico-l pg2-ico"></i>Contacts</a>
          </li>
        </ul>
      </div>
    </div>
    <div id="user-welcome">welcome <?php echo $_SESSION["username"]; ?>&nbsp; <a href="../index.php" class="logout-button"> Logout</a> </div>
  </div>
  <div>
    <h2>Upload new gallery here:</h2>
    <form action="../BE/upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="image" accept="image/*">
      <input type="submit" value="Upload Image" name="submit">
    </form>
  </div>
  <br><br>
  <div class="container">
    <?php
    // Read image names from the text file
    $imageData = file("../Data/imageD.txt", FILE_IGNORE_NEW_LINES);

    // Loop through each image name and generate the HTML structure
    foreach ($imageData as $key => $imageName) {
      $imageId = "img" . ($key + 1); // Generate unique ID for each image overlay

      // Output HTML structure for each image
      echo '<div class="imgs">';
      echo '<a href="#' . $imageId . '">';
      echo '<img src="../images/' . $imageName . '" alt="' . $imageName . '" />';
      echo '</a>';
      echo '</div>';

      // Output HTML structure for the image overlay
      echo '<div id="' . $imageId . '" class="overlay">';
      echo '<a href="#" class="close-btn">&times;</a>';
      echo '<img src="../images/' . $imageName . '" class="overlay-img" />';
      echo '</div>';
    }
    ?>
  </div>

</body>

</html>