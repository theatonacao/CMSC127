<html>
    <head>
        <title>Kasama</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>  

        <div class="container">
            
            <a class=button href=Applicants.php> Back to Applicants Page</a>
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
$sql = "SELECT surname, firstname, middlename, nameextension, bday, placeofbirth, sex, civilstatus, height, weight, bloodtype, gsis, pagibig, philhealth, sss, tin, agencyemployee, citizenship, res_add, per_add, telephone, mobile, email FROM datas WHERE gsis = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo '<br>';
        echo "<h4 align=left >Name: " . $row["firstname"] . " " . $row["middlename"] . " " . $row["surname"] . "<br>";
        echo "Date of birth: " . $row["bday"]. "<br>";
        echo "Place of birth: " . $row["placeofbirth"]. "<br>";
        echo "Sex: " . $row["sex"]. "<br>";
        echo "Civil Status: " . $row["civilstatus"]. "<br>";
        echo "Height: " . $row["height"]. "<br>";
        echo "Weight: " . $row["weight"]. "<br>";
        echo "Blood Type: " . $row["bloodtype"]. "<br>";
        echo "GSIS ID Number: " . $row["gsis"]. "<br>";
        echo "Pagibig ID Number: " . $row["pagibig"]. "<br>";
        echo "Philhealth Number: " . $row["philhealth"]. "<br>";
        echo "SSS Number: " . $row["sss"]. "<br>";
        echo "TIN Number: " . $row["tin"]. "<br>";
        echo "Agency Employee Number: " . $row["agencyemployee"]. "<br>";
        echo "Citizenship: " . $row["citizenship"]. "<br>";
        echo "Residential Address: " . $row["res_add"]. "<br>";
        echo "Permanent Address: " . $row["per_add"]. "<br>";
        echo "Telephone Number: " . $row["telephone"]. "<br>";
        echo "Mobile Number: " . $row["mobile"]. "<br>";
        echo "Email Address: " . $row["email"]. "<br></h4>";
    }
} else {
    echo "<h4>0 results</h4>";
}
$conn->close();
?>
</div>
    
    </body>
    
</html>