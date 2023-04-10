<!DOCTYPE html>
<html>
<head>
    <h1>EECS 348 Lab Seven Practice Four</h1>
</head>
<body>
    <form action="practice4.php" method="post">
        Size of the multiplication table: 
        <input type="text" name="size">
        <br>
        <input type="submit">
    </form>
    <?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$size = $_POST["size"];

			if (!is_numeric($size) || $size <= 0) {
				echo "<p>Please enter a positive integer.</p>";
			} else {
				echo "<table>";
				echo "<tr><th></th>";
				for ($i = 1; $i <= $size; $i++) {
					echo "<th>$i</th>";
				}
				echo "</tr>";
				for ($i = 1; $i <= $size; $i++) {
					echo "<tr><th>$i</th>";
					for ($j = 1; $j <= $size; $j++) {
						echo "<td>" . ($i * $j) . "</td>";
					}
					echo "</tr>";
				}
				echo "</table>";
			}
		}
	?>

</body>


</html>
