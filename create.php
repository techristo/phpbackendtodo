<?php

include('db.php');

    $request_body = file_get_contents('php://input');
    $data = json_decode($request_body, true);


    $todo = $data['item']; 

$stmt = $db->prepare('INSERT INTO todo (todo) VALUES (:todo)');
$stmt->bindValue(':todo', $todo);
$stmt->execute();

?>