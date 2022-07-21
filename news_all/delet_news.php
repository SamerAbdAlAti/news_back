<?php
include "../all_back/connect.php";

$delete_id = postData("delete_id");
$statment_delete = $con->prepare("DELETE FROM `news_all` WHERE news_id=$delete_id");

$statment_delete->execute();

$count_delete = $statment_delete->rowCount();

if ($count_delete > 0) {
    echo json_encode(array("states" => "succsess"));
} else {
    echo json_encode(array("states" => "fail"));
}
