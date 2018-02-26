<?php
	$id = $_GET['e'];
	if ($id == '') $id = "404";
?>

<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head.php"); ?>
</head>
<body>
	<header>
		<h1>
			ERROR <?php echo($id); ?>
		</h1>
	</header>
</body>
</html>
