<?php

$config = require('config.php');

$db = new Database($config['database'], $config['database']['user'], $config['database']['password']);

$errors = [];

// Fetch the script data based on ID
$id = $_GET['id'] ?? null;
if ($id) {
    $script = $db->query("SELECT * FROM scripts WHERE id = :id", [':id' => $id])->fetch(PDO::FETCH_ASSOC);
    if (!$script) {
        die('Script not found.');
    }
} else {
    die('Invalid script ID.');
}

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
    $scriptText = $_POST['script'] ?? '';
    $language = $_POST['languageSelect'] ?? '';
    $development_type = $_POST['developmentSelect'] ?? '';
    $task_type = $_POST['taskSelect'] ?? '';

    if (empty($errors)) {
        // Update the existing script
        $statement = $db->query("UPDATE scripts SET description = :description, script = :script, language = :language, 
                                 development_type = :development_type, task_type = :task_type WHERE id = :id", [
            ':description' => $description,
            ':script'      => $scriptText,
            ':language'    => $language,
            ':development_type' => $development_type,
            ':task_type'   => $task_type,
            ':id'          => $id
        ]);

        // Redirect after successful update
        header('Location: /scripts');
        exit;
    }
}

require('views/edit.view.php');
