<?php

include('db.php');


$stmt = $db->prepare('delete from todo where id=:id');
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();

?>