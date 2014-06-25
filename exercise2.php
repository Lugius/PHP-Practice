<!DOCTYPE html>
<html>
<body>

<?php
	if (!isset($_POST['submit'])){
		?>
		<form method="post" action="exercise2.php">
			<p>Please enter city, month and year that 
				the weather conditions below happened.<br> </p>
			<input type="text" name="city" placeholder="City">
			<input type="text" name="month" placeholder="Month">
			<input type="text" name="year" placeholder="Year">
			<p/>

			<input type="checkbox" name="weather[]" value="rain">Rain
			<input type="checkbox" name="weather[]" value="sunshine">Sunshine
			<input type="checkbox" name="weather[]" value="clouds">Clouds
			<input type="checkbox" name="weather[]" value="hail">Hail
			<input type="checkbox" name="weather[]" value="snow">Snow
			<p/>

			<input type="submit" name="submit" value="Go">
		</form>

<?php
	} else {
		$city = $_POST['city'];
		$month = $_POST['month'];
		$year = $_POST['year'];

		echo "In $city in the month of $month $year, you observed the following weather:";

		$weather = $_POST['weather'];
		echo "<ul>";
		foreach($weather as $w){
			echo "<li>$w</li>";
		}
		echo "</ul>";
	}
	

?>
</body>
</html>