<?php
    require_once 'mainpageconnec.php';
    if(isset($_GET['title'])) {
      session_start();
      $title = urldecode($_GET['title']);
      $id = $_SESSION['userid'];
      $sql="SELECT * FROM petitions WHERE pet_title='$title'";
      $petition = $conn->query($sql);
      $row=mysqli_fetch_assoc($petition);
      $sql1 = "SELECT * FROM user_profile WHERE user_id='$id'";
      $res1 = $conn->query($sql1);
      if($res1->num_rows == 0)
      {
        echo '<script>window.location.href="usernotallowed.php";</script>';
      }
      else
      {
      $sql2 = "SELECT * FROM user_profile WHERE user_id='{$row['userid']}';";
      $res2 = $conn->query($sql2);
      $row2 = mysqli_fetch_assoc($res2);
      $row5 = mysqli_fetch_assoc($res1);
      }
      // Use $title and $image to display the relevant content on the page
      $sql1 = "SELECT * FROM reviews WHERE pet_title='$title'";
      $res1 = $conn->query($sql1);
      if($res1->num_rows>0)
      {
      $row1 = mysqli_fetch_assoc($res1);
      $existing_reviews = unserialize($row1['reviews']);
      }
      $sql = "SELECT * FROM reviews WHERE pet_title = '$title'";
      $res1 = $conn->query($sql);
      $sql="SELECT * FROM petitions WHERE pet_title='$title'";
      $petition = $conn->query($sql);
      $row=mysqli_fetch_assoc($petition);
      $limit = $row['needsup'];
      $supporters = $row['supporters'];
      $opposers = $row['opposers'];
      $progressval = $row['progressval'];
      $userid = $row['userid'];
      $sql1 ="SELECT * FROM users WHERE id ='$userid'";
      $auhtordet = $conn->query($sql1);
      $row1=mysqli_fetch_assoc($auhtordet);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="petition.css">
  <link rel = "stylesheet" type = "text/css" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="icon" href="revicon.ico" type="image/icon type">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="testcss.css">
  <title>Revolution</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <style>
  .reviews h2
    {
      color: blanchedalmond;
      position: relative;
      top: -980px;
      left: 580px;
      font-size: 45px;
    }
  .comments-container {
  max-width: 800px;
  padding: 40px 20px;
  position: relative;
  top: -1000px;
  left: 0px;
  gap: 5px;
}

.comments-container h2 {
  font-size: 24px;
  font-weight: bold;
  color: #ddd;
  background-color: antiquewhite;
  position: relative;
}

.comments-list {
  border: none;
  position: grid;
  gap:0px;
}

.comment {
  border:none;
  border-radius: 4px;
  padding: 20px;
  position: grid;
  color: blanchedalmond;
  font-family: 'Courier New', Courier, monospace;
  height: 50px;
}

.comment:before {
  content: "";
  display: block;
  position: absolute;
  top: -10px;
  left: 20px;
  border: none;
  color: #ddd;
}

.comment-header {
  display: flex;
  align-items: center;
}

.user-avatar {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background-color: black;
  margin-right: 10px;
}

.user-info .user-name {
  font-weight: bold;
  margin-right: 10px;
  color: #ddd;
  font-size: 20px;
  position: relative;
  left: 60px;
}

.comment-date {
  color:#ddd;
  position: relative;
  left: 80px;
}

.comment-content p {
  margin: 0;
  position: relative;
  left: 98px;
  font-size: 17px;
}


@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

.comment {
  animation: fadeIn 0.5s ease-in-out;
}
.container {
  max-width: 600px;
  margin: 0 auto;
  text-align: center;
}

h2 {
  margin-top: 30px;
  margin-bottom: 10px;
  font-size: 28px;
}

.line {
  border: none;
  border-top: 2px solid #e5e5e5;
  height: 1px;
  margin: 30px auto;
  position: relative;
  width: 900px;
  left: -40px;
}

.line::before {
  content: "";
  width: 100px;
  height: 20px;
  background-color: #e5e5e5;
  position: absolute;
  top: -10px;
  left: calc(50% - 10px);
  border-radius: 50%;
}

.line::after {
  content: "";
  width: 100px;
  height: 20px;
  background-color: #e5e5e5;
  position: absolute;
  bottom: -10px;
  left: calc(50% - 10px);
  border-radius: 50%;
}
.desc{
  position: relative;
  top: -1000px;
  left: 120px;
  color: white;
  width: 1400px;
  font-size: 30px;
  font-family: 'Righteous', cursive;
  border: none;

}
.desc h1
{
  position: relative;
  left: 500px;
}
.userimage
{
  border-radius: 50%;
}
.buttons h1
{
  color: #47986a;
  position: relative;
  top: 45px;
  font-family: 'Righteous', cursive;
  font-size: 20px;
}
.counters span
{
  position: relative;
  top: -5px;
}
.pet_sec
{
  position: relative;
  top: -50px;
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
    <form action="review.php?title=<?php echo $title; ?>" method="post">
    <div class="pet_record">
    <h1 class="pet_title"><?php echo $row['pet_title']; ?></h1>
    <div class="pet_img" style="position: relative; top:-800px;"><img src="petitionsupload/<?php echo $row["image_url"]; ?>" width="900px" height="500px"></div>
    <div class="pet_sec">
    <div class="author"><img src="usersimages/<?php echo $row2['image_url'];  ?>" width="50px" height="50px"><span id = "authorname"><?php echo $row1['username']; ?></span></div>
    <div class="emaildiv"><span class="email"><?php echo $row1['email']; ?></span></div>
    <div class="petid"><span class="material-symbols-outlined">
fingerprint
</span><span class="id"><?php echo $row["pet_id"]; ?></span></div>

    <div class="progress">
		<!-- Progress bar -->
		<div class="progress-bar" id="progress-bar"></div>
	</div>

	<!-- Support and oppose buttons -->
	<div class="buttons">
		<h1>You've already signed this petition</h1>
	</div>

	<!-- Support and oppose counters -->
    <form action="review.php?title=<?php echo $title;  ?>">
	<div class="counters">
		<span id="support-counter">Supporters &nbsp;&nbsp;&nbsp;<?php echo $row['supporters']; ?></span>
		<span id="oppose-counter">Opposers &nbsp;&nbsp;&nbsp;<?php echo $row['opposers']; ?></span>
	</div>
    <div class="remaining"><span id="rem"><?php echo $row['needsup']-($row['supporters']-$row['opposers']) ?></span> are remaining to take this petition <br> to the decision maker.</div>

    </div>
    <div class="desc"><h1>Description</h1><br><p><?php echo $row['pet_desc']; ?></p></div>
    </div>
    </form>
    <div class="reviews">
    <h2>Comments</h2>
<?php
    if($res1->num_rows>0)
    {
      $row = mysqli_fetch_assoc($res1);
      $unserarray = unserialize($row['reviews']);
              foreach($unserarray as $review)
              {
                $sql1 = "SELECT * FROM users WHERE id = '{$review['user_id']}'";
                $res1 = $conn->query($sql1);
                $row1 = mysqli_fetch_assoc($res1);
                $sql2 = "SELECT * FROM user_profile WHERE user_id = '{$review['user_id']}'";
                $res2 = $conn->query($sql2);
                $row2 = mysqli_fetch_assoc($res2);
  ?>
  <div class="comments-container">
    <div class="comments-list">
      <div class="comment">
        <div class="comment-header">
          <div class="user-avatar"><img src="usersimages/<?php echo $row2['image_url']; ?>" width="65px" height="65px" class="userimage"></div>
          <div class="user-info" style="position:relative;left:-25px;">
        
            <span class="user-name"><span style="font-weight: 100;">revivew by</span>&nbsp;<?php echo $row1['username'];  ?></span>
            <span class="comment-date">Jun 2023</span>
          </div>
        </div>
        <div class="comment-content">
          <p><?php echo $review['review'];  ?></p>
        </div>
      </div>
    </div>
  </div>
  <?php
              }
}
?>

    </div>

      <!-- Your footer content here -->
      <footer class = "footer" style="position: relative; bottom:-190px">
        <div class = "container" style="position: relative; left:-80px">
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
      <script>
        // Get the progress bar and counters elements
var progressBar = document.getElementById("progress-bar");
var supportCounter = document.getElementById("support-counter");
var opposeCounter = document.getElementById("oppose-counter");
var remcounter  = document.getElementById("rem");
var supbut = document.getElementById('support-but');
var oppbut = document.getElementById('oppose-but');

// Initialize the progress bar value and counters
var limit=<?php echo $limit; ?>;
var progressValue = <?php echo $progressval; ?>;
var supportCount = <?php echo $supporters; ?>;
var opposeCount = <?php echo $opposers; ?>;
updateProgressBar();

// Function to update the progress bar and counters
function updateProgressBar(value) {
  // If a value is passed, update the progress bar value and counters accordingly
  if (value) {
    progressValue += (value/limit)*100;
    if (value > 0) {
      supportCount++;
      // Send an AJAX request to update supporters in the database
      $.ajax({
        type: "POST",
        url: "update_supporters.php",
        data: { title: '<?php echo $title; ?>' },
        success: function(response) {
          console.log(response); // Print success/error message to the console
        }
      });
      animateCounter(supportCounter, 0, supportCount,supportCount-opposeCount,remcounter);
    } else {
      opposeCount++;
      // Send an AJAX request to update opposers in the database
      $.ajax({
        type: "POST",
        url: "update_opposers.php",
        data: { title: '<?php echo $title; ?>' },
        success: function(response) {
          console.log(response); // Print success/error message to the console
        }
      });
      animateCounter(opposeCounter, 0, opposeCount,supportCount-opposeCount,remcounter);
    }
  }
  // Update the progress bar
  progressBar.style.width = progressValue + "%";
  remcounter.innerHTML = (limit - (supportCount - opposeCount));
}



// Function to animate the counter element with a rolling number animation
function animateCounter(counterElement, fromValue, toValue,supcount,remcounter) {
  let i=0;
  const inc = setInterval(() => {
      i+=1;

      if(i>toValue)
      {
        counterElement.textContent = `${tovalue}`;
        remcounter.textContent = supcount;
        return;
      }
      counterElement.textContent = `${i}`;

    },100);
  }
  supbut.style.cursor="not-allowed";
  oppbut.style.cursor="not-allowed";
      </script>
  </body>
  </html>
  