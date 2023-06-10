<?php
    require_once 'mainpageconnec.php';
    $sql = "INSERT INTO victories (pet_id,auth_id) SELECT pet_id,userid FROM petitions WHERE progressval = 100;";
    $res = $conn->query($sql);
    $sql = "SELECT * FROM petitions WHERE progressval != 100 ORDER BY ABS(needsup - supporters) ASC LIMIT 6;";
    $curtrends = $conn->query($sql);
    $sql1 = "SELECT * FROM victories ORDER BY vicid DESC LIMIT 3;";
    $victories = $conn->query($sql1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css2.css">
  <link rel = "stylesheet" type = "text/css" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="icon" href="revicon.ico" type="image/icon type">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="testcss.css" />
  <title>Revolution</title>
  <style>
    .progress-bar-container {
      width: 50%;
      height: 30px;
      border-radius: 15px;
      overflow: hidden;
      position: relative;
      top: 70px;
      left: -30px;
    }

    .progress-bar {
      height: 100%;
      width: 0;
      transition: width 2s ease-in-out;
      background-image: linear-gradient(to right, #9ab0e0, #2761df);
      animation: progressAnimation 2s infinite;
    }

    .progress-bar-fill {
      height: 100%;
      width: 100%;
      background-image: linear-gradient(to right, rgb(6, 25, 76), rgb(6, 40, 156));
    }

    @keyframes progressAnimation {
      0% {
        width: 0;
      }
      100% {
        width: 100%;
      }
    }
    .progress-bar-fill span{
      position: relative;
      left: 35%;
      font-size: 25px;
      color: antiquewhite;
      font-family: 'Righteous', cursive;
    }
    .nav-links li{
  list-style: none;
  position: relative;
  top: -12px;
}
  </style>
</head>
<body>
  <div class="content">
    <nav id="nb">
      <div class="logo">
        <h4><a href="webpage2.php">revolution.org</a></h4>
      </div>
      <ul class="nav-links" id="nbl">
        <li><a href="webpage2.php">home</a></li>
        <li><a href="mypet.php">my petitions</a></li>
        <li><a href="startpetition1.php">start a petition</a></li>
        <li><a href="faqwebpage.php">FAQ</a></li>
        <li> <a href="index.php">login</a></li>
      </ul>
      <div class="burger"><a href="#">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </a>
      </div>
    </nav>
    <script src="script1.js"></script>
      <div class="wrapper">
      <div class="m1">
        <h1>CHANGE THE WORLD</h1>
        <h4>Together, we can make a world of difference.<br>Sign a petition and become a member in our community</h4>
        <a href="startpetition1.php" class="m2">Start A Petition</a>
      </div>
    </div>
    <section class="hidden" style="height:100px;">

      <div>
        <img src="celebrations.gif" class="cele">
      </div>
      <div class="slideshow-container">
      <p><span class="v1">VICTORIES<br>
      <?php
    while($row1=mysqli_fetch_assoc($victories))
    {
      $sql1 = "SELECT * FROM petitions WHERE pet_id = {$row1['pet_id']}";
      $res1 = $conn->query($sql1);
      $row2 = mysqli_fetch_assoc($res1);
    ?>
          <div class="slide fade">
              <img src="petitionsupload/<?php echo $row2['image_url']?>" alt="Image 1" width="850px" height="500px" class="img1">
              <div class="caption"><p> </span><?php echo $row2['pet_title'] ?></p></div>
          </div>
          <?php
    }

      ?>
          <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
          <a class="next" onclick="changeSlide(1)">&#10095;</a>
          <div class="progress-bar-container">
            <div class="progress-bar" id="progress-bar">
              <div class="progress-bar-fill" id="progress-bar-fill"><span>revolutionized</span></div>
            </div>
          </div>
          
      </div>
    
      <div class="indicators">
          <span class="indicator" onclick="currentSlide(1)"></span>
          <span class="indicator" onclick="currentSlide(2)"></span>
          <span class="indicator" onclick="currentSlide(3)"></span>
      </div>
 
    </section>
    
    <section class="hidden1" style="height:100px;">
      <h2 class="hidden1">SMILES AROUND THE WORLD</h2>
      <div class="multphts">
        <div class="slider-container2">
          <div class="slider">
            <div class="slider-item">
              <img src="slideimg1.jpg" alt="Image 1" width="1000px" height="1050px">
              <div class="slider-text">Happy smiles <span class="dots">...</span></div>
            </div>
            <div class="slider-item">
              <img src="slideimg2.jpg" alt="Image 2" width="1000px" height="95px">
              <div class="slider-text">Happy smiles <span class="dots">...</span></div>
            </div>
            <div class="slider-item">
              <img src="slideimg3.jpg" alt="Image 3" width="1000px" height="1000px">
              <div class="slider-text">Happy smiles <span class="dots">...</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="sec2">
      <h2 class="hidden">CATEGORIES</h2>
      <div class="categories">
        <a href="env.php"><div class="cat hidden"><img src="environment.jpg" width="325px" height="270px"><span>ENVIRONMENT</span></div></a>
        <a href="edu.php"><div class="cat hidden"><img src="education.jpg" width="325px" height="270px"><span>EDUCATION</span></div></a>
  <a href="hlth.php"><div class="cat hidden"><img src="health.jpg" width="325px" height="270px"><span>HEALTH</span></div></a>
  <a href="hum.php"><div class="cat hidden"><img src="humanrights.jpg" width="325px" height="270px"><span>HUMAN RIGHTS</span></div> </a>
  <a href="chld.php"><div class="cat hidden"><img src="childrights.jpg" width="325px" height="270px"><span>CHILD RIGHTS</span></div></a>
  <a href="anm.php"><div class="cat hidden"><img src="animals.jpg" width="325px" height="270px"><span>ANIMAL RIGHTS</span></div></a>        
      </div>
    </section>
    <section class="sec3">
      <h2 class="hidden" style="position: relative; top:30px;">CURRENT TRENDS</h2>
      <?php
        while($row = mysqli_fetch_assoc($curtrends))
        {
      ?>
      <div class="currenttrends">
  
        <div class="cur hidden" ><img src="petitionsupload/<?php echo $row["image_url"]; ?>" width="325px" height="270px"> <a href="petition.php?title=<?php echo $row["pet_title"]; ?>">
      <span><?php echo $row["pet_title"]; ?></span>
    </a><br><span class="sp2" style="text-decoration: none;"><span class="supo" style="position: relative; top:0px;left:-5px;text-decoration: none;"><?php echo $row["supporters"]-$row["opposers"]; ?></span>/<span style="position: relative; top:0px;left:5px;text-decoration: none;"><?php echo $row["needsup"]." "; ?></span>SUPPORTERS</span><div class="sp3"><p style="width: 900px;  font-family: 'Righteous', cursive;"><?php echo $row["pet_desc"]; ?></p></div></div>
    
      </div>
      <?php
        }
      ?>
    </section>
    
      
      <!-- Your footer content here -->
      <footer class = "footer">
        <div class = "container">
        <div class = "row">
          <div class = "footer-col">
            <h4>COMPANY</h4>
            <ul>
              <li><a href="aboutus.php">About us</a></li>
              <li><a href="impact.php">Impact</a></li>
              <li><a href="career.php">Careers</a></li>
              <li><a href="team.php">Team</a></li>
            </ul>
          </div>
          <div class = "footer-col">
            <h4>COMMUNITY</h4>
            <ul>
              <li><a href="blog.php">Blog</a></li>
              <li><a href="cg.php">Community Guidelines</a></li>
            </ul>
          </div>
          <div class = "footer-col">
            <h4>SUPPORT</h4>
            <ul>
              <li><a href="help.php">Help</a></li>
              <li><a href="guide.php">Guides</a></li>
              <li><a href="privacy.php">Privacy</a></li>
              <li><a href="policy.php">Policies</a></li>
              <li><a href="cookies.php">Cookies</a></li>
            </ul>
          </div>
          
          <div class = "footer-col">
            <h4>CONNECT</h4>
            <div class = "social-links">
              <a href="https://www.facebook.com/profile.php?id=100093006007631&mibextid=LQQJ4d"><i class = "fab fa-facebook-f"></i></a>
              <a href="https://twitter.com/org_revolution/status/1660590040894828545?s=46"><i class = "fab fa-twitter"></i></a>
              <a href="https://instagram.com/revolution.org_?igshid=NTc4MTIwNjQ2YQ=="><i class = "fab fa-instagram"></i></a>
              <a href="https://www.linkedin.com/in/revolution-org-94ba00277/"><i class = "fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
      </footer>
  </body>
  <script defer src="testscript.js">
  </script>
  </html>
  