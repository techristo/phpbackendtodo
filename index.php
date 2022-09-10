<?php
include('db.php');


$results = $db->query('SELECT * FROM todo');
$data = array();
while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
  array_push($data, $row);
}
echo json_encode($data);

?>

