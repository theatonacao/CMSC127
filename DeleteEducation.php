<html>
<head>
<title></title>
<head>
<body>
<a href = "Education.php">Home</a>
</body>
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
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM education WHERE Lvl ='$id' ";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}


$conn->close();
?>
</html>