<?php
session_start();
include '../inc/database.php';
include 'functions.php';

$db = new Database();

$title=$_REQUEST['title'];
$subtitle=$_REQUEST['subtitle'];


$slide = $_FILES['slide']['name'];
if ($_FILES['slide']['name'] != '') {
    $uploads = "uploads/slide/" . $slide;
    move_uploaded_file($_FILES['slide']['tmp_name'], "../".$uploads);
}




$slide_data = $db->insert("slides", ['image' => $uploads,'title'=>$title,'subtitle'=>$subtitle]);

if ($slide_data) {
    echo alert('Successful', 'Slide Added!', true);
    echo "<script>window.location='slides.php';</script>";
} else {
    echo alert('Oops', 'Error While Adding Slide!', false);
    echo "window.location='slides.php';</script>";
}
