<?php

include('db.php');


$stmt = $db->prepare('update todo set todo=:todo where id=:id');
$stmt->bindValue(':todo', $_POST['todo']);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();

?>