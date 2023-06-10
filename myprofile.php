<?php
    require_once 'mainpageconnec.php';
    session_start();
    $id = $_SESSION['userid'];
    $sql = "SELECT * FROM users WHERE id = '$id';";
    $res = $conn->query($sql);
    $row = mysqli_fetch_assoc($res);
    $sql1 = "SELECT * FROM user_profile WHERE user_id = '$id';";
    $res1 = $conn->query($sql1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="myprofile.css">
  <link rel = "stylesheet" type = "text/css" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="icon" href="revicon.ico" type="image/icon type">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="testcss.css">
  <title>Revolution</title>
  <style>
      .footer{
  background-color:#0e162b;
  padding: 40px 0;
  clear:both;
  position: relative;
  bottom:-100%;
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
        <li>
          <li>  <div class="dropdown">
            <button onclick="dropdown()" class="dropbtn"><span class="material-symbols-outlined">
              account_circle
              </span></button>
            <div id="myDropdown" class="dropdown-content">
              <a href="myprofile.php">Account</a>
              <a href="mypet.php">Petitions</a>
              <a href="victories.php">Victories</a>
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
    <center>
      <?php
          if($res1->num_rows>0)
          {
            $row1 = mysqli_fetch_assoc($res1);
        ?>
        <div class="a1">
        <span class="material-symbols-outlined" style="scale:1.5;">
person
</span><p style="position:relative; top:25px;"><?php echo $row['username'];  ?></p>
            </div>
            <div class="location">
                <span class="material-symbols-outlined">
                    pin_drop
                    </span>
            <span class="name_of_location"><?php echo $row1['city'];   ?></span>
        </div>
        <div >
             <a href="myprofileform.php" class="edit"><input type="button" class="editprof" value="Edit profile" style="border: 3px solid black;border-radius: 10px;"></a>
        </div>
        </div>
        <div>

            <div class="started">
                <label class="s1">started <span style="scale: 1.2;" class="material-symbols-outlined">
                  work_history
                  </span>  (<label><?php echo $row['started'];  ?></label>)</label><br>
                <div class="typewriter">
                  <h1 id="typewriter-text" class="typewriter-text1">  Is there something you want to change? Build support for an issue you care about.</h1>
                </div>
               <a href="startpetition1.php"><input type="button" class="s3" value="Start A Petition"></a>
            </div>
            <?php
          } else
          {
      ?>
              <div class="a1">
                <p>Your name</p>
            </div>
            <div class="location">
                <span class="material-symbols-outlined">
                    pin_drop
                    </span>
            <span class="name_of_location">location</span>
        </div>
        <div >
             <a href="myprofileform.php" class="edit"><input type="button" class="editprof" value="Edit profile" style="border: 3px solid black;border-radius: 10px;"></a>
        </div>
        </div>
        <div>

            <div class="started">
                <label class="s1">started <span style="scale: 1.2;" class="material-symbols-outlined">
                  work_history
                  </span>  (<label><?php echo $row['started'];  ?></label>)</label><br>
                <div class="typewriter">
                  <h1 id="typewriter-text" class="typewriter-text1">  Is there something you want to change? Build support for an issue you care about.</h1>
                </div>
               <a href="startpetition1.php"> <input type="button" class="s3" value="Start A Petition"></a>
            </div>
            <?php
          }
            ?>

            
            <script defer> 
              const text = document.getElementById("typewriter-text");
    const animationDuration = parseFloat(window.getComputedStyle(text).getPropertyValue("animation-duration")) * 1000;
    const delay = 5000; // Delay in milliseconds (5 seconds)
    
    function typeWriter() {
    text.style.animationPlayState = "running"; // Start the animation
    setTimeout(() => {
      text.style.animationPlayState = "paused"; // Pause the animation
      setTimeout(() => {
        text.style.animationPlayState = ""; // Resume the animation
        typeWriter(); // Call the function again to restart the animation
      }, delay); // Wait for the delay duration before resuming the animation
    }, animationDuration); // Wait for the animation duration before pausing
    }
    
    setInterval(typeWriter, animationDuration + delay); // Call the function to start the animation and delay for each iteration
       </script>
      
            <div class="signed">
                <label class="k1">signed <span style="scale: 1.2;" class="material-symbols-outlined">
                  work_history
                  </span> (<label><?php echo $row['signed'];  ?></label>)</label><br>
                <div class="typewriter">
                  <h1 id="typewriter-text" class="typewriter-text2">Find petitions that affect issues you care about and show your support.</h1>
                </div>
                <a href="mypet.php"><input type="button" class="k3" value="Find A Petition"></a>
            </div>
        </div>
   
        </center>
    
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
  