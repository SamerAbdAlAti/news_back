<?php
include "../all_back/connect.php";


$id_update = postData("id_update");
$title = postData("title");
$descreption = postData("descreption");
$UrlToImage = postData("UrlToImage");
$UrlToVedio = postData("UrlToVedio");
$Date = postData("Date");

$statment_update = $con->prepare("UPDATE `news_all` SET `title`='$title',`descreption`='$descreption',`UrlToImage`='$UrlToImage',`UrlToVedio`='$UrlToVedio',`Date`='$Date' where  news_id=$id_update");

$statment_update->execute();

$count_update = $statment_update->rowCount();

if ($count_update > 0) {

    echo json_encode(array("status" => "sucsess"));
} else {
    echo json_encode(array("status" => "fail"));
}