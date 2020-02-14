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
$data = $_POST['code'];
$change = $_POST["Change"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE `education` SET `$id` = '$change' WHERE `Lvl` = '$data' ";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
</html>