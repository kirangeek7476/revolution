<?php
// Set up database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "revolutiondb";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['submit']) && isset($_FILES['image']) )
{
  session_start();
  include "imagedb.php";
  $id = $_SESSION['userid'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $about = $_POST['about'];
  $country = $_POST['country'];
  $city = $_POST['city'];
  $twitter = $_POST['twitter'];
  $phno = $_POST['phno'];
  $image_name = $_FILES['image']['name'];
  $image_size = $_FILES['image']['size'];
  $tmp_name   = $_FILES['image']['tmp_name'];
  $error      =    $_FILES['image']['error'];
  if($error === 0)
  {
      if($image_size > 125000)
      {
        $em = "Sorry, your file is too large.";
        header("Location: myprofileform.php?error=$em");
      }
      else
      {
        $img_ex = pathinfo($image_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $allowed_exs = array("jpg","jpeg","png");
        if(in_array($img_ex_lc, $allowed_exs))
        {
            $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
            $img_upload_path = 'usersimages/'.$new_img_name;
            move_uploaded_file($tmp_name,$img_upload_path);
            //insert into database
            $sql = "SELECT * FROM user_profile WHERE user_id = '$id'";
            $res = $conn->query($sql);
            if($res->num_rows>0)
            {
              $sql = "UPDATE user_profile SET fname='$fname', lname='$lname', about='$about', country='$country', city='$city', twitter='$twitter', phn_no='$phno', image_url='$new_img_name' WHERE user_id='$id'";
            }
            else
            {
              $sql = "INSERT INTO user_profile(user_id,fname, lname, about, country, city, twitter, phn_no, image_url) VALUES ('$id','$fname', '$lname', '$about', '$country','$city','$twitter', '$phno', '$new_img_name')";
            }
            
            if (mysqli_query($conn, $sql)) {
              echo 'Data inserted successfully.';
              header("Location: profileupdated.php");
            } else {
              echo 'Error inserting data: ' . mysqli_error($conn);
            }
          }
        else{
          $em = 'Only image files please!';
          header("Location:startpetition1.php?error=$em");
        }
      }
  }
  else
  {
    $em = 'uknown error occred!';
    header("Location:startpetition1.php?error=$em");
  }

}
else
{
  echo 'hello';
  echo isset($_POST['submit']);
  echo isset($_FILES['image']);
}
?>
