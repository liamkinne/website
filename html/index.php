<?php
// Sanitize HTML chars
$post_name = htmlspecialchars($_GET['p'], ENT_QUOTES, 'UTF-8');
$post_category = htmlspecialchars($_GET['c'], ENT_QUOTES, 'UTF-8');

$is_home = false;

// If post_name is empty, we must be looking for home
if ($post_name == "")
{
	$post_name = "home";
	$is_home = true;
}

// Create file name from name
$post_filename = './posts/' . $post_category . '/' . $post_name . '.md';

// die if file doesn't exist
if (!file_exists($post_filename))
{
	http_response_code(404);
	include('./error.php'); // TODO: make 404.
	die;
}

// Get content from post or homepage
$post_content = file_get_contents($post_filename, true);

// Parsedown
require("parsedown/Parsedown.php");
$Parsedown = new Parsedown();
?>

<!DOCTYPE html>
<html>
<head>
	<title>liamkinne<?php if($is_home) echo("/" . $post_name); ?></title>
	<meta property="og:title" content="<?php echo($Parsedown->getTitle($post_content)); ?>">
	<?php include("includes/head.php"); ?>
</head>
<body>
	<header>
		<?php include("includes/header.php"); ?>
	</header>
	<content>
		<?php
			// Display using parsedown
			echo ($Parsedown->text($post_content));

			// Display file modification time in not on homepage
			if (!$is_home)
				echo("<p class='file-time'>Last modified: January 1st, 1970 + " . filemtime($post_filename) . " seconds");
		?>
	</content>
	<footer>
		<?php include("includes/footer.php"); ?>
	</footer>
</body>
</html>
