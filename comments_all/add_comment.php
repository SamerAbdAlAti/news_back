<?php
include "../all_back/connect.php";

$news_id = postData("news_id");
$CommentsText = postData("CommentsText");
$Comments_likes=0;

$statment_add_comment = $con->prepare("INSERT INTO `comments_basic`( `CommentsText`, `Comments_likes`, `news_id`) VALUES ('$CommentsText','$Comments_likes','$news_id')");

$statment_add_comment->execute();

$count_add_comment = $statment_add_comment->rowCount();

if ($count_add_comment > 0) {
    echo json_encode(array("status" => "succsess"));
} else {
    echo json_encode(array("status" => "fail"));
}