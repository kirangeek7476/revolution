
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="other.css">
  <link rel = "stylesheet" type = "text/css" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="icon" href="revicon.ico" type="image/icon type">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="testcss.css" />
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
    <h1>Other Categories...</h1>
    <section class="sec2">
      <div class="categories">
        <a href="spt.php"><div class="cat hidden"><img src="sportcat.gif" width="405px" height="360px"><span class="catname">SPORTS</span></div></a>
        <a href="tec.php"><div class="cat hidden"><img src="techcat.gif" width="405px" height="360px"><span class="catname">TECHNOLOGY</span></div></a>
        <a href="ent.php"><div class="cat hidden"><img src="entertainment.gif" width="405px" height="360px"><span class="catname">ENTERTAINMENT</span></div></a>
        <a href="oth.php" class="other"><div class="cat hidden"><img src="Othercat.gif" width="405px" height="360px"><span class="catname">SOMEOTHER</span></div></a>
      </div>
      <h1 class="many">Many more to come...Stay tuned</h1>
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
      <script src="testscript.js"></script>
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
  </body>
  </html>