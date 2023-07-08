<?php

use Cores\Database;

$config = require space_path('config.php');
$db = new Database($config['database']);


$notes = $db->query('select * from notes where user_id = 1')->get();


viewing("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);




