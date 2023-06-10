<?php
    require_once 'mainpageconnec.php';
    session_start();
    $id = $_SESSION['userid'];
    $sql = "SELECT * FROM user_profile WHERE user_id = '$id';";
    $res = $conn->query($sql);
    if ($res->num_rows == 0)
    {
      echo '<script>window.location.href="usernotallowed.php";</script>';
    }
    $sql = "SELECT * FROM users WHERE id = '$id';";
    $res = $conn->query($sql);
    $row = $res->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel = "stylesheet" type = "text/css" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="icon" href="revicon.ico" type="image/icon type">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <title>Revolution</title>
    <link rel="stylesheet" href="csshf.css">
    <script src="https://smtpjs.com/v3/smtp.js"></script>
  <script>
    function emailfun() {
      var userName = "<?php echo $id; ?>";
      var petitionTitle = document.getElementById("QuestionnaireForm_title").value;
      var petitionDescription = document.getElementById("textarea1").value;
      var petitionCategory = document.getElementById("type").value;
      var signatureGoal = document.getElementById("count").value;
      var gmail = "<?php echo $row['email']; ?>";
      var body = `Subject: Petition Published Successfully\n\n` +
      `Dear ${userName},\n\n` +
      `Thank you for publishing your petition on our website. We are pleased to inform you that your petition titled "${petitionTitle}" has been successfully published and is now live on our platform.\n\n` +
      `Petition Details:\n` +
      `Title: ${petitionTitle}\n` +
      `Description: ${petitionDescription}\n` + '<br/><br/>' +
      `Category: ${petitionCategory}\n` +
      `Signature Goal: ${signatureGoal}\n` +
      `Thank you once again for using our platform to raise awareness about important issues and make a difference in the world.\n\n` +
      `Remember: "Your world might change the world"\n\n` +
      `Best regards,\n` +
      `revolution.org Team`;
      Email.send({
        SecureToken: "9941271c-f457-48f5-bfb7-43129cf5d635",
        To: gmail,
        From: "revolution.org080631@gmail.com",
        Subject: "Petition Published Successfully!",
        Body: body
      }).then(
        message => alert("Sent")
      );
      
    }
  </script>
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
   
    <form action="startapetitiondb.php" method="post" enctype="multipart/form-data">                                                                       <!-- form filling -->
    <div id="content" >

<div id="createpet">

<div class="headline-wrapper">
  <h1>Create a petition</h1>
          <div class="headline">
        <p>Create a powerful online petition in just minutes. Our system is flexible, customizable, and
          easy to use. Best of all, it's free!</p>
        <p>Start by filling out this form, and in a few minutes you'll be ready to collect thousands of
          signatures.</p>
      </div>
    </div>
    <!-- PETITION TITLE-->
        <section class="pet_title">
  
            <label for="QuestionnaireForm_title" class="required" style="font-weight: bold; font-size: 25px;">Petition Title <span class="required">*</span></label>          <p style="font-size: 15px;">Something catchy and not too long</p>
          <div>
              <input name="title" id="QuestionnaireForm_title" type="text" style="width: 580px;background:#fff;  box-shadow: -3px -3px 7px rgba(94, 104, 121, 0.377),3px 3px 7px rgba(94, 104, 121, 0.377);" maxlength="300" class="pettit"/>

            <div class="errorMessage" id="QuestionnaireForm_title_em_" style="display:none">
            </div>
                  </div>
          </section>
    <!-- TEXT EDITOR-->
      <section class="texteditor" style="position: relative;top:25px;">
        <label for="QuestionnaireForm_body" class="required" style="font-weight: bold; font-size: 25px;">Petition text <span class="required">*</span></label>          <p>Don't worry if you don't have final text ready now. You can always fine tune it late.</p>
        <div class="row">
            <div class="col">
                <div class="first box">
                    <input id="font-size" type="number" value="16" min="1" max="100" onchange="f1(this)">
                </div>
                <div class="second box">
                    <button type="button" onclick="f2(this)">
                        <i class="fa-solid fa-bold"></i>
                    </button>
                    <button type="button" onclick="f3(this)">
                        <i class="fa-solid fa-italic"></i>
                    </button>
                    <button type="button" onclick="f4(this)">
                        <i class="fa-solid fa-underline"></i>
                    </button>
                </div>
                <div class="third box">
                    <button type="button" onclick="f5(this)">
                        <i class="fa-solid fa-align-left"></i>
                    </button>
                    <button type="button" onclick="f6(this)">
                        <i class="fa-solid fa-align-center"></i>
                    </button>
                    <button type="button" onclick="f7(this)">
                        <i class="fa-solid fa-align-right"></i>
                    </button>
                </div>
                <div class="fourth box">
                    <button type="button" onclick="f8(this)">aA</button>
                    <button type="button" onclick="f9()">
                        <i class="fa-solid fa-text-slash"></i>
                    </button>
                    <input type="color" onchange="f10(this)">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <textarea id="textarea1" placeholder="Your text here " name="pet_desc"></textarea>
            </div>
            <div>
              <input id="count" placeholder="how many supporters you need ?" type="text" class="count" name="need">
            </div>
            <div class="typediv">
              <input type="radio" id="type" name="type" class="type" value="Education">Education
              <input type="radio" id="type" name="type" class="type" value="Environment">Environment
              <input type="radio" id="type" name="type" class="type" value="Health">Health
              <input type="radio" id="type" name="type" class="type" value="Human Rights">Human Rights <br><br>
              <input type="radio" id="type" name="type" class="type" value="child Rights">Child Rights
              <input type="radio" id="type" name="type" class="type" value="Animal Rights">Animal Rights
              <input type="radio" id="type" name="type" class="type" value="Sports">Sports
              <input type="radio" id="type" name="type" class="type" value="Technology">Technology
              <input type="radio" id="type" name="type" class="type" value="Entertainment">Entertainment
              <br><br>
              <input type="radio" id="type" name="type" class="type" value="Sports">Other

            </div>
        </div>
    </section>
        <script >
            const textarea = document.getElementById("textarea1");
            function f1(e) {
                let value = e.value;
                textarea.style.fontSize = value + "px";
            }
            function f2(e) {
                if (textarea.style.fontWeight == "bold") {
                    textarea.style.fontWeight = "normal";
                    e.classList.remove("active");
                }
                else {
                    textarea.style.fontWeight = "bold";
                    e.classList.add("active");
                }
            }
            function f3(e) {
                if (textarea.style.fontStyle == "italic") {
                    textarea.style.fontStyle = "normal";
                    e.classList.remove("active");
                }
                else {
                    textarea.style.fontStyle = "italic";
                    e.classList.add("active");
                }
            }
            function f4(e) {
                if (textarea.style.textDecoration == "underline") {
                    textarea.style.textDecoration = "none";
                    e.classList.remove("active");
                }
                else {
                    textarea.style.textDecoration = "underline";
                    e.classList.add("active");
                }
            }
            function f5(e) {
                textarea.style.textAlign = "left";
            }
            function f6(e) {
                textarea.style.textAlign = "center";
            }
            function f7(e) {
                textarea.style.textAlign = "right";
            }
            function f8(e) {
                if (textarea.style.textTransform == "uppercase") {
                    textarea.style.textTransform = "none";
                    e.classList.remove("active");
                }
                else {
                    textarea.style.textTransform = "uppercase";
                    e.classList.add("active");
                }
            }
            function f9() {
                textarea.style.fontWeight = "normal";
                textarea.style.textAlign = "left";
                textarea.style.fontStyle = "normal";
                textarea.style.textTransform = "capitalize";
                textarea.value = "";
            }
            function f10(e) {
                let value = e.value;
                textarea.style.color = value;
            }
            window.addEventListener('load', () => {
                textarea.value = "";
            });
        </script>
        <!--IMAGE-->
       <section class="petimage">
        <label for="file_upload" style="font-weight: bold; font-size: 25px;">Featured Image</label>
        <div class="center">
          <div class="form-input">
            <div class="preview">
              <img id="file-ip-1-preview">
            </div>
            <label for="file-ip-1">Upload Image</label>
            <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);" name="image">
            
          </div>
          <div class='upload_image_error'></div>

        <small class="desc">The image should be at least 500px wide and 300px high and a maximum
          size of 10MB.</small>
        </div>
        </div> 
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
      </section>
      <br>

  <section class="submit_btn_buttons_blue">
    <!--input id="js-submit-petition-delayed-image" type="button" name="yt0" value="PUBLISH PETITION"-->
    <button id="js-submit-petition-delayed-image" name="submit" type="submit" onclick="emailfun()">PUBLISH PETITION</button>
    <div id="petition-creation" style="display:none;"></div>
  </section>

       </div>
      </div>

    </form>
    <div class="captcha-container">
  <div class="captcha"></div>
  <input type="text" placeholder="Press Enter" id="captcha-input">
  <span class="captcha-validation"></span>
</div>
  
      
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
        <script>
          const sub = document.getElementById('js-submit-petition-delayed-image');
          sub.disabled=true;
          var navbar = document.getElementById('nb');
          var nbl = document.getElementById('nbl');
          window.onscroll=function(){
            if(window.pageYOffset >= nbl.offsetTop){
              navbar.classList.add("sticky");
            }
            else{
              navbar.classList.remove('"sticky"');
            }
          }
          document.addEventListener("DOMContentLoaded", function() {
  // Generate captcha
  let captcha = generateCaptcha();
  let captchaElement = document.querySelector(".captcha");
  captchaElement.innerHTML = captcha;

  // Handle enter key press
  let inputElement = document.querySelector("#captcha-input");
  inputElement.addEventListener("keyup", function(event) {
    if (event.key === "Enter") {
      validateCaptcha();
    }
  });

  function generateCaptcha() {
    let charsArray = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    let length = 6;
    let captcha = "";
    for (let i = 0; i < length; i++) {
      let index = Math.floor(Math.random() * charsArray.length);
      captcha += charsArray[index];
    }
    return captcha;
  }

  function validateCaptcha() {
    let enteredCaptcha = inputElement.value;
    if (enteredCaptcha === captcha) {
      let validationElement = document.querySelector(".captcha-validation");
      validationElement.innerHTML = "✓";
      validationElement.style.color = "green";
      sub.disabled=false;
      sub.style.opacity= '1';
      sub.style.cursor = 'pointer';

    } else {
      captcha = generateCaptcha();
      captchaElement.innerHTML = captcha;
      inputElement.value = "";
      inputElement.focus();
    }
  }
});

        </script>  
        <script src="script1.js"></script>
  </html>
  