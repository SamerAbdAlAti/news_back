<?php
include "connect.php";

$stmt=$con->prepare("INSERT INTO `news_all`( `title`, `descreption`, `UrlToImage`, `UrlToVedio`, `TheNumOfLikes`, `Date`) VALUES ('[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')");


$stmt->execute();

$count=$stmt->rowCount();

if ($count>0){echo json_encode(array("statuse"=>"succsess"));}else{echo json_encode(array("statuse"=>"fail"));}