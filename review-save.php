<?php
session_start();
//echo $user_id=$_SESSION['user']['user_id'];
include '../inc/database.php';
include 'functions.php';
//include '../sms.php';
$db = new Database();
$name = $_POST['fname'];
$title = $_POST['title'];

$description = $_POST['description'];
$link = $_POST['link'];
$state = $_POST['state'];
$district = $_POST['district'];
$taluka = $_POST['taluka'];
$village = $_POST['village'];


//print_r($security_key);
$review = $db->insert("farmer_review", ['farmer_name' => $name,  'title' => $title, 'description' => $description, 'link' => $link, 'state' => $state, 'district' => $district, 'taluka' => $taluka, 'village' => $village,]);
if ($review) {
    echo alert('Successful', 'User Added!', true);
    echo "<script>window.location='review.php';</script>";
} else {
    echo alert('Oops', 'Error While Adding User!', false);
    echo "<script>window.location='add-review.php';</script>";
//    print_r($db->error());
}
