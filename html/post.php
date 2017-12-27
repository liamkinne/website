<?php
	$post_name = htmlspecialchars($_GET['p'], ENT_QUOTES, 'UTF-8');

	$post_filename = './posts/' . $post_name . '.txt';

	if (file_exists($post_filename))
	{
		$post_content = file_get_contents($post_filename, true);
		// The .txt extension makes it imposible to look at files that don't have the extentsion, protecting possibly sensitive files.
	}
	else
	{
		http_response_code(404);
		include('./error.php'); // TODO: make 404.
		die();
	}
?>

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
		<h1><?php echo($post_name); ?></h1>
		<p><?php echo($post_content); ?></p>
	</content>
	<footer>
		<p>Copyright © 2017 Liam Kinne</p>
	</footer>
</body>
</html>