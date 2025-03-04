<?php

include '../inc/database.php';
$db=new Database();
$data=$db->select('admin','*',['OR'=>['id'=>1,'name'=>'abc']]);
echo $db->last_query();
foreach($data as $admin){
    

}