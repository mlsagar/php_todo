<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="todo-app">
        <div class="input-section">
            <form method="post" action="add_task.php">
                <input id="todoInput" type="text" placeholder="Add item..." name="task" />
                <button id="addBtn" type="submit" class="add" name="add">Add</button>
                <button type="submit" class="add" id="update-button" style="display: none" name="update">
                    Update
                </button>
            </form>
            <form action="" method="post">
                <input type="text" id="search-input" placeholder="Search" />
                <button type="submit" id="search-button">Search</button>
            </form>
        </div>

        <div class="todos">
        
            <ul class="todo-list">  
                <?php 
                    require 'config.php';
                    $fetchingtasks = mysqli_query($connection, "SELECT * FROM `task` ORDER BY `id` ASC")
                        or
                    die(mysqli_error($connection));
                    $count = 1;
                    foreach($fetchingtasks as $task):                    
                ?>
                    <li class="li">
                        <?= $task['name']; ?>
                    </li>
                <?php endforeach; ?>
                <li class="li">
                    <input class="form-check-input" type="checkbox" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1"></label>
                    <span class="todo-text">text</span>
                    <span class="todo-text">date</span>
                    <span class="span-button"><i class="fa-solid fa-trash"></i></span>
                    <span class="span-button"><i class="fa-solid fa-pen"></i></span>
                </li>
            </ul>
            <!--       
        <img class="face" src="asetes/thinking.png" alt="">
        <h1 class="not-found"> NOT FOUND</h1> -->
        </div>
    </div>
</body>

</html>

</html>