<?php
// Sanitize HTML chars
$post_name = htmlspecialchars($_GET['p'], ENT_QUOTES, 'UTF-8');
$post_category = htmlspecialchars($_GET['c'], ENT_QUOTES, 'UTF-8');

// if post name is empty, go to home
if (!$post_name)
{
	$post_name = "home";
	$is_home = true;
}
else $is_home = false;

$post_filename = './posts/' . $post_category . '/' . $post_name . '.md';

// go home if file doesn't exist
if (!file_exists($post_filename))
{
	$post_filename = "./posts/home.md";
	$is_home = true;
}

$post_content = file_get_contents($post_filename, true);

require("parsedown/Parsedown.php");
$Parsedown = new Parsedown();
?>

<!DOCTYPE html>
<html>
<head>
	<title>liamkinne<?php if(!$is_home) echo("/" . $post_name); ?></title>
	<meta property="og:title" content="<?php echo($Parsedown->getTitle($post_content)); ?>">
	<?php include("includes/head.php"); ?>
</head>
<body>
	<header>
		<?php include("includes/header.php"); ?>
	</header>
	<content>
		<?php
			echo ($Parsedown->text($post_content));

			if (!$is_home)
				echo("<p class='file-time'>Last modified: January 1st, 1970 + " . filemtime($post_filename) . " seconds");
		?>
	</content>
	<footer>
		<?php include("includes/footer.php"); ?>
	</footer>
</body>
</html>
