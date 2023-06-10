<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Revolution | Register</title>
  <link rel="stylesheet" href="register.css">
  <link rel="icon" href="revicon.ico" type="image/icon type">
  <script src="https://smtpjs.com/v3/smtp.js"></script>
  <script>
    function emailfun() {
      var gmail = document.getElementById('email').value;
      var name = document.getElementById('name').value;
        var body = 'Dear ' + name + ',\n\n';
        body += 'Welcome to revolution.org, the platform that empowers you to make a difference!\n\n';
        body += 'Thank you for joining our petition website. Your support and participation are invaluable.\n\n';
        body += 'As a registered user, you now have access to various features and benefits:\n';
        body += '- Sign and support petitions that align with your interests\n';
        body += '- Create and promote your own petitions\n';
        body += '- Connect with like-minded individuals\n';
        body += '- Stay updated on the latest developments and campaigns\n\n';
        body += 'Together, let\'s create positive change and shape a better future!\n\n';
        body += 'Best regards,\n';
        body += 'The revolution.org Team';
     
      Email.send({
        SecureToken: "9941271c-f457-48f5-bfb7-43129cf5d635",
        To: gmail,
        From: "revolution.org080631@gmail.com",
        Subject: "Welcome to revolution.org!",
        Body: body
      }).then(
        message => alert()
      );
    }
  </script>
</head>
<body>
  <form action="dbconnect.php" method="post">
    <h1 class="title">revolution.org<br><span class="desc">change the world</span></h1>
    <div class="lbox">
      <div class="form">
        <h2>register</h2>
        <div class="inputbox">
          <input type="text" required="required" name="username" id="name">
          <span>username</span>
          <i></i>
        </div>
        <div class="inputbox">
          <input type="email" required="required" name="email" id="email">
          <span>email</span>
          <i></i>
        </div>
        <div class="inputbox">
          <input type="password" required="required" name="pswd">
          <span>password</span>
          <i></i>
        </div>
        <div class="inputbox">
          <input type="password" required="required" name="cnfpswd">
          <span>confirm password</span>
          <i></i>
        </div>
        <input type="submit" value="sign up" onclick="emailfun()">
        <div class="links">
          <span>already registered</span>
          <a href="index.php">login</a>
        </div>
      </div>
    </div>
  </form>
</body>
</html>
