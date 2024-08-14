<?php

$dsn = "mysql:host=localhost;port=3306;dbname=script_saver;user=root;password=;charset=utf8mb4";
$pdo = new PDO($dsn);

$statement = $pdo->prepare("SELECT * FROM scripts");
$statement->execute();

$scripts = $statement->fetchAll(PDO::FETCH_ASSOC);

// echo '<pre>';
// var_dump($scripts);
// echo '</pre>';
// 

require('index.view.php');
