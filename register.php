

<html>
<head>
<title>Register</title>
<style>
	div {
    width: 550px;
	padding:25px;
    border: 5px solid gray;
    margin-top: 50;
	margin-left: 420;
	}
	button {
	background-color: #4CAF50;
    color: white;
	border: none;
    cursor: pointer;
	margin-left: 200;
	padding :9px;
	}
	button1 {
	background-color: #4CAF50;
    color: white;
	border: none;
    cursor: pointer;
	margin-left: 10;
	padding :9px;
	}
	
</style>
</head>
<body>
	<font size=8 color= ><center>Register</center></font>
	<div>
		
		<form action="server.php" method="post">



		<label>Username : </label> 
		<input type="text" placeholder="Enter your username" name="username" required >
		<br><br>
		
		<label>Email : </label> 
		<input type="email" placeholder="Enter Email" name="email" required >
		<br><br>

		<label>Password : </label> 
		<input type="Password" placeholder="Enter Password" name="password" required >
		<br><br>

		<label>Phone Number : </label> 
		<input type="Phonenumber" placeholder="Enter Ph.No" name="phonenumber" pattern="[6-9]{1}[0-9]{9}" required >
		<br><br>
		

		<label>Age : </label> 
		<input type="number" placeholder="Enter your age" name="age" required>
		<br><br>

		<input type="radio" id="male" name="gender" value="0" required>
		<label for="male">Male</label><br>
		<input type="radio" id="female" name="gender" value="1">
		<label for="female">Female</label><br>

		<br>



		<input type="submit" name="submit" value="Submit">



        </form>
       
       

	</div>
	
        </body>
</html>