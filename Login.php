<html>
	<head>
		<title>Log In</title>
		<style>

		body {
		  color: white;
		  margin: 0;
		  align-items: center;
		  background-image: url(images/bgimage.jpeg);
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
		  padding: 50px 50px;
		  align-items: center;

		}
		.button {
		  cursor: pointer; 
		  padding: 10px; 
		  margin: 4px;
		  border-radius: 12px; 
		  font-size: 20px; 
		  font-family: "Trebuchet MS";
		  outline: none;
		  background-color: none;
		  width: 250px;
		  border: #596781;
	      background-color:#596781;
		  color: white;
		}
		
		h2{
			color: rgba(89, 99, 124, );
			font-family: "Trebuchet MS";
			padding-top:35px ;
		}

		 #fillup {
			width: 200px;
			height: 40px;
			margin: 15px;
			font-size: 16px;
		}


		</style>
	</head>
	
	<body>	

		<div class="container">

			
		
			<h1 id=kasama> kasama </h1>
			<form name="myForm">
				Username: <input name="name" type="text"  required="" id="fillup"><br>
				Password: <input name="pass" type="password" required="" id="fillup"><br>
			</form>
						<input type="submit" onclick="validate();" value="Log In" class="button">
			

	</div>



	<script>
		var a = "admin"; 
		var b = "admin";
		function validate() {
			
			if (( document.myForm.pass.value != b ) && ( document.myForm.name.value == a )){
				alert("Password does not Match");
			}
			
			else if (( document.myForm.pass.value == b ) && ( document.myForm.name.value != a )){
				alert("Username does not Match");
			}
			
			else if (( document.myForm.pass.value != b ) && ( document.myForm.name.value != a )){
				alert("Username and Password does not Match");
			}
			else if (( document.myForm.pass.value == b ) && ( document.myForm.name.value == a )){
				window.location.href = "Applicants.php";
			}
			
		}
	</script>

	
	</body>
	
</html>