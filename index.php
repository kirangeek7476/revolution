<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Revolution | Login</title>
  <link rel="stylesheet" href="login.css">
  <link rel="icon" href="revicon.ico" type="image/icon type">
</head>
<body>
  <h1 class="title">revolution.org<br><span class="desc">change the world</span></h1>
  <form action="verify.php" method="post">
    <div class="lbox">
      <div class="form">
        <h2>login</h2>
        <div class="inputbox">
          <input type="text" required="required" name="username">
          <span>username</span>
          <i></i>
        </div>
        <div class="inputbox">
          <input type="password" required="required" name="pswd">
          <span>password</span>
          <i></i>
        </div>
        <input type="submit" value="sign in">
        <div class="links">
          <span>not registered</span>
          <a href="register.php">register</a>
        </div>
      </div>
  
    </div>
  </form>
  
  
</body>
</html>