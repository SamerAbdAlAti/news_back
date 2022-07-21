<?php
include "../all_back/connect.php";

$title = postData("title");
$descreption = postData("descreption");
$UrlToImage = postData("UrlToImage");
$UrlToVedio = postData("UrlToVedio");
$TheNumOfLikes = 0;
$Date = postData("Date");

$statment = $con->prepare("INSERT INTO `news_all`(`title`, `descreption`, `UrlToImage`, `UrlToVedio`, `TheNumOfLikes`, `Date`) VALUES ('$title','$descreption','$UrlToImage','$UrlToVedio','$TheNumOfLikes','$Date')");
$statment->execute();
$add_count = $statment->rowCount();
if ($add_count > 0) {
    echo json_encode(array("status" => "succsess"));
} else {
    echo json_encode(array("status" => "fail"));
}






