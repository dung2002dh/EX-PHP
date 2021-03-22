<?php
	session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>
	<div class="container">
	<?php
		if(isset($_SESSION['user']) && isset($_SESSION['psw'])) {
	?>
	 	<h1> xin chào</h1>
	 	<h3>Cảm ơn bạn đã đăng nhập </h3>
	<?php
		}
	  ?>
	</div>
	<a href="login.php">Đăng xuất</a>
</body>
</html>