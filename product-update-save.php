
<?php
session_start();
//echo $user_id=$_SESSION['user']['user_id'];
include '../inc/database.php';
include 'functions.php';
//include '../sms.php';
$size1=$_FILES['product_photo1']['size'];
$size2=$_FILES['product_photo3']['size'];
$size3=$_FILES['product_photo3']['size'];
$size4=$_FILES['product_photo4']['size'];
if($size1<500000 && $size2<500000 && $size3 < 500000 && $size4< 500000 )
{
$db = new Database();
$product_id = $_REQUEST['product_id'];
$product_name=ucwords($_POST['product_name']);
$product_type=$_POST['product_type'];
$product_packaging = $_POST['product_packaging'];
$product_contents= $_POST['product_contents'];
$product_uses= $_POST['product_uses'];
$product_doses= $_POST['product_doses'];
$product_description= $_POST['product_description'];

$data=['product_name' => $product_name, 'product_type' => $product_type, 'product_packaging' => $product_packaging, 'product_contents' => $product_contents, 'product_uses' => $product_uses, 'product_doses' => $product_doses, 'product_description' => $product_description];

$product_photo1= $_FILES['product_photo1'];
$product_photo2= $_FILES['product_photo2'];
$product_photo3= $_FILES['product_photo3'];
$product_photo4= $_FILES['product_photo4'];
$product_photo5= $_FILES['product_photo5'];



$file_name1=$product_photo1['name'];
$file_name2=$product_photo2['name'];
$file_name3=$product_photo3['name'];
$file_name4=$product_photo4['name'];
$file_name5=$product_photo5['name'];


/*$file_path2=$product_photo2['tmp_name'];
$file_path3=$product_photo3['tmp_name'];
$file_path4=$product_photo4['tmp_name'];
$file_path5=$product_photo5['tmp_name'];
*/
if($file_name1!="")
{
    $file_path1=$product_photo1['tmp_name'];
    $dest1='uploads/products/'.$file_name1;
    move_uploaded_file($file_path1,  "../".$dest1);
    $data['product_photo1']=$dest1;
}
if($file_name2!="")
{
    $file_path2=$product_photo2['tmp_name'];
    $dest2='uploads/products/'.$file_name2;
    move_uploaded_file($file_path2, "../".$dest2);
    $data['product_photo2']=$dest2;
}
if($file_name3!="")
{
    $file_path3=$product_photo3['tmp_name'];
    $dest3='uploads/products/'.$file_name3;
    move_uploaded_file($file_path3, "../". $dest3);
    $data['product_photo3']=$dest3;
}
if($file_name4!="")
{
    $file_path4=$product_photo4['tmp_name'];
    $dest4='uploads/products/'.$file_name4;
    move_uploaded_file($file_path4,  "../".$dest4);
    $data['product_photo4']=$dest4;
}
if($file_name5!="")
{
    $file_path5=$product_photo5['tmp_name'];
    $dest5='uploads/products/'.$file_name5;
    move_uploaded_file($file_path5,  "../".$dest5);
    $data['product_photo5']=$dest5;
}



/*$dest2='../uploads/products/'.$file_name2;
move_uploaded_file($file_path2, $dest2);

$dest3='../uploads/products/'.$file_name3;
move_uploaded_file($file_path3, $dest3);

$dest4='../uploads/products/'.$file_name4;
move_uploaded_file($file_path4, $dest4);

$dest5='../uploads/products/'.$file_name5;
move_uploaded_file($file_path5, $dest5);*/

//print_r($security_key);
$products = $db->update("products",$data ,['product_id' => $product_id]);
if ($products) {
    echo alert('Successful', 'Product Updated!', true);
    echo "<script>window.location='products.php';</script>";
}
else {
    echo alert('Oops', 'Error While Updating Product!', false);
    echo "<script>window.location='product-update.php';</script>";
//    print_r($db->error());
}
}
else{
     echo alert('Oops',' Photo size is greater than 500kb !', false);
   echo "<script>window.location='product-update.php';</script>";

}

?>