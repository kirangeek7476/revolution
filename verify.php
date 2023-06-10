<?php
$conn=new mysqli("localhost","root","","revolutiondb");
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$user=$_POST['username'];
$pass=$_POST['pswd'];
$sql="SELECT * FROM users WHERE username='$user' AND password='$pass'";
$res=mysqli_query($conn,$sql);
if($res->num_rows>0)
{
    $row = mysqli_fetch_assoc($res);
    session_start();
    $_SESSION['userid']=$row['id'];
    $_SESSION['username']=$row['username'];
    echo '<script>alert("Hello '.$_SESSION['username'].'");
            window.location.href="webpage2.php";</script>';

}
else
{  
    echo '<script>alert("Username or Password is invalid");
    window.location.href="index.php.php";</script>';
}
$conn->close();
?>