<?php 
    $config = require("config.php");
    $db = new Database($config["database"]);

    $tasks = $db->query("SELECT * FROM `task` ORDER BY `id` ASC")->fetchAll();

    require "views/index.view.php";