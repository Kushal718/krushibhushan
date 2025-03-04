
<?php
//$id = $_REQUEST['id'];
$product_id = $_REQUEST['product_id'];
include '../inc/database.php';
include 'functions.php';
$db = new Database();



//print_r($_POST);
$delete = $db->delete("products", ['product_id' => $product_id]);
if ($delete) {
   echo alert('Successful', 'Product Deleted!', true);
   echo "<script>window.location='products.php';</script>";
} else {
   echo alert('Oops!', 'Fail to Delete Product!', false);
   echo "<script>window.location='products.php';</script>";
   echo $db->error();
}

?>


