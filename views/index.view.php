<?php require('partials/head.php'); ?>

<h1>My Tasks</h1>

<table>
    <?php
    $task = $tasks[0];
    $i = 0;

    //Dynamic Table Headers
    foreach ($task as $key => $value):
        if($i >= 1):
            echo '<th>' .  str_replace('_', ' ', ucwords($key)) . '</th>';
        endif;
        $i++;
    endforeach;

    //Loop through Tasks
    foreach ($tasks as $task) : ?>
    <tr>
        <td><?= $task->title; ?></td>
        <td><?= $task->description; ?></td>
        <td><?= $task->date_added; ?></td>
        <td><?= $task->due_date; ?></td>
        <td><?= $task->completed; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<h2>Add a new to-do:</h2>

<form method="POST" action="add-todo">
	<label for="title">Title</label>
	<input name="title"></input>
	<br/><br/>
	<label for="description">Description</label>
	<input name="description"></input>
	<br/><br/>
	<label for="due_date">Due Date</label>
	<input type="date" name="due_date"></input>
	<br/><br/>
	<button type="submit">Add</button>
</form>


<?php require('partials/footer.php'); ?>
