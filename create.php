<?php

$dsn = "mysql:host=localhost;port=3306;dbname=script_saver;user=root;password=;charset=utf8mb4";
$pdo = new PDO($dsn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $description = $_POST['description'] ?? '';
    $script = $_POST['script'] ?? '';
    $language = $_POST['languageSelect'] ?? '';
    $development_type = $_POST['developmentSelect'] ?? '';
    $task_type = $_POST['taskSelect'] ?? '';

    $statement = $pdo->prepare("INSERT INTO scripts(description, script, language, development_type, task_type) 
                            VALUES(:description, :script, :language, :development_type, :task_type)");

    $statement->bindValue(':description', $description);
    $statement->bindValue(':script', $script);
    $statement->bindValue(':language', $language);
    $statement->bindValue(':development_type', $development_type);
    $statement->bindValue(':task_type', $task_type);

    header('Location: index.php');
    $statement->execute();
}

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

// die();

require('views/create.view.php');
