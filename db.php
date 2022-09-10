<?php
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open(':memory:');
    }
}

$db = new MyDB();

$db->exec('CREATE TABLE todo (todo STRING)');
?>
