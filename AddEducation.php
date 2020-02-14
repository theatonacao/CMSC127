<html>
<head>
<title></title>
</head>

<body>
<a href = "Education.php">Home</a>
<br>
</body>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
connect();
}
function connect(){
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "applicants";
	$EdID = $_POST["Change1"];
	$EdLevel = $_POST["Change2"];
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if(mysqli_connect_error())
		die("Connection failed".mysqli_connect_error());
		else echo "Connected Successfuly"."<br>";
	
	$sql = "INSERT INTO education VALUES ( '$EdID', '$EdLevel' )";
	if($conn->query($sql) === TRUE)
		echo "Database created successfully";
		else echo "Error creating database: ".$conn->error;
		
	$conn->close();
}
?>

</html>
