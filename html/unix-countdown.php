<!DOCTYPE html>
<html>
<head>
	<title>liamkinne/1515151515-countdown</title>
	<?php include("includes/head.php"); ?>
</head>
<body>
	<header>
		<?php include("includes/header.php"); ?>
	</header>
	<content>
		<h1>Countdown until 1515151515</h1>
		<script>
			setInterval(function ()
			{
				var unix = 1515151515 - Math.round(Date.now()/1000);
				if (unix > 0)
					document.getElementById("time").innerHTML = unix;
				else
					document.getElementById("time").innerHTML = "Done!";

			}, 100);
		</script>
		<style>
			#time
			{
				font-size: 5em;
				padding: 0;
				margin: 0;
			}
		</style>
		<pre id="time"></pre>
	</content>
	<footer>
		<?php include("includes/footer.php"); ?>
	</footer>
</body>
</html> 
