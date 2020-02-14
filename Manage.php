<!DOCTYPE html>
<html>
<head>
	<title>Kasama</title>
	/* This is an edit */
	<style type="text/css">

		body {
		  color: white;
		  margin: 0;
		  align-items: center;
		  background-image: url(bgimage.jpeg);
		  background-repeat: no-repeat;
		  background-size: cover;
		  display: flex;
		  height: 100vh;
		  justify-content: center;
		  text-align: center;
		}
		#kasama{
			font-family: "Times New Roman";
			font-size: 90px;
			line-height: 0;
		}
	
		.container {
		  background-color:rgba(0, 0, 0, 0.65); 
		  border-radius: 12px;
		  box-shadow: 2px 2px 4px #000000;
		  overflow: hidden;
		  padding: 50px 20px;
		  align-items: center;
		}
		button {
		  cursor: pointer; 
		  padding: 10px; 
		  margin: 4px;
		  border-radius: 12px; 
		  font-size: 20px; 
		  font-family: "Trebuchet MS";
		  outline: none;
		  background-color: none;
		  width: 250px;
		}

		p{
			font-size: 23px;
			line-height: 0;
		}

		#button1{
			border: #596781;
			background-color:#596781;
			color: white;
		}
		h2{
			color: rgba(89, 99, 124, );
			font-family: "Trebuchet MS";
			padding-top:35px ;
		}
		#button2{
			color: #596781;
			border: 1px black solid;
		}
	</style>
</head>
<body>

	<div class="container">
			<p> Which table would you like to operate? </p>
			<button id=button1 onclick="data()">Education</button> 
			<button id=button2 onclick="login()">Major Field</button> 
			<button id=button1 onclick="manage()">Scholarship</button>
	</div>

	<script type="text/javascript">
		function data(){
			window.location.href = "Education.php";
		}
		function login(){
			window.location.href = "Major.php";
		}
		function manage(){
			window.location.href = "Scholarship.php";
		}
	</script>



</body>
</html>
