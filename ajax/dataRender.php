<?php


require_once "../DB/Query.php";

    //getting data for DB

$displayFB = new Query(Connection::make());
$data = $displayFB->select();

    //conversion data to JSON format
echo json_encode($data);

