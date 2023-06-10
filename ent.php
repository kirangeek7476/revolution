<?php
    require_once 'mainpageconnec.php';
    $sql = "SELECT *
    FROM petitions WHERE typeid = 19";
    $env = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ent.css">
  <link rel = "stylesheet" type = "text/css" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="icon" href="revicon.ico" type="image/icon type">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <title>Revolution</title>
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
        <li>
          <li>  <div class="dropdown">
            <button onclick="dropdown()" class="dropbtn"><span class="material-symbols-outlined">
              account_circle
              </span></button>
            <div id="myDropdown" class="dropdown-content">
            <a href="myprofile.php">Account</a>
      <a href="mypet.php">Petitions</a>
      <a href="index.php"><span class="material-symbols-outlined">
logout
</span>Logout</a>
            </div>
          </div></li>
        </li>
      </ul>
          <div class="burger"><a href="#">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </a>
      </div>
    </nav>
    </div>
    <div class="envban" style="position: relative; top:-860px"><img src="enter.png" height="700px" width="100%"></div>
    <h1>Petitions based on "Entertainment"...</h1>
    <?php
        while($row = mysqli_fetch_assoc($env))
        {
      ?>
      <div class="currenttrends" style="position: relative;top:-500px;">
  
        <div class="cur hidden" style="border: 4px solid rgb(46, 68, 6);" ><img src="petitionsupload/<?php echo $row["image_url"]; ?>" width="325px" height="270px"><a href="petition.php?title=<?php echo $row["pet_title"]; ?>">
      <span><?php echo $row["pet_title"]; ?></span>
    </a><br><span class="sp2" style="text-decoration: none;"><span class="supo" style="position: relative; top:0px;left:-5px;text-decoration: none;"><?php echo $row["supporters"]; ?></span>/<span style="position: relative; top:0px;left:5px;text-decoration: none;"><?php echo $row["needsup"]." "; ?></span>SUPPORTERS</span><div class="sp3"><p style="width: 900px;  font-family: 'Righteous', cursive;"><?php echo $row["pet_desc"]; ?></p></div></div>
    
      </div>
      <?php
        }
      ?>   
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
      <script src="testscript.js"></script>
  </body>
  </html>