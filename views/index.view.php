<?php require "partials/head.php"; ?>

<div class="todo-app">
    <div class="input-section">
        <form method="post" action="add_task.php">
            <input id="todoInput" type="text" placeholder="Add item..." name="task" />
            <button id="addBtn" type="submit" class="add" name="add">Add</button>
            <button type="submit" class="add" id="update-button" style="display: none" name="update" aria-label="hidden">
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
            foreach ($tasks as $task):
            ?>
                <li class="li">
                    <input class="form-check-input" type="checkbox" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1"></label>
                    <span class="todo-text"><?= $task['name']; ?></span>
                    <!-- <span class="todo-text"></span> -->
                    <div class="button button-group">
                        <button type="button" class="btn btn-outline-danger" aria-label="delete"><i class="fa-solid fa-trash"></i></button>
                        <button type="button" class="btn btn-outline-secondary" aria><i class="fa-solid fa-pen"></i></button>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
        <!--       
        <img class="face" src="asetes/thinking.png" alt="">
        <h1 class="not-found"> NOT FOUND</h1> -->
    </div>
</div>

<?php require "partials/footer.php"; ?>