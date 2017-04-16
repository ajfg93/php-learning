
<?php require 'view/partials/head.php'; ?>

<!-- <ul>
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
 -->

 <h1>Submit Your Form</h1>

 <form method="GET" action="/name">
 	<span>Name: </span><input type="text" name="name">
 </form>

 
<?php require 'view/partials/footer.php'; ?>
