<?php

use Cores\Database;
use Cores\Validator;



$config = require space_path('config.php');
$db = new Database($config['database']);

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (! Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'Limit of body 1000 words...';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}

viewing("notes/create.view.php", [
    'heading' => 'Create Note',
    'errors' => $errors
]);