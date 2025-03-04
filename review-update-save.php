
<?php
$id = $_REQUEST['id'];
include '../inc/database.php';
include 'functions.php';
$db = new Database();
$name = $_POST['fname'];
$title = $_POST['title'];
$description = $_POST['description'];
$link = $_POST["link"];
$state = $_POST['state'];
$district = $_POST['district'];
$taluka = $_POST['taluka'];
$village = $_POST['village'];



$review = $db->update("farmer_review", ['farmer_name' => $name, 'title' => $title, 'description' => $description, 'link' => $link, 'state' => $state, 'district' => $district, 'taluka' => $taluka, 'village' => $village], ['review_id' => $id]);
if ($review) {
   echo alert('Successful', 'User Information Updated!', true);
   echo "<script>window.location='review.php';</script>";
} else {
   echo alert('Oops!', 'Fail to Update User Information!', false);
   echo "<script>window.history.back();</script>";
  // print_r( $db->error());
}

?>


