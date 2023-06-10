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
  echo '<pre>';
  print_r($_FILES['image']);
  echo '</pre>';
  $id = $_SESSION['userid'];
  $petition_title = $_POST['title'];
  $description = $_POST['pet_desc'];
  $description = preg_replace('/[^a-zA-Z0-9\-]/', '', $description);
  $supporters = 0;
  $opposers = 0;
  $needsup = $_POST['need'];
  $progressval = $supporters-$opposers;
  if(isset($_POST['type']))
  {
    if($_POST['type']==='Environment')
            $typeid=11;
    else if($_POST['type']==='Education')
            $typeid=12;
    else if($_POST['type']==='Health')
            $typeid=13;
    else if($_POST['type']==='Human Rights')
            $typeid=14;
    else if($_POST['type']==='Child Rights')
            $typeid=15;
    else if($_POST['type']==='Animal Rights')
            $typeid=16;
    else if($_POST['type']==='Sports')
            $typeid=17;
    else if($_POST['type']==='Technology')
            $typeid=18;
    else if($_POST['type']==='Entertainment')
            $typeid=19;
    else if($_POST['type']==='Other')
            $typeid=20;
  }
  else
  {
    echo 'please select the equired field';
  }
  // Prepare the SQL query string

// Execute the SQL query using mysqli_query()

  
  $image_name = $_FILES['image']['name'];
  $image_size = $_FILES['image']['size'];
  $tmp_name   = $_FILES['image']['tmp_name'];
  $error      =    $_FILES['image']['error'];
  if($error === 0)
  {
      if($image_size > 125000)
      {
        $em = "Sorry, your file is too large.";
        header("Location: startpetition1.php?error=$em");
      }
      else
      {
        $img_ex = pathinfo($image_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $allowed_exs = array("jpg","jpeg","png");
        if(in_array($img_ex_lc, $allowed_exs))
        {
            $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
            $img_upload_path = 'petitionsupload/'.$new_img_name;
            move_uploaded_file($tmp_name,$img_upload_path);
            //insert into database
            $sql = "UPDATE users SET started = started + 1 where id = '$id'";
            $res = $conn->query($sql);
            $sql = "INSERT INTO petitions(userid, pet_title, typeid, pet_desc, supporters, opposers, progressval, needsup, image_url) VALUES ('$id', '$petition_title', '$typeid', '$description', '$supporters','$opposers','$progressval', '$needsup', '$new_img_name')";
            if (mysqli_query($conn, $sql)) {
              echo 'Data inserted successfully.';
              header("Location: successtarted.php");
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
  header("Location: startpetition1.php");
}
?>
