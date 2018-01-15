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
		<p>GMT: Friday, January 5, 2018 11:25:15 AM</p>
		<script>
			setInterval(function ()
			{
				var unix = Math.round(Date.now()/1000);
				if (unix > 0)
					document.getElementById("time").innerHTML = 1515151515 - unix;
				else
					document.getElementById("time").innerHTML = "Done!";

				document.getElementById("currentTime").innerHTML = unix;

			}, 100);
		</script>
		<style>
			#time
			{
				font-size: 5em;
				padding: 0;
				margin: 0;
			}
			#currentTime
			{
				padding: 0;
				margin: 0;
			}
		</style>
		<pre id="time"></pre>
		<p id="currentTime"></p>
	</content>
	<footer>
		<?php include("includes/footer.php"); ?>
	</footer>
</body>
</html> 
