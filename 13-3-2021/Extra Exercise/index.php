<?php
	session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Practice 1_home</title>
</head>
<body>
	<div class=" container">
		<h1>Xin chào</h1>
		<br>
	</div>
	<?php
		if(isset($_SESSION['user']) && isset($_SESSION['psw'])) {
			echo("Username: " .$_SESSION['user']);
			echo("<br>Password: " .$_SESSION['psw']);
		}
		else{
			echo("SESSION không tồn tại");
		}
	  ?>
	  <br><a href="login.php">Đăng xuất</a>	  
</body>
</html>