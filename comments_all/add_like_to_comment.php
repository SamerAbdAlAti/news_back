<?php
include "../all_back/connect.php";

$like_numper = postData("like_numper");
$comments_id = postData("comments_id");
$news_id = postData("news_id");

$statment_add_like_to_news = $con->prepare("UPDATE `comments_basic` SET `Comments_likes`='$like_numper' WHERE comments_id=$comments_id AND news_id=$news_id ");

$statment_add_like_to_news->execute();

$count_statment_add_like_to_news = $statment_add_like_to_news->rowCount();


if ($count_statment_add_like_to_news > 0) {
    echo json_encode(array("states" => "succsess"));
} else {
    echo json_encode(array("states" => "fail"));
}




