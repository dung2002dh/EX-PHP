<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.css">
    <style type="text/css">
        body{
            background-image: url(./images/images.jpg);
        }
    </style>
    <title>Ex 2</title>
</head>

<body>
    <?php
    $name = $email =$psw = $cpsw  = $err = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!filter_var($_POST["conPass"], FILTER_VALIDATE_URL)) {
            $err = "Trường confirm password cần phải có định dạng URL";
        } 
        else {
            $cpsw = $_POST["conPass"];
        }
        if (!is_numeric($_POST["password"])) {
            $err = "không được để trống trường phone";
        } 
        else {
           $psw = $_POST["password"];
        }
        if (empty($_POST["name"])) {
            $err = "Không được để trống trường name";
        } 
        else {
            $name = $_POST["name"];
        }
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $err = "Không được để trống trường email";
        } 
        else {
            $email = $_POST["email"];
        }
        $message = $_POST["message"];
    }
    ?>
    <div class="container w-100 mx-auto" >
      <div class="jumbotron">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="w-50 mx-auto">
            <span class="text-danger"><?php echo $err; ?></span>
            <input type="text" name="name" id="name" placeholder="User Name" class="mt-5 form-control" value="<?php echo $name; ?>" />
            <input type="email" name="email" id="email" placeholder="Email" class="mt-2 form-control" value="<?php echo $email; ?>" />
            <input type="password" name="password" id="password" placeholder="password" class="mt-2 form-control" value="<?php echo$psw; ?>" />
            <input type="password" name="conPass" id="conPass" placeholder="Cofirm password" class="mt-2 form-control" value="<?php echo $cpsw; ?>" />
           
            <input type="submit" name="submit" id="submit" class="mt-2 bg-primary text-white form-control font-weight-bolder" value="REGISTER">
        </form>
      </div>
    </div>
    <div class="container text-center">
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if (filter_var($_POST["conPass"], FILTER_VALIDATE_URL) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) && is_numeric($_POST["password"]) && !empty($_POST["name"])) {
                echo "Your Name: $name <br>";
                echo "Your Email: $email <br>";
                echo "Your Phone Number:$psw <br>";
                echo "Your conPass: $cpsw <br>";
                echo "Your Message: $message <br>";
            }
        }
        ?>
    </div>
</body>
</html>