<?php

$fields = [
    'title' => $_POST['title'],
    'description' => $_POST['description'],
    'due_date' => $_POST['due_date']
];

$app['database']->insert('todos', $fields);

require 'views/add-todo.view.php';