<?php
include "../all_back/connect.php";

$Comment_id = postData("Comment_id");
$CommentsText = postData("CommentsText");


$statnment_com_update = $con->prepare("UPDATE `comments_basic` SET `CommentsText`='$CommentsText' WHERE comments_id=$Comment_id");

$statnment_com_update->execute();

$count_update=$statnment_com_update->rowCount();

if($count_update>0){
    echo  json_encode(array("status"=>"succsess"));

}else{
    echo json_encode(array("status"=>"fail"));
}


