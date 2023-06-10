<?php
    require_once 'mainpageconnec.php';
    $sql = "INSERT INTO victories (pet_id, auth_id)
    SELECT p.pet_id, p.userid
    FROM petitions AS p
    WHERE p.progressval = 100
      AND NOT EXISTS (
        SELECT 1
        FROM victories AS v
        WHERE v.pet_id = p.pet_id
      );
    ";
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
  <link rel="stylesheet" href="testt.css">
  <link rel="stylesheet" href="css1.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@1,500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@1,500&family=Source+Code+Pro:wght@700&display=swap" rel="stylesheet">
  <link rel = "stylesheet" type = "text/css" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="icon" href="revicon.ico" type="image/icon type">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
   <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="testcss.css">
  <title>Revolution</title>
  <style>
   .glitch
   {
    position: relative;
    top: 250px;
    left: 300px;
    font-size: 85px;
    font-family: 'Prompt', sans-serif;
    color: antiquewhite;
   }
   .glitchmatter
   {
    position: relative;
    top: 250px;
    left: -70px;
    font-size: 25px;
    display: flex;
    justify-content: center;
   }
   .point
   {
    position: relative;
    top:540px;
    left: 200px;
   }
   .m2
   {
    position: relative;
    top: 310px;
    left: -420px;
    background:none;
    border: none;
    color: #0e162b;
    transition: 0.3s;
   }
   .m2:hover
   {
    scale: 1.1;
    background: none;
   }
    .progress-bar-container {
      width: 50%;
      height: 30px;
      border-radius: 15px;
      overflow: hidden;
      position: relative;
      top: 70px;
      left: -190px;
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
    .categories
{
  display: grid;
  grid-template-columns: auto auto auto;
  position: relative;
  top: 300px;
  text-align: center;
  gap: 35px;
  border-radius: 10px;
  
}
.categories a
{
  text-decoration: none;
}
.categories span{
  font-family: 'Righteous', cursive;
  font-size: 30px;
  position: relative;
  top: -55px;
  color: #e2ebc5;
  display: none;
}
@keyframes slide-in {
  from {
    transform: translateX(-100%);
  }
  to {
    transform: translateX(0);
  }
}

@keyframes slide-out {
  from {
    transform: translateX(0);
  }
  to {
    transform: translateX(100%);
  }
}
.sec2 h2{
  position: relative;
  top: 310px;
  font-family: 'Righteous', cursive;
  font-size: 65px;
  color: rgb(163, 173, 202);
  background-color: black;
  z-index: 9990;
}
.sec3
{
  margin-bottom: 100px;
}
.wrapper1 {
  position: absolute;
  width: 80vw;
  transform: translate(-50%, -50%);
  top: 5800px;
  left: 50%;
  display: flex;
  justify-content: space-around;
  gap: 10px;
  margin-top: 30px;
}
.other
{
  position: relative;
  left: 580px;
  top:355px;
  background-color: #281726;
  text-decoration: none;
  color: antiquewhite;
  height: 55px;
  width: 120px;
  display: flex;
  align-items: center;
  transition: 0.2s;
  font-weight: 800;
  border-radius: 25px;
  text-align: center;
}
.other:hover
{
  background-color: #97ceda;
  color: #48595d;
}
.cat:hover
{
  opacity: 1;
}

.slider-text{
  display: none;
}

.container1:nth-child(1){
  transition-delay: 200ms;
}
.container1:nth-child(2){
  transition-delay: 400ms;
}
.container1:nth-child(3){
  transition-delay: 600ms;
}
.container1:nth-child(4){
  transition-delay: 800ms;
}
.container1:nth-child(5){
  transition-delay: 1000ms;
}
.container1:nth-child(6){
  transition-delay: 1200ms;
}
.footer{
  background-color:#0e162b;
  padding: 40px 0;
  clear:both;
  position: absolute;
  bottom:-760%;
  width: 100%;
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
      <h1 class="glitch">
  <span aria-hidden="true">CHANGE the WORLD</span>
  CHANGE the WORLD
  <span aria-hidden="true">CHANGE the WORLD</span>
</h1>
        <h4 class="glitchmatter">Together, we can make a world of difference.<br>Sign a petition and become a member in our community</h4>
        <img src="pointer.gif" width="1050px" height="530px" class="point">
        <a href="startpetition1.php" class="m2">Start A Petition</a>
    </div>
    <?php
    require_once 'mainpageconnec.php';
    $qry1 = "SELECT COUNT(*) AS row_count FROM petitions";
    $result1 = $conn->query($qry1); 
    $row11 = mysqli_fetch_assoc($result1);
    $qry2 = "SELECT count(started) AS column_sum FROM users WHERE started != 0";
    $result2 = $conn->query($qry2);
    $row12 = mysqli_fetch_assoc($result2);
    $qry3 = "SELECT COUNT(*) AS vic_count FROM petitions WHERE progressval = 100";
    $result3 = $conn->query($qry3);
    $row13 = mysqli_fetch_assoc($result3); 
    $qry4 = "SELECT SUM(signed) AS column_sum FROM users";
    $result4 = $conn->query($qry4);
    $row14 = mysqli_fetch_assoc($result4); 
  
?>
    <div class="wrapper1">
      <div class="container1 hidden1">
        <i class="fa-solid fa-newspaper"></i>
        <span class="num" data-val="<?php echo $row11['row_count'];?>">00</span>
        <span class="text">Petitions</span>
      </div>

      <div class="container1 hidden1">
        <i class="fa-sharp fa-solid fa-pen-to-square"></i>
        <span class="num" data-val="<?php echo $row12['column_sum'];?>">00</span>
        <span class="text">Petitioners</span>
      </div>
      <div class="container1 hidden1">
        <i class="fa-solid fa-star"></i>
        <span class="num" data-val="<?php echo $row13['vic_count'];?>">00</span>
        <span class="text">Victories</span>
      </div>

      <div class="container1 hidden1">
        <i class="fa-solid fa-user-pen"></i>
        <span class="num" data-val="<?php echo $row14['column_sum'];?>">00</span>
        <span class="text">Signers</span>
      </div>
    </div>
    <!-- Script -->
    <script src="script10.js"></script>
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
              <div class="slider-text">Happy lifes <span class="dots">...</span></div>
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
        <a href="env.php"><div class="cat hidden"><img src="environment.gif" width="405px" height="360px"><span class="catname">ENVIRONMENT</span></div></a>
        <a href="edu.php"><div class="cat hidden"><img src="education.gif" width="405px" height="360px"><span class="catname">EDUCATION</span></div></a>
  <a href="hlth.php"><div class="cat hidden"><img src="health.gif" width="405px" height="360px"><span class="catname">HEALTH</span></div></a>
  <a href="hum.php"><div class="cat hidden"><img src="humanrights.gif" width="405px" height="360px"><span class="catname">HUMAN RIGHTS</span></div> </a>
  <a href="chld.php"><div class="cat hidden"><img src="childrights.gif" width="405px" height="360px"><span class="catname">CHILD RIGHTS</span></div></a>
  <a href="anm.php"><div class="cat hidden"><img src="animals.gif" width="405px" height="360px"><span class="catname">ANIMAL RIGHTS</span></div></a>        
      </div>
  <a class="other" href="other.php">Other categories...</a>
    </section>
    <section class="sec3" style="position: relative; top:1800px;">
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
  <script>
const cat = document.querySelectorAll('.cat');

cat.forEach(function(catElement) {
  const spanElement = catElement.querySelector('.catname');
  const imgElement = catElement.querySelector('img');

  catElement.addEventListener('mouseover', function() {
    spanElement.style.display = 'block';
    imgElement.style.opacity = 0.5;
    spanElement.style.animation = 'slide-in 0.5s forwards';
  });
  catElement.addEventListener('mouseout', function() {
    spanElement.style.display = 'none';
    imgElement.style.opacity = 1;
    spanElement.style.animation = 'slide-out 0.5s forwards';
  });

});

    </script>
  </html>
  