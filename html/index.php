<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head.php"); ?>
</head>
<body>
	<header>
		<?php include("includes/header.php"); ?>
	</header>
	<content>
		<?php
		include("parsedown/Parsedown.php");
		echo Parsedown::instance()->text(file_get_contents("./posts/home.md", true));
		?>
	</content>
	<footer>
		<?php include("includes/footer.php"); ?>
	</footer>
</body>
</html>