<?php

$config = require('config.php');

$db = new Database($config['database'], $config['database']['user'], $config['database']['password']);

$getQuery = "SELECT * FROM scripts WHERE id = :id";
$deleteQuery = "DELETE FROM scripts WHERE id = :id";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $project = $db->query($getQuery, [
        'id' => $_POST['id']
    ])->fetch();

    $db->query($deleteQuery, [
        'id' => $_POST['id']
    ]);

    header('Location: /scripts');
    exit();
}
