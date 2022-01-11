<?php


require_once "../DB/Query.php";


$data = ['email' => $_POST['email'],
'name' => $_POST['name'],
'phone' => $_POST['phone'],
'message' => $_POST['message'],];

$result = new Query(Connection::make());
$result->insert($data);


if ($result == true)
{
echo 'Thank you, feedback saved';
}

else {
    echo 'Error, repeat again';
}
