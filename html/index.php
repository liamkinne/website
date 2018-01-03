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
			// Sanitize HTML chars
			$post_name = htmlspecialchars($_GET['p'], ENT_QUOTES, 'UTF-8');
			// Strip "." to further mitigate the risk of bad users looking at restricted files/content
			$post_name = mb_ereg_replace("\.", "", $post_name);

			// If post_name is empty, we must be looking for home
			if ($post_name == "")
				$post_name = "home";

			// Create file name from name
			$post_filename = './posts/' . $post_name . '.md';

			// die if file doesn't exist
			if (!file_exists($post_filename))
			{
				http_response_code(404);
				include('./error.php'); // TODO: make 404.
				die;
			}

			// Get content from post or homepage
			$post_content = file_get_contents($post_filename, true);

			// Display using parsedown
			require("parsedown/Parsedown.php");
			echo Parsedown::instance()->text($post_content);

			// Display file modification time in not on homepage
			if ($post_name != "home")
				echo("<p class='file-time'>Last modified: January 1st, 1970 + " . filemtime($post_filename) . " seconds");
		?>
	</content>
	<footer>
		<?php include("includes/footer.php"); ?>
	</footer>
</body>
</html>