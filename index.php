<html>
<head>
	<title>Random Report Card</title>
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<header>
			<h1>Your Current Score: 
				<?php 
					$score = rand(50, 100);
					echo $score . "/100";
				?> 
			</h1>
			<h2>Your grade is
				<?php 
					if ($score < 70) {
						echo "D";
					}
					elseif ($score < 80 && $score >= 70) {
						echo "C";
					}
					elseif ($score >= 80 && $score < 90) {
						echo "B";
					}
					else {
						echo "A";
					}
				?> 
			</h2>
		</header>

	</div>

</body>
</html>