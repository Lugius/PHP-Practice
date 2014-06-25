<!DOCTYPE html>
<html>
<body>
	<?php
		if (!isset($_POST['day'])){
			?>
			<form method="post" action="exercise1.php">
				Please enter a day of the week: <br>
				<input type="text" name="day"/>
				<p/>
				<input type="submit" name="submit" value="Go"/>
			</form>
			<?php
		} else {
			switch(strtolower($_POST['day'])){
				case 'monday':
					echo "Laugh on Monday";
					break;
				case 'tuesday':
					echo "Laugh on Tuesday";
					break;
				case 'wednesday':
					echo "Laugh on Wednesday";
					break;
				default:
					echo "Not a day";
			}
			?>
			<form action="exercise1.php">
				<input type="submit" name="submit" value="Back" onclick="self.location='exercise1.php'"/>
			</form>
			<?php
		}
		?>
</body>
</html>