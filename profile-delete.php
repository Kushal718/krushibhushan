
<?php
$id = $_REQUEST['id'];
include '../inc/database.php';
include 'functions.php';
$db = new Database();


$delete = $db->delete("emp_photos", ['photo_id' => $id]);
if ($delete) {
   echo alert('Successful', 'Review Deleted!', true);
   echo "<script>window.location='emp-profile.php';</script>";
} else {
   echo alert('Oops!', 'Fail to Delete Review!', false);
   echo "<script>window.location='emp-profile.php.php';</script>";
   echo $db->error();
}

?>


