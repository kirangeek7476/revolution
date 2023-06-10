<?php
    require_once 'mainpageconnec.php';
    session_start();
    $id = $_SESSION['userid'];
    $sql = "SELECT * FROM user_profile WHERE user_id = '$id'";
    $profile = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="myprofileform.css">
  <link rel = "stylesheet" type = "text/css" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="icon" href="revicon.ico" type="image/icon type">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="testcss.css">
  <title>Revolution</title>
  <style>
    .nav-links li{
  list-style: none;
  position: relative;
  top: 15px;
}
.dropbtn {
  background-color: #000000;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  position: relative;
  top: -45px;
  left: -25px;
  backdrop-filter: blur(5px);
  height: 25px;
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
    <?php
if ($profile->num_rows > 0) {
  $profilerow = mysqli_fetch_assoc($profile);
?>
  <h1>EDIT PROFILE</h1>
  <form name="proform" action="myprofileformdb.php" method="post" enctype="multipart/form-data">
    <div class="center">
      <div class="form-input">
        <div class="preview">
          <img id="file-ip-1-preview" style="position: relative;top:-925px;left:66.1px;" height="225px" width="225px" src="usersimages/<?php echo $profilerow['image_url']; ?>">
        </div>
        <label for="file-ip-1">Upload Image</label>
        <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);" name="image">
      </div>
    </div>
    <div class="profile">
      <label id="fname">FirstName</label><br>
      <input type="text" placeholder="FirstName" id="fname" name="fname" value="<?php echo $profilerow['fname']; ?>"><br>
      <label id="lname">LastName</label><br>
      <input type="text" placeholder="LastName" id="lname" name="lname" value="<?php echo $profilerow['lname']; ?>"><br>
      <label id="about">AboutMe</label><br>
      <input type="text area" placeholder="Describe about yourself" id="about" name="about" value="<?php echo $profilerow['about']; ?>"><br>
      <label id="country">Country</label><br>
      <input type="text" id="country" name="country" value="<?php echo $profilerow['country']; ?>"><br>
      <label id="city">City</label><br>
      <input type="text" id="cityt" name="city" value="<?php echo $profilerow['city']; ?>"><br>
      <label id="twit">Twitter</label><br>
      <input type="text" placeholder="@username" id="twit" name="twitter" value="<?php echo $profilerow['twitter']; ?>"><br>
      <label id="phno">PhoneNumber(optional)</label><br>
      <input type="number" id="phno" name="phno" value="<?php echo $profilerow['phn_no']; ?>"><br>
      <button class="button button1" type="submit" name="submit">Save</button>
    </div>
  </form>
  <?php
} else {
?>
  <h1>EDIT PROFILE</h1>
  <form name="proform" action="myprofileformdb.php" method="post" enctype="multipart/form-data">
    <div class="center">
      <div class="form-input">
        <div class="preview">
          <img id="file-ip-1-preview" style="position: relative;top:-925px;left:66.1px;" height="225px" width="225px" src="<?php echo $profilerow['image_url']; ?>">
        </div>
        <label for="file-ip-1">Upload Image</label>
        <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);" name="image">
      </div>
    </div> 
    <div class="profile">
      <label id="fname">FirstName</label><br>
      <input type="text" placeholder="FirstName" id="fname" name="fname"><br>
      <label id="lname">LastName</label><br>
      <input type="text" placeholder="LastName" id="lname" name="lname"><br>
      <label id="about">AboutMe</label><br>
      <input type="text area" placeholder="Describe about yourself" id="about" name="about"><br>
      <label id="country">Country</label><br>
      <input type="text" id="country" name="country"><br>
      <label id="city">City</label><br>
      <input type="text" id="cityt" name="city"><br>
      <label id="twit">Twitter</label><br>
      <input type="text" placeholder="@username" id="twit" name="twitter"><br>
      <label id="phno">PhoneNumber(optional)</label><br>
      <input type="number" id="phno" name="phno"><br>
      <button class="button button1" type="submit" name="submit">Save</button>
    </div>
  </form>  
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
      <script type="text/javascript">
  function showPreview(event){
  if(event.target.files.length > 0){
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("file-ip-1-preview");
    preview.src = src;
    preview.style.display = "block";
  }
}
</script>
  </body>
  </html>
  