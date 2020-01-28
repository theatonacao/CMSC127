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

	$conn = new mysqli($servername, $username, $password, $dbname);
	
	$result = mysqli_query($conn, "SELECT  * FROM datas");
	$all_property= array();
	
	if($result->num_rows > 0){
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
			echo '</tr>';
		}	
		echo '</tr>';
		echo '</table>';
	}
	else{
		echo '<br>'; 
		echo "<h1>Be the first to apply!</h1>";
	}
	$conn->close();
?>

</div>
	
	</body>
	
</html>