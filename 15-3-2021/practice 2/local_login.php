<?php
	session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Practice 2 local</title>
</head>
<body>
	<?php
		if(isset($_SESSION['user']) && isset($_SESSION['psw'])) {
			echo("Thông tin tài khoản hoặc mật khẩu không chính xác");
		}
		else if(isset($_SESSION['user']) =="admin" && isset($_SESSION['psw']) =="admin") {
			header('location : index.php');
		}
		else{
			echo("Tài khoản không tồn tại");
		}
	  ?>
	  <br><a href="login.php">Quay lại</a>	  
</body>
</html>