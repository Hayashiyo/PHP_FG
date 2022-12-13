<?php

include_once "base.php";
if($_FILES['file_name']['error']==0){
    $file_str_arry=explode(".",$_FILES['file_name']['name']);
    $sub=array_pop($file_str_arry);
    $file_name=date("YMDhis").".".$sub;

// move_uploaded_file($_FILES['file_name']['tmp_name'],"../upload/".$_FILES['file_name']['name']);
move_uploaded_file($_FILES['file_name']['tmp_name'],"../upload/".$file_name);
// $discription=$post['discription'];
insert('upload',['discription'=>$_POST['discription']
,'size'=>$_FILES['file_name']['size']
,'type'=>$_FILES['file_name']['type']
,'file_name'=>$file_name
]);

header('location:../upload.php?upload=success');
}else{
echo "fail";
}



?>