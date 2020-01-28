<!DOCTYPE html>
<html>
<head>
	<title>PERSONAL DATA SHEET</title>

	<style type="text/css">
		body{
			margin: 150px;
			padding: 50px;
			font-family: Arial;
			color: white;
			font-size: 15px;
			line-height: 2;
			border:0.5px gray solid;
			background-color: #596781; 

		}
		.personalinfo input{
			margin:10px;
			height: 35px;
			font-size: 13px;
		}
		.educ table{
			padding:10px; 
			line-height: 1;
			
		}
		.educ td{
			padding: 5px 0px;
			margin: 0px;
		}
		.educ input{
			margin:10px;
			height: 20px;
			font-size: 13px;
		}
		#kasama{
			font-family: "Times New Roman";
			font-size: 90px;
			line-height: 0;
		}
		p{
			font-family: "Times New Roman";
			font-size: 23px;
			line-height: 0;
		}

		input{
			background-color: rgba(255,255,255,0.6);
			border-color:  rgba(255,255,255,0.6);
		}

		
		 .button {
		  padding: 10px; 
		  margin-left: 400px;
		  border-radius: 12px; 
		  font-size: 20px; 
		  font-family: "Trebuchet MS";
		  outline: none;
		  background-color: white;
		  width: 250px;
		  border: #596781;
		  color: #596781;
		}

		.button2{
		  padding: 10px; 
		  margin-left: 450px;
		  border-radius: 12px; 
		  font-size: 20px; 
		  font-family: "Trebuchet MS";
		  outline: none;
		  background-color: rgba(0, 0, 0, 0.65);
		  width: 250px;
		  color: white;
		}
		a{
			text-decoration: none;
		}
	</style>

</head>
<body>
	<h1 id=kasama> kasama </h1>
	<p> everyone deserves a friend </p>
	<br><h1 align="center">PERSONAL DATA SHEET</h1>
		
		<form method="POST" action = "ApplyNow.php" align="left">
			<div class="personalinfo"> 
				<h3> I. PERSONAL INFORMATION </h3> 
				Name<br>	
					<input type="text" name="surname" placeholder="Surname" size="40" required="">
					<input type="text" name="firstname" placeholder="First Name" size="40" required="">
					<input type="text" name="middlename" placeholder="Middle Name" size="40" required="">
					<input type="text" name="nameextension" placeholder= "Jr/ Sr"><br>
				Date of birth	
					<input type="date" name="bday" placeholder="mm/dd/yyy" size="28" required="">
				Place of birth	
					<input type="text" name="placeofbirth" size="100" required=""> <br>
				Sex <input type="radio" name="sex" value="male" required=""> Male
					<input type="radio" name="sex" value="female" required=""> Female
				&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;
				&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;
				Civil Status	
					<input type="radio" name="civilstatus" value="Single" required=""> Single
					<input type="radio" name="civilstatus" value="Widowed" required=""> Widowed
					<input type="radio" name="civilstatus" value="Married" required=""> Married
					<input type="radio" name="civilstatus" value="Separated" required=""> Separated
					<input type="text" name="civilstatus" placeholder="Other/s" size="22">
				<br>
				Height(m)	<input type="text" name="height" style=" margin-right: 90px" size=27 required="">
				Weight(kg)	<input type="text" name="weight"style=" margin-right: 90px"size=27 required="">
				Blood Type	<input type="text" name="bloodtype" size=29 required="">
				<br>
				 GSIS ID No.	<input type="text" name="gsis" size="33" required="">
				 PAG-IBIG ID No.<input type="text" name="pagibig"size="30" required="">
				 PHILHEALTH No.	<input type="text" name="philhealth"size="30" required="">
				<br>
				 SSS No. 			<input type="text" name="sss"size="35" required="">
				 TIN No. 			<input type="text" name="tin"size="35" required="">
				 Agency Employee No. <input type="text" name="agencyemployee"size="32" required="">
				<br>
				 Citizenship (If holder of dual citizenship, please indicate the details)<br>
						<input type="radio" name="citizenship" value="Filipino" required=""> Filipino<br>
						<input type="radio" name="citizenship" value="Dual Citizenship" required=""> Dual Citizenship
						(Please indicate the country)	<input type="text" name="country"><br>
				 Residential Address<br>
						<input type="text" name="rhouse" placeholder="House/Block/Lot No." style="margin-right: 0px;" >
						<input type="text" name="rstreet" placeholder="Street"size=12 style="margin-right: 0px;">
						<input type="text" name="rsubdivision" placeholder="Subdivision"size=16 style="margin-right: 0px;">
						<input type="text" name="rbarangay" placeholder="Barangay"style="margin-right: 0px;" required="">
						<input type="text" name="rcity" placeholder="City/Municipality"size="20"style="margin-right: 0px;" required="">
						<input type="text" name="rprovince" placeholder="Province"size="20" style="margin-right: 0px;" required="">
						Zip Code <input type="text" name="rzipcode"size=13 required=""><br>
				 Permanent Address<br>
						<input type="text" name="phouse" placeholder="House/Block/Lot No." style="margin-right: 0px;" >
						<input type="text" name="pstreet" placeholder="Street"size=12 style="margin-right: 0px;">
						<input type="text" name="psubdivision" placeholder="Subdivision"size=16 style="margin-right: 0px;">
						<input type="text" name="pbarangay" placeholder="Barangay"style="margin-right: 0px;" required="">
						<input type="text" name="pcity" placeholder="City/Municipality"size="20"style="margin-right: 0px;"required="">
						<input type="text" name="pprovince" placeholder="Province"size="20" style="margin-right: 0px;"required="">
						Zip Code <input type="text" name="pzipcode"size=13 required=""><br>

				 Telephone No. <input type="text" name="telephone" size=35 required="">
				 Mobile No. <input type="text" name="mobile" size=35 required="">
				 E-mail Address <input type="text" name="email"size=30 required="">
		
		<h3> II. FAMILY BACKGROUND</h3>
		 <label>Spouse's Name</label><br>
			<input type="text" name="spouse_surname" placeholder="Surname " size="40"> 
			<input type="text" name="spouse_first" placeholder="First Name" size="40"> 
			<input type="text" name="spouse_middle" placeholder="Middle Name"size="40">
			<input type="text" name="spouse_nameext" placeholder="Jr./Sr."size="20"><br>

			<label>Occupation</label> 				<input type="text" name="spouse_occupation"size="30">
			<label>Employer/Business Name</label>   <input type="text" name="spouse_employer"size="80"><br>
			<label>Business Address </label>		<input type="text" name="spouse_busadd"size="159"><br>
			<label>Telephone No. </label>			<input type="text" name="spouse_telno"><br>


		 <label>Father's Surname </label>	<br>
		 	<input type="text" name="father_surname" placeholder="Surname " size="40" required="**"> 
			<input type="text" name="father_first" placeholder="First Name" size="40" required=""> 
			<input type="text" name="father_middle" placeholder="Middle Name"size="40" required="">
			<input type="text" name="father_nameext" placeholder="Jr./Sr."size="20" ><br>

		<label>Mother's Maiden Name </label><br>
			<input type="text" name="mother_maiden"  placeholder="Maiden Name "size="35" required="">
			<input type="text" name="mother_surname"  placeholder="Surname "size="35"required="">
			<input type="text" name="mother_first"  placeholder="First Name "size="35"required="">
			<input type="text" name="mother_middle" placeholder="Middle Name "size="35"required="">

		<br>  Name of Children (Write full name and list all) <br>
			1.<input type="text" name="child1"size="75"><input type="date" name="cbday1"><br>
			2.<input type="text" name="child2"size="75"><input type="date" name="cbday2"><br>
			3.<input type="text" name="child3"size="75"><input type="date" name="cbday3"><br>
			4.<input type="text" name="child4"size="75"><input type="date" name="cbday4"><br>
			5.<input type="text" name="child5"size="75"><input type="date" name="cbday5"><br>
		</div>
	<br>
		<div class=educ>
		<h3>III. EDUCATIONAL BACKGROUND</h3>
			<table>
				<tr>
					<td>LEVEL</td>	
					<td>NAME OF SCHOOL</td>
					<td>BASIC EDUCATION<br>/DEGREE/ COURSE</td>
					<td>PERIOD OF ATTENDANCE</td>
					<td>HIGHEST LEVEL/UNITS LEARNED (if not graduated)</td>
					<td>YEAR GRADUATED</td>
					<td>SCHOLARSHIP/ ACADEMIC HONORS RECIEVED</td>
				</tr>
				<tr>
					<td>Elementary</td>
					<td><input type="text" name="elementaryn" size="35"></td>
					<td><input type="text" name="elementaryb" size="30"></td>
					<td><input type="text" name="elementaryp" size="10"></td>
					<td><input type="text" name="elementaryh" size="10"></td>
					<td><input type="text" name="elementaryy" size="10"></td>
					<td><input type="text" name="elementarys"></td>
				</tr>
				<tr>
					<td>Secondary</td>
					<td><input type="text" name="secondaryn" size="35"></td>
					<td><input type="text" name="secondaryb" size="30"></td>
					<td><input type="text" name="secondaryp" size="10"></td>
					<td><input type="text" name="secondaryh" size="10"></td>
					<td><input type="text" name="secondaryy" size="10"></td>
					<td><input type="text" name="secondarys"></td>
				</tr>
				<tr>
					<td>Vocational/ Trade Course</td>
					<td><input type="text" name="vocationaln" size="35"></td>
					<td><input type="text" name="vocationalb" size="30"></td>
					<td><input type="text" name="vocationalp"size="10"></td>
					<td><input type="text" name="vocationalh"size="10"></td>
					<td><input type="text" name="vocationaly"size="10"></td>
					<td><input type="text" name="vocationals"></td>
				</tr>
				<tr>
					<td>College</td>
					<td><input type="text" name="collegen" size="35"></td>
					<td><input type="text" name="collegeb" size="30"></td>
					<td><input type="text" name="collegep"size="10"></td>
					<td><input type="text" name="collegeh"size="10"></td>
					<td><input type="text" name="collegey"size="10"></td>
					<td><input type="text" name="colleges"></td>
				</tr>
				<tr>
					<td>Graduate Studies</td>
					<td><input type="text" name="graduaten"size="35"></td>
					<td><input type="text" name="graduateb"size="30"></td>
					<td><input type="text" name="graduatep"size="10"></td>
					<td><input type="text" name="graduateh"size="10"></td>
					<td><input type="text" name="graduatey"size="10"></td>
					<td><input type="text" name="graduates"></td>
				</tr>
			</table>
		</div>

		<input type="submit" name="submit" class=button>
	</form><br>
	<a class=button2 href=main.html> Back to Home</a>

</body>
</html>