<?php
include "../all_back/connect.php";

$status_show = getData("status_show");


if ($status_show == "*") {
    global $staatment_show;
    $staatment_show = $con->prepare("SELECT * FROM `news_all`");
} else if ($status_show = "id") {
    global $staatment_show;
    $id_show = getData("id_show");
    $staatment_show = $con->prepare("SELECT * FROM `news_all` where news_id=$id_show");
}

//$staatment_show = $con->prepare("SELECT * FROM `news_all`");

$staatment_show->execute();
$result_show = $staatment_show->fetchAll(PDO::FETCH_ASSOC);

$count_show = $staatment_show->rowCount();

if ($count_show > 0) {
    echo json_encode(array("status" => "succsess", $result_show),JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode(array("status" => "fail"));
}
