<?php require('partials/head.php'); ?>

<h1>My Tasks</h1>

<?php foreach ($tasks as $task) : ?>
    <li>
        <?php if ($task->completed) : ?>
            <strike><?= $task->description; ?></strike>
        <?php else : ?>
            <?= $task->description; ?>
        <?php endif; ?>
    </li>
<?php endforeach; ?>

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
