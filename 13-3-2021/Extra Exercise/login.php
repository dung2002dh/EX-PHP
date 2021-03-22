<?php
	session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>name</title>
    <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="./bootstrap/jquery.min.js"></script>
    <script type="text/javascript" src="./bootstrap/popper.min.js"></script>
    <script type="text/javascript" src="./bootstrap/bootstrap.min.js"></script>    
</head>
<body>
	  <main>
            <div class="container" >
                <div class="register-form" style=" float: right;">
                    <form action="" method="post">
                        <span class="title"><p>ĐĂNG NHẬP VỚI</p><span>
                            <table width="100%" >
                                <tr>
                                    <td>
                                        <button class="facebook btn" class="signup-social">
                              <i class="fa fa-facebook signup-social-icon"></i>
                        <span class=" signup-social-text">Facebook</span>
                        </button>
                                    </td>
                                    <td>
                                        <button class="google btn" class="signup-social">
                              <i class="fa fa-google signup-social-icon"></i>
                        <span class=" signup-social-text">Google</span>
                        </button>
                                    </td>
                                    <td>
                                        <button class="phone btn" class="signup-social">
                              <i class="fa fa-phone"></i>
                        <span class=" signup-social-text">Phone</span>
                        </button>
                                    </td>
                                </tr>
                            </table>                       
                      <br>
                        <span class="title"><p>HOẶC</p><span>
                        <hr>
    <form action="/action_page.php">
        <div class="form-group">
            <input type="text" class="form-control" name="user" placeholder="Username">
        </div>
        <div class="form-group">
            </label>
            <input type="password" class="form-control" name="psw" placeholder="password">
            <div class="form-check">
                <table width="100%">
                    <tr>
                        <td class="repass"> 
                            <input type="checkbox" class="form-check-input" value="">Nhớ mật khẩu
                        </td>
                        <td>
                            <button type="button" class="btn btn-link">Quên mật khẩu</button>
                        </td>
                        </tr>
                        <tr>
                        	<td >Cần xác minh email mới?<a href="">Gửi lại</a></td>
                        </tr>
                </table>
        </div>
        </div>
        <div class="submit">
            <button type="submit" class="btn btn-primary" name="login">ĐĂNG NHẬP</button>
            <br><br>
            <p class="question_center">Bạn chưa có tài khoản?</p>
            <button type="button" class="btn" style="background-color:#088A68">ĐĂNG KÝ NHANH</button><br>
        </div> 
        </form>
        </div>
        </div>
    </main>
    <?php
		if(isset($_POST['login'])){
			$_SESSION['user'] = $_POST['user'];
			$_SESSION['psw'] =$_POST['psw'] ;
			header("location: index.php");
		}
	  ?>
</body>
</html>