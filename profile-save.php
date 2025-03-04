<?php
session_start();
//echo $user_id=$_SESSION['user']['user_id'];
include '../inc/database.php';
include 'functions.php';

//include '../sms.php';
//print_r($_FILES);
$size=$_FILES['photo']['size'];
if($size<500000)
{
$db = new Database();
$name=$_POST['name'];

$post = $_POST['post'];
$profile= $_FILES['photo'];

$file_name=$profile['name'];

$file_path=$profile['tmp_name'];
$dest='uploads/profile/'.$file_name;

move_uploaded_file($file_path,  "../".$dest);


/*$source_img =$file_path ;
$destination_img = "../".$dest;

compress($source_img, $destination_img, 70);
function compress($source, $destination, $quality) {

    $info = getimagesize($source);

    if ($info['mime'] == 'image/jpeg') 
        $image = imagecreatefromjpeg($source);

    elseif ($info['mime'] == 'image/gif') 
        $image = imagecreatefromgif($source);

    elseif ($info['mime'] == 'image/png') 
        $image = imagecreatefrompng($source);

    imagejpeg($image, $destination, $quality);

    return $destination;
}
*/





//print_r($security_key);
$emp = $db->insert("emp_photos",['photo' => $dest, 'name' => $name, 'post' => $post]);
if ($emp) {
    echo alert('Successful', 'Profile Added!', true);
   echo "<script>window.location='emp-profile.php';</script>";
} else {
    echo alert('Oops', 'Error While Adding Profile!', false);
    echo "<script>window.location='emp-profile.php';</script>";
//    print_r($db->error());
    
}
}
else{
     echo alert('Oops',' Photo size is greater than 500kb !', false);
   echo "<script>window.location='add-profile.php';</script>";

}
    
?>