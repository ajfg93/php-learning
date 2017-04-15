<!DOCTYPE html>
<html>
<head>
	<title>Fuck Dick</title>
</head>
<body>

	<nav>
		<ul>
			<li><a href="/about.php">About us</a></li>
			<li><a href="/contact.php">Contact us</a></li>
		</ul>
	</nav>
	<ul>
		<?php foreach ($re_tasks as $task) :?>
			<li>

			<?php if ($task->completed) : ?>
				<strike><?= $task->description ?></strike>
			<?php else: ?>
				<?= $task->description ?>
			<?php endif; ?>

			</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>