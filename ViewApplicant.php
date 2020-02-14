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
//$sql = "SELECT surname, firstname, middlename, nameextension, bday, placeofbirth, sex, civilstatus, height, weight, bloodtype, gsis, pagibig, philhealth, sss, tin, agencyemployee, citizenship, res_add, per_add, telephone, mobile, email FROM datas WHERE gsis = '$id'";
//$result = $conn->query($sql);

$result = mysqli_query($conn, "SELECT  * FROM datas WHERE gsis = '$id'");

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo '<br>';
        echo "<h4 align=left >Name: " . $row["Firstname"] . " " . $row["Middlename"] . " " . $row["Surname"] . "<br>";
        echo "Date of birth: " . $row["Bday"]. "<br>";
        echo "Place of birth: " . $row["Placeofbirth"]. "<br>";
        echo "Sex: " . $row["Sex"]. "<br>";
        echo "Civil Status: " . $row["Civil_Status"]. "<br>";
        echo "Height: " . $row["Height"]. "<br>";
        echo "Weight: " . $row["Weight"]. "<br>";
        echo "Blood Type: " . $row["Bloodtype"]. "<br>";
        echo "GSIS ID Number: " . $row["GSIS"]. "<br>";
        echo "Pagibig ID Number: " . $row["PAGIBIG"]. "<br>";
        echo "Philhealth Number: " . $row["PhilHealth"]. "<br>";
        echo "SSS Number: " . $row["SSS"]. "<br>";
        echo "TIN Number: " . $row["TIN"]. "<br>";
        echo "Agency Employee Number: " . $row["EmployeeNo"]. "<br>";
        echo "Citizenship: " . $row["Citizenship"]. "<br>";
        echo "Residential Address: " . $row["Residence_add"]. "<br>";
        echo "Permanent Address: " . $row["Permanent_add"]. "<br>";
        echo "Telephone Number: " . $row["Telephone"]. "<br>";
        echo "Mobile Number: " . $row["Mobile"]. "<br>";
        echo "Email Address: " . $row["Email"]. "<br></h4>";
    }
} else {
    echo "<h4>0 results</h4>";
}
$conn->close();
?>
</div>
    
    </body>
    
</html>
