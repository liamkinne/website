<?php
	$post_name = htmlspecialchars($_GET['p'], ENT_QUOTES, 'UTF-8');

	$post_filename = './posts/' . $post_name . '.md';

	if (file_exists($post_filename))
	{
		$post_content = file_get_contents($post_filename, true);
		// The .md extension makes it imposible to look at files that don't have the extentsion, protecting against looking at files that shouldn't be accessed
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
	<title>liamkinne/<?php echo($post_name . ".md"); ?></title>
	<?php include("includes/head.php"); ?>
</head>
<body>
	<header>
		<?php include("includes/header.php"); ?>
	</header>
	<content>
		<?php
		include("parsedown/Parsedown.php");
		$Parsedown = new Parsedown();
		echo($Parsedown->text($post_content));
		?>
		<p class="file-time">Last modified: January 1st, 1970 + <?php echo(filemtime($post_filename)); ?> seconds.</p>
	</content>
	<footer>
		<?php include("includes/footer.php"); ?>
	</footer>
</body>
</html>