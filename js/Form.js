<html>
	<head>
		<title>JavaScript</title>
		<script type = "text/javascript">
			function welcome()
			{
				var na = document.getElementById("fn").value;

				
				document.write("<center><h1>Australian College of Business and Technology</h1></center>")
				document.write("Welcome to ACBT " + na);
			}
			function login()
			{
				var user = document.getElementById("un").value;
				var pass = document.getElementById("pass").value;
				
				if(user == "" && pass == "")
				{
					document.write("Invalid Entry"); 
					return;
				}
				
				if(user == "")
				{
					document.write("Invalid Entry");
					return;
				}
				
				if(pass == "")
				{
					document.write("Invalid Entry");
					return;
				}
				
				document.write("<center><h1>Australian College of Business and Technology<hr></h1></center>")
				document.write("Welcome to ACBT " + user);
				document.write("<br><br>Password " + pass);
			
			}
		</script>
	</head>
	<body>
		<center><h2>Login Panel</h2></center>
		<form>
			User Name&emsp;&emsp;:&emsp;
			<input type = "text" id = "un">
			<br><br>
			Password&emsp;&emsp;&nbsp;&nbsp;&nbsp;:&emsp;
			<input type = "password" id = "pass">
			<br><br>
			<input type = "button" value = "SUBMIT" onclick = "login()">
			<input type = "reset" value = "CANCEL">
			
		</form>
		
		
		<form>
			Name&emsp;&emsp;:&emsp;
			<input type = "text" id = "fn">
			<br><br>
			<input type = "button" value = "SUBMIT" onclick = "welcome()">
			
		</form>
		
	</body>
</html>