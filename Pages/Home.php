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
  <link rel="stylesheet" href="../icons.css" />
</head>

<body>
  <h1>My Gallery:</h1>
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
    <div id="user-welcome">welcome <?php echo $_SESSION["username"]; ?><a href="../index.php">Logout</a> </div>
  </div>
  <div class="container">
    <div class="imgs">
      <a href="#img1">
        <img src="../images/image1.jpeg" alt="Image 1" />
      </a>
    </div>
    <div class="imgs">
      <a href="#img2">
        <img src="../images/image2.jpeg" alt="Image 2" />
      </a>
    </div>
    <div class="imgs">
      <a href="#img3">
        <img src="../images/image3.jpeg" alt="Image 3" />
      </a>
    </div>
  </div>
  <div id="img1" class="overlay">
    <a href="#" class="close-btn">&times;</a>
    <img src="../images/image1.jpeg" class="overlay-img" />
  </div>
  <div id="img2" class="overlay">
    <a href="#" class="close-btn">&times;</a>
    <img src="../images/image2.jpeg" class="overlay-img" />
  </div>
  <div id="img3" class="overlay">
    <a href="#" class="close-btn">&times;</a>
    <img src="../images/image3.jpeg" class="overlay-img" />
  </div>
</body>

</html>