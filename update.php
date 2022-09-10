<?php

include('db.php');
$request_body = file_get_contents('php://input');
$data = json_decode($request_body, true);


$todo = $data['todo'];

$stmt = $db->prepare('update todo set todo=:todo where id=:id');
$stmt->bindValue(':todo', $todo);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();

?>
