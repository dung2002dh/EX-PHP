<?php
	session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Practice 1</title>
</head>
<body>
	<div class="container">
		<form method="post">
			User Name <input type="text" name="user" >
			Password <input type="password" name="psw" >
			<input type="submit" name="login" value="Login">
		</form>
	</div>
	<?php
		if(isset($_POST['login'])){
			$_SESSION['user'] =$_POST['user'];
			$_SESSION['psw'] =$_POST['psw'];
			header('location : local_login.php');
		}
	  ?>
</body>
</html>