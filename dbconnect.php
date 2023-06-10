<?php
$conn= new mysqli("localhost","root","","revolutiondb");
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$user=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['pswd'];
$cnfpass=$_POST['cnfpswd'];
$sql="SELECT * FROM users WHERE username='$user'";
$sqlemail="SELECT * FROM users WHERE email='$email'";
$res=mysqli_query($conn,$sql);
$resemail=mysqli_query($conn,$sqlemail);
if($res->num_rows>0)
{
    echo '<script>alert("Username already existing");
    window.location.href="register.php";</script>';
}
else if($resemail->num_rows>0)
{
    echo '<script>alert("Email already existing");
    window.location.href="register.php";</script>';
}
else
{
    if ($pass == $cnfpass)
    {
      $sql="INSERT INTO users(username,email,password) VALUES('$user','$email','$pass')";
      $res=mysqli_query($conn,$sql);
      if($res)
    {
        echo '<script>alert("Successfully Registered");
        window.location.href="index.php";</script>';
    }
    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    } 
    else
    {
        echo '<script>alert("password and the confirm password should be same");
        window.location.href="register.php";</script>';
        
    
    }
    $conn->close();
}
?>