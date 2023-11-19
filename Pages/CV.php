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
  <link rel="stylesheet" type="text/css" href="../styles/Stylecv.css" />
  <link rel="stylesheet" href="../icons.css" />
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <title>My Resume</title>
</head>

<body>
  <div class="row right-content" id="header">
    <div id="dropdown-menu">
      <span><i class="ico menu-ico"></i>MENU</span>
      <div class="dropdown-content menu-rtl">
        <ul>
          <li style="text-align:right;">
            <a href="Home.php"><i class="ico ico-l pg3-ico"></i>Gallery</a>
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
  <div class="resume">
    <div class="resume_left">
      <div class="resume_profile">
        <img src="../images/img.jpg" alt="profile_pic" />
      </div>
      <div class="resume_content">
        <div class="resume_item resume_info">
          <div class="title">
            <p class="bold">Adam Kanj</p>
            <p class="regular">Web Developer</p>
          </div>
          <ul>
            <li>
              <div class="icon">
                <i class="fas fa-map-signs"></i>
              </div>
              <div class="data">
                kanj Street, beirut <br />
                LB
              </div>
            </li>
            <li>
              <div class="icon">
                <i class="fas fa-mobile-alt"></i>
              </div>
              <div class="data">+961 3 637 138</div>
            </li>
            <li>
              <div class="icon">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="data">adamkanj@gmail.com</div>
            </li>
            <li>
              <div class="icon">
                <i class="fab fa-weebly"></i>
              </div>
              <div class="data">www.adamkanj.com</div>
            </li>
          </ul>
        </div>
        <div class="resume_item resume_skills">
          <div class="title">
            <p class="bold">skills</p>
          </div>
          <ul>
            <li>
              <div class="skill_name">HTML</div>
              <div class="skill_progress">
                <span style="width: 80%"></span>
              </div>
              <div class="skill_per">80%</div>
            </li>
            <li>
              <div class="skill_name">CSS</div>
              <div class="skill_progress">
                <span style="width: 70%"></span>
              </div>
              <div class="skill_per">70%</div>
            </li>
            <li>
              <div class="skill_name">SASS</div>
              <div class="skill_progress">
                <span style="width: 90%"></span>
              </div>
              <div class="skill_per">90%</div>
            </li>
            <li>
              <div class="skill_name">JS</div>
              <div class="skill_progress">
                <span style="width: 60%"></span>
              </div>
              <div class="skill_per">60%</div>
            </li>
            <li>
              <div class="skill_name">JQUERY</div>
              <div class="skill_progress">
                <span style="width: 88%"></span>
              </div>
              <div class="skill_per">88%</div>
            </li>
          </ul>
        </div>
        <div class="resume_item resume_social">
          <div class="title">
            <p class="bold">Social</p>
          </div>
          <ul>
            <li>
              <div class="icon">
                <i class="fab fa-facebook-square"></i>
              </div>
              <div class="data">
                <p class="semi-bold">Facebook</p>
                <p>AdamK@facebook</p>
              </div>
            </li>
            <li>
              <div class="icon">
                <i class="fab fa-twitter-square"></i>
              </div>
              <div class="data">
                <p class="semi-bold">Twitter</p>
                <p>Adamkanj@twitter</p>
              </div>
            </li>
            <li>
              <div class="icon">
                <i class="fab fa-youtube"></i>
              </div>
              <div class="data">
                <p class="semi-bold">Youtube</p>
                <p>Akanj@youtube</p>
              </div>
            </li>
            <li>
              <div class="icon">
                <i class="fab fa-linkedin"></i>
              </div>
              <div class="data">
                <p class="semi-bold">Linkedin</p>
                <p>AdamKanj@linkedin</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="resume_right">
      <div class="resume_item resume_about">
        <div class="title">
          <p class="bold">About us</p>
        </div>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit.
          Perspiciatis illo fugit officiis distinctio culpa officia totam
          atque exercitationem inventore repudiandae?
        </p>
      </div>
      <div class="resume_item resume_work">
        <div class="title">
          <p class="bold">Work Experience</p>
        </div>
        <ul>
          <li>
            <div class="date">2016 - 2018</div>
            <div class="info">
              <p class="semi-bold">Lorem ipsum dolor sit amet.</p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nostrum, voluptatibus!
              </p>
            </div>
          </li>
          <li>
            <div class="date">2018 - 2020</div>
            <div class="info">
              <p class="semi-bold">Lorem ipsum dolor sit amet.</p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nostrum, voluptatibus!
              </p>
            </div>
          </li>
          <li>
            <div class="date">2020 - Present</div>
            <div class="info">
              <p class="semi-bold">Lorem ipsum dolor sit amet.</p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nostrum, voluptatibus!
              </p>
            </div>
          </li>
        </ul>
      </div>
      <div class="resume_item resume_education">
        <div class="title">
          <p class="bold">Education</p>
        </div>
        <ul>
          <li>
            <div class="date">2021 - 2024</div>
            <div class="info">
              <p class="semi-bold">
                Computer Science (Lebanese American University)
              </p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nostrum, voluptatibus!
              </p>
            </div>
          </li>
          <li>
            <div class="date">2005 - 2020</div>
            <div class="info">
              <p class="semi-bold">Modern Community School</p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nostrum, voluptatibus!
              </p>
            </div>
          </li>
        </ul>
      </div>
      <div class="resume_item resume_hobby">
        <div class="title">
          <p class="bold">Hobby</p>
        </div>
        <ul>
          <li><i class="fas fa-book"></i></li>
          <li><i class="fas fa-gamepad"></i></li>
          <li><i class="fas fa-music"></i></li>
          <li><i class="fab fa-pagelines"></i></li>
        </ul>
      </div>
    </div>
  </div>
</body>

</html>