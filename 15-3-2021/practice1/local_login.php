<?php
	session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Practice 1_home</title>
</head>
<body>
	<?php
		if(isset($_SESSION['user']) && isset($_SESSION['psw'])) {
			echo("Username: " .$_SESSION['user']);
			echo("<br>Password: " .$_SESSION['psw']);
		}
		else{
			echo("lỗi sesion không có sẵn");
		}
	  ?>
	  <br><a href="login.php">Đăng xuất</a>	  
</body>
</html>