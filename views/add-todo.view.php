<?php require('partials/head.php'); ?>

	<h4>Summary:</h4>

	<p>Task: <?= $_POST['title']; ?></p>
	<p>Task Description: <?= $_POST['description']; ?></p>
    <p>Due Date: <?= $_POST['due_date']; ?></p>

<?php require('partials/footer.php'); ?>
