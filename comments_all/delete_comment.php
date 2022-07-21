<?php
include "../all_back/connect.php";

$comments_id = postData("comment_id");
$news_id = postData("news_id");


$delete_comment = $con->prepare("DELETE FROM `comments_basic` WHERE comments_id=$comments_id AND news_id=$news_id",);

$delete_comment->execute();

$count_delete = $delete_comment->rowCount();

if ($count_delete > 0) {
    echo json_encode(array("status" => "succsess",), JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode(array("status" => "fail", "massege" => "لا يوجد تعليق، تأكد ما إذا ما تم حذفة مسبقاً"), JSON_UNESCAPED_UNICODE);
}





