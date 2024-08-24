<?php

$config = require('config.php');

$db = new Database($config['database'], $config['database']['user'], $config['database']['password']);
$scripts = $db->query("SELECT * FROM scripts")->fetchAll();

require('views/scripts.view.php');