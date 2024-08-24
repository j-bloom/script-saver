<?php

$config = require('config.php');

$db = new Database($config['database'], $config['database']['user'], $config['database']['password']);

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    if (!isset($_POST['languageSelect']) || empty(trim($_POST['languageSelect']))) {
        $errors['languageSelect'] = 'Language is required';
    }

    if (!isset($_POST['developmentSelect']) || empty(trim($_POST['developmentSelect']))) {
        $errors['developmentSelect'] = 'Development type is required';
    }

    if (!isset($_POST['taskSelect']) || empty(trim($_POST['taskSelect']))) {
        $errors['taskSelect'] = 'Task type is required';
    }

    if (empty(trim($_POST['description']))) {
        $errors['description'] = 'Description is required';
    }

    if (empty(trim($_POST['script']))) {
        $errors['script'] = 'Script is required';
    }


    $description = $_POST['description'] ?? '';
    $script = $_POST['script'] ?? '';
    $language = $_POST['languageSelect'] ?? '';
    $development_type = $_POST['developmentSelect'] ?? '';
    $task_type = $_POST['taskSelect'] ?? '';

    if (empty($errors)) {
        $statement = $db->query("INSERT INTO scripts(description, script, language, development_type, task_type) 
                            VALUES(:description, :script, :language, :development_type, :task_type)");

        $statement->bindValue(':description', $description);
        $statement->bindValue(':script', $script);
        $statement->bindValue(':language', $language);
        $statement->bindValue(':development_type', $development_type);
        $statement->bindValue(':task_type', $task_type);

        header('Location: index.php');
        $statement->execute();
    }
}

require('views/create.view.php');