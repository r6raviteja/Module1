<!DOCTYPE html>
<html>
<body>
	<a href="about.php">aboutus</a>
	<a href="home.php">home us</a>

<ul>
<?php foreach($tasks as $task): ?>
	<li>
	 <?php if($task->completed): ?>
		<strike><?= $task->description; ?></strike>
		<?php else:
			echo $task->description;
		 endif; ?>
		 </li>
	 <?php endforeach; ?>
	</ul>
</body>
</html>

