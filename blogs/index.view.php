<!DOCTYPE html>
<html>
	<head>
		<title>blog view</title>
	</head>
	<body>
		<h1>The blog posts</h1>
		<?php
			foreach ($result as $row) {
				echo "<h2>$row[0]. $row[1]<h2>";
				echo "<h3>$row[2]</h3>";
			}
		?>

	</body>
</html>