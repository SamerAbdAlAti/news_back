<?php
include "../all_back/connect.php";

$comment_statuse = postData("comment_statuse");

if ($comment_statuse == "*") {

    $news_id = postData("news_id");

    $show_comment = $con->prepare("SELECT * FROM `comments_basic` WHERE news_id=$news_id");


} else if ($comment_statuse == "id") {

    $comments_id = postData("comments_id");

    $show_comment = $con->prepare("SELECT * FROM `comments_basic` WHERE comments_id=$comments_id");

}


$show_comment->execute();

$count_comment = $show_comment->execute();

$comments_result = $show_comment->fetchAll(PDO::FETCH_ASSOC);


if ($count_comment > 0) {
    echo json_encode(array("status" => "succsess", $comments_result), JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode(array("status" => "fail"));
}
