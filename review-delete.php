<html>
<?php
$id = $_REQUEST['id'];
include '../inc/database.php';
include 'functions.php';
$db = new Database();


$delete = $db->delete("farmer_review", ['review_id' => $id]);
if ($delete) {
   echo alert('Successful', 'Review Deleted!', true);
   echo "<script>window.location='review.php';</script>";
} else {
   echo alert('Oops!', 'Fail to Delete Review!', false);
   echo "<script>window.location='review-update-save.php';</script>";
   echo $db->error();
}

?>
</html>

