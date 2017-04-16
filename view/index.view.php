
	<?php require 'view/partials/head.php'; ?>
	
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

	<?php require 'view/partials/footer.php'; ?>
