<?php
  // Include database configuration file
  require_once 'mainpageconnec.php';

  // Get petition title and increment supporters count
  session_start();
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $sql = "SELECT * FROM petitions WHERE pet_title = '$title'";
  $res = $conn->query($sql);
  $row = mysqli_fetch_assoc($res);
  $review = $_POST['review'];
  if ($review == "") {
    echo '<script>alert("Please write the review");</script>';
    echo '<script>window.location.href="petition.php?title=' . $row["pet_title"] . '";</script>';
}

  // Check if there is a row for the specified title
  $sql1 = "SELECT * FROM reviews WHERE pet_title='$title'";
  $res1 = $conn->query($sql1);
  
  if ($res1->num_rows > 0) {
    // Update existing reviews
    $row1 = mysqli_fetch_assoc($res1);
    $existing_reviews = unserialize($row1['reviews']);
    $new_review = array("user_id" => $_SESSION['userid'], "review" => "Average experience");
    array_push($existing_reviews, $new_review);
    $updated_reviews = serialize($existing_reviews);
    $sql = "UPDATE reviews SET reviews = '$updated_reviews' WHERE pet_title = '$title'";
    $res = $conn->query($sql);
  } else {
    // Insert new reviews
    $new_review = array(array("user_id" => $_SESSION['userid'], "review" => "Average experience"));
    $updated_reviews = serialize($new_review);
    $sql = "INSERT INTO reviews (pet_title, reviews) VALUES ('$title', '$updated_reviews')";
    $res = $conn->query($sql);
  }
  // Increment supporters count and update progress
  $sql = "UPDATE petitions SET opposers = opposers + 1 WHERE pet_title = '$title'";
  $res = $conn->query($sql);
  
  $sql3 = "UPDATE petitions SET progressval = progressval - (1 / needsup) * 100 WHERE pet_title = '$title'";
  $res3 = $conn->query($sql3);
  
  // Return success or error message
  if ($res && $res3) {
    echo "Supporters updated successfully.";
  } else {
    echo "Error updating supporters: " . $conn->error;
  }
?>
