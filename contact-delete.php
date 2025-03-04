<html>
<?php
$id = $_REQUEST['id'];
include '../inc/database.php';
include 'functions.php';
$db = new Database();


$delete = $db->delete("contact_us", ['id' => $id]);
if ($delete) {
   echo alert('Successful', 'Review Deleted!', true);
   echo "<script>window.location='contact-list.php';</script>";
} else {
   echo alert('Oops!', 'Fail to Delete Review!', false);
   echo "<script>window.location='contact-list.php';</script>";
   echo $db->error();
}

?>
</html>

