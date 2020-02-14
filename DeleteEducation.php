<html>
	<head>
		<title>Kasama</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	
	<body>	

		<div class="container">
			
			<a class=button href=main.html> Back to Home</a>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "applicants";
$id = $_POST["index"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("<h3>Connection failed: " . $conn->connect_error. "</h3>");
} 

// sql to delete a record
$sql = "DELETE FROM datas WHERE gsis ='$id' ";

if ($conn->query($sql) === TRUE) {
	echo '<br>';
    echo "<h3>Record deleted successfully</h3>";
} else {
    echo "<h3>Error deleting record: " . $conn->error."</h3>";
}


$conn->close();
?>


</div>
	
	</body>
	
</html>
