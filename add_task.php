<?php 
    require_once 'config.php';

    if (isset($_POST["add"])) {
        $task = $_POST["task"];

        if ($task != "") {
            $addtasks = mysqli_query($connection, "INSERT INTO `task` (name, status) VALUES ('$task', 0)")
                or 
            die (mysqli_error($connection));
            header('location:index.php');
        }
    }