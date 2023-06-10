<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "revolutiondb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
$title = $_GET['title'];
$sql = "SELECT * FROM petitions WHERE pet_title = '$title'";
$res = $conn->query($sql);
$row = mysqli_fetch_assoc($res);
$review = $_POST['review'];
if ($review == "") {
    echo '<script>alert("Please write the review");</script>';
    echo '<script>window.location.href="petition.php?title=' . $row["pet_title"] . '";</script>';
} else {
    $id = $_SESSION['userid'];
    $sql = "SELECT * FROM reviews WHERE pet_title = '$title'";
    $res = $conn->query($sql);
    $row = mysqli_fetch_assoc($res);
    $reviews = unserialize($row['reviews']);
    foreach ($reviews as &$rev) {
        if (intval($rev["user_id"]) == $_SESSION['userid']) {
            $rev['review'] = $review;
            break;
        }
    }
    $updrev = serialize($reviews);
    $sql = "UPDATE reviews SET reviews = '$updrev' WHERE pet_title = '$title'";
    $res = $conn->query($sql);
    $sql = "UPDATE users SET signed = signed + 1 WHERE id = '$id'";
    $res = $conn->query($sql);
    echo '<script>window.location.href="successreview.php";</script>';
}
?>
