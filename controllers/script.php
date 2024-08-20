<?php

$config = require('config.php');
$db = new Database($config['database'], $config['database']['user'], $config['database']['password']);

$query = "SELECT * FROM scripts WHERE id = :id";

$script = $db->query($query, ['id' => $_GET['id']])->fetch();

require('views/script.view.php');