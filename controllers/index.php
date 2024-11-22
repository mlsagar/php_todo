<?php 
    require "Validator.php";
    $config = require "config.php";
    $db = new Database($config["database"]);

    $tasks = $db->query("SELECT * FROM `task` ORDER BY `id` ASC")->get();

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $errors = [];

        $task = $_POST["task"];

        if (Validator::required($task)) {
            $errors["task"] = "Task is required";
        }

        if (Validator::maxLength($task, 50)) {
            $errors["task"] = "Task should be less than 50 character";
        }

        if(empty($errors)) {
            $db->query("INSERT INTO `task` (name, status) VALUES ( :task, :status)", [
                "task" => $task,
                "status" => 0
            ]);
            header('location:/');
            // $_POST['task'] = NULL;
        }

    }

    require "views/index.view.php";