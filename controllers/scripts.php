<?php

$config = require('config.php');

$db = new Database($config['database'], $config['database']['user'], $config['database']['password']);
$scripts = $db->query("SELECT * FROM scripts WHERE user_id = 1")->fetchAll();

require('views/scripts.view.php');