<html>
	<head>
		<title>Kasama</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style>
		table, th, td{
			border: 2px solid gray;
			width: 100%;
		}
</style>
	</head>
	
	<body>	

		<div class="container">
			
			<a class=button href=main.html> Back to Home</a><br><br>


<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "applicants";
	$index = 1;
	$x = 0;
	//$id = $_POST["index"];
	
	
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	$result = mysqli_query($conn, "SELECT  * FROM education");
	$all_property= array();
		if($result->num_rows >= 0){
			echo '<table class= "data-table">
			<tr class = "data-heading">';
			while($x < 2){
				$property= mysqli_fetch_field($result);
				echo '<td>'.$property->name. '</td>';
				array_push($all_property, $property->name );
				$x = $x + 1;
			}
			echo '<td>'.'Add'. '</td>';
			echo '<td>'.'Delete'. '</td>';
			echo '<td>'.'Edit'. '</td>';
			while($row= mysqli_fetch_array($result)){
				echo '<tr>';
				foreach ($all_property as $item){
					echo '<td>'.$row[$item].'</td>';
				}
				echo "<td><form id= \"$index\" method=\"post\" action=\"AddEducation.php\">
				EdID
				<input name=\"Change1\" type=\"text\">
				Level
				<input name=\"Change2\" type=\"text\">
				<input name=\"index\" type=\"hidden\" value=\"$row[1]\">
				<input name=\"submit\" type=\"submit\" value=\"Add\"></form></td>";
				echo "<td><form id= \"$index\" method=\"post\" action=\"DeleteEducation.php\">
				<input name=\"index\" type=\"hidden\" value=\"$row[1]\">
				<input name=\"submit\" type=\"submit\" value=\"Delete\"></form></td>";
				echo "<td><form id= \"$index\" method=\"post\" action=\"EditEducation.php\">
				<select name=\"index\">
				<option value=\"EdID\">Education ID</option>
				<option value=\"Lvl\">Level</option>
				</select>
				<input name=\"code\" type=\"hidden\" value=\"$row[1]\">
				<input name=\"Change\" type=\"text\">
				<input name=\"submit\" type=\"submit\" value=\"Edit\"></form></td>";
				echo '</tr>';
			}	
			echo '</tr>';
			echo '</table>';
		}	
		else{
			echo '<br>'; 
			echo "<h1>Be the first to apply!</h1>";
		}	
	
	/*if($result->num_rows > 0){
		echo '<table class= "data-table">
		<tr class = "data-heading">';
	
		//while($property= mysqli_fetch_field($result)){
		//	echo '<td>'.$property->name. '</td>';
		//	array_push($all_property, $property->name );
		//}
		while($x < 4){
			$property= mysqli_fetch_field($result);
			echo '<td>'.$property->name. '</td>';
			array_push($all_property, $property->name );
			$x = $x + 1;
		}
		echo '<td>'.'Delete'. '</td>';
		echo '<td>'.'More Info'. '</td>';
		echo '<td>'.'Edit'. '</td>';
		echo '</tr>';
		while($row= mysqli_fetch_array($result)){
			echo '<tr>';
			foreach ($all_property as $item){
				echo '<td>'.$row[$item].'</td>';
			}
			echo "<td><form id= \"$index\" method=\"post\" action=\"DeleteApplicant.php\">
			<input name=\"index\" type=\"hidden\" value=\"$row[11]\">
			<input name=\"submit\" type=\"submit\" value=\"Delete\"></form></td>";
			echo "<td><form id= \"$index\" method=\"post\" action=\"ViewApplicant.php\">
			<input name=\"index\" type=\"hidden\" value=\"$row[11]\">
			<input name=\"submit\" type=\"submit\" value=\"More Info\"></form></td>";
			echo "<td><form id= \"$index\" method=\"post\" action=\"EditApplicant.php\">
			<select name=\"index\">
			<option value=\"education\">Education</option>
			<option value=\"majorfield\">Major Field</option>
			<option value=\"scholarship\">Scholarship</option>
			<option value=\"address\">Address</option>
			</select>
			<input name=\"code\" type=\"hidden\" value=\"$row[11]\">
			<input name=\"submit\" type=\"submit\" value=\"Edit\"></form></td>";
			echo '</tr>';
		}	
		echo '</tr>';
		echo '</table>';
	}
	
	else{
		echo '<br>'; 
		echo "<h1>Be the first to apply!</h1>";
	}
	*/
	$conn->close();
?>

</div>
	
	</body>
	
</html>