<html>
	<head>
		<title>Kasama</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	
	<body>	

		<div class="container">
			
			<a class=button href=main.html> Back to Home</a>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
connect();
}
function connect(){
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "applicants";

	$surname = $_POST["surname"];
	$firstname = $_POST["firstname"];
	$middlename = $_POST["middlename"];
	$nameextension = $_POST["nameextension"];

	$bday = $_POST["bday"];
	$placeofbirth = $_POST["placeofbirth"];
	$sex = $_POST["sex"];
	$civilstatus = $_POST["civilstatus"];
	$height = $_POST["height"];
	$weight = $_POST["weight"];
	$bloodtype = $_POST["bloodtype"];

	$gsis = $_POST["gsis"];
	$pagibig = $_POST["pagibig"];
	$philhealth = $_POST["philhealth"];
	$sss = $_POST["sss"];
	$tin = $_POST["tin"];
	$agencyemployee = $_POST["agencyemployee"];

	$citizenship = $_POST["citizenship"];
	$country = $_POST["country"];

	$res_add = $_REQUEST["rhouse"].", ". $_REQUEST["rstreet"].", ". $_REQUEST["rsubdivision"].", ". $_REQUEST["rbarangay"].", ". $_REQUEST["rcity"].", ". $_REQUEST["rprovince"].", ". $_REQUEST["rzipcode"];

	$per_add = $_REQUEST["phouse"].", ". $_REQUEST["pstreet"].", ". $_REQUEST["psubdivision"].", ". $_REQUEST["pbarangay"].", ". $_REQUEST["pcity"].", ". $_REQUEST["pprovince"].", ". $_REQUEST["pzipcode"];

	$telephone = $_POST["telephone"];
	$mobile = $_POST["mobile"];
	$email = $_POST["email"];

	$spouse_surname = $_POST["spouse_surname"];
	$spouse_first = $_POST["spouse_first"];
	$spouse_middle = $_POST["spouse_middle"];
	$spouse_nameext = $_POST["spouse_nameext"];
	$spouse_occupation = $_POST["spouse_occupation"];
	$spouse_employer = $_POST["spouse_employer"];
	$spouse_businessaddress = $_POST["spouse_busadd"];
	$spouse_telephone = $_POST["spouse_telno"];

	$father_surname = $_POST["father_surname"];
	$father_first = $_POST["father_first"];
	$father_middle = $_POST["father_middle"];
	$father_nameextension = $_POST["father_nameext"];

	$mother_maiden = $_POST["mother_maiden"];
	$mother_surname = $_POST["mother_surname"];
	$mother_first = $_POST["mother_surname"];
	$mother_middle = $_POST["mother_middle"];

	$child1 = $_POST["child1"];
	$child2 = $_POST["child2"];
	$child3 = $_POST["child3"];
	$child4 = $_POST["child4"];
	$child5 = $_POST["child5"];

	$date1 = $_POST["cbday1"];
	$date2 = $_POST["cbday2"];
	$date3 = $_POST["cbday3"];
	$date4 = $_POST["cbday4"];
	$date5 = $_POST["cbday5"];

	$elementaryn = $_POST["elementaryn"];
	$elementaryb = $_POST["elementaryb"];
	$elementaryp = $_POST["elementaryp"];
	$elementaryh = $_POST["elementaryh"];
	$elementaryy = $_POST["elementaryy"];
	$elementarys = $_POST["elementarys"];

	$secondaryn = $_POST["secondaryn"];
	$secondaryb = $_POST["secondaryb"];
	$secondaryp = $_POST["secondaryp"];
	$secondaryh = $_POST["secondaryh"];
	$secondaryy = $_POST["secondaryy"];
	$secondarys = $_POST["secondarys"];

	$vocationaln = $_POST["vocationaln"];
	$vocationalb = $_POST["vocationalb"];
	$vocationalp = $_POST["vocationalp"];
	$vocationalh = $_POST["vocationalh"];
	$vocationaly = $_POST["vocationaly"];
	$vocationals = $_POST["vocationals"];

	$collegen = $_POST["collegen"];
	$collegeb = $_POST["collegeb"];
	$collegep = $_POST["collegep"];
	$collegeh = $_POST["collegeh"];
	$collegey = $_POST["collegey"];
	$colleges = $_POST["colleges"];

	$graduaten = $_POST["graduaten"];
	$graduateb = $_POST["graduateb"];
	$graduatep = $_POST["graduatep"];
	$graduateh = $_POST["graduateh"];
	$graduatey = $_POST["graduatey"];
	$graduates = $_POST["graduates"];
	
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if(mysqli_connect_error())
		die("<h3>Connection failed".mysqli_connect_error()." </h3>");
		else echo "<h3>Connected to database"."</h3>";
	
	$sql = "INSERT INTO datas VALUES ( '$surname', '$firstname', '$middlename', '$nameextension', 
	'$bday', '$placeofbirth', '$sex', '$civilstatus', '$height', '$weight', '$bloodtype',
	'$gsis', '$pagibig', '$philhealth', '$sss', '$tin', '$agencyemployee', '$citizenship', 
	'$country', '$res_add', '$per_add', '$telephone', '$mobile', '$email', '$spouse_surname', '$spouse_first',
	'$spouse_middle', '$spouse_nameext', '$spouse_occupation', '$spouse_employer', '$spouse_businessaddress',
	'$spouse_telephone', '$father_surname', '$father_first', '$father_middle', '$father_nameextension', 
	'$mother_maiden', '$mother_surname', '$mother_first', '$mother_middle', 
	'$child1', '$child2', '$child3', '$child4', '$child5', '$date1', '$date2', '$date3', '$date4', '$date5',
	'$elementaryn', '$elementaryb', '$elementaryp', '$elementaryh', '$elementaryy', '$elementarys', 
	'$secondaryn', '$secondaryb', '$secondaryp', '$secondaryh', '$secondaryy', '$secondarys', 
	'$vocationaln', '$vocationalb', '$vocationalp', '$vocationalh', '$vocationaly', '$vocationals', 
	'$collegen', '$collegeb', '$collegep', '$collegeh', '$collegey', '$colleges',
	'$graduaten', '$graduateb', '$graduatep', '$graduatey', '$graduatey', '$graduates')";


	if($conn->query($sql) == TRUE)
		echo "<h3>Database created successfully</h3>";
		else{ 
			echo "<h3>Error creating database:<br> ".$conn->error;
			echo "<br>GSIS Number already existed!<br>";
			echo "Please re-enter your information. Thank You.</h3>";
		}
	$conn->close();
}
?>
</div>
	
	</body>
	
</html>