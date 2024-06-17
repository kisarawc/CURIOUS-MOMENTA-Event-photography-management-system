<?php include ('header.php'); ?>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/login main.css">
</head>

<body>

<div class="login-h2">

	<h2>LOGIN</h2>

</div>


<form action="login.php" method="post">


 	<div class="container">
	    <label for="uname"><b>Username</b></label>
	    <input type="text" placeholder="Enter Username" name="username" required>
			<br>
	    <label for="psw"><b>Password</b></label>
	    <input type="password" placeholder="Enter Password" name="password" required>
    <div class="login-button">   
  		<button type="submit" >Login</button>
    </div><!-- login-button -->
	    <label>
	      <input type="checkbox" checked="checked" name="remember"> Remember me
	    </label>
  	</div>

</form>



</body>

<?php include ('footer.php'); ?>
</html>
