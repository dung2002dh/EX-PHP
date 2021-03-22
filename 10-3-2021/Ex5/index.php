<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.css">
    <title>Ex 5</title>
    <style type="text/css">
        h1{
            color: red;
        }
        span{
            font-size: 20px;
        }
    </style>
</head>
<body>
    <?php
        $a=$b=$result=$error="";
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            if(is_numeric($_POST["numberA"])&&is_numeric($_POST["numberB"])){
                $a=$_POST["numberA"];
                $b=$_POST["numberB"];
                if(isset($_POST["sum"])){
                    $result=$a+$b;
                }
                if(isset($_POST["sub"])){
                    $result=$a-$b;
                }
                if(isset($_POST["mul"])){
                    $result=$a*$b;
                }
                if(isset($_POST["div"])){
                    $result=$a/$b;
                }
            }else{
                $error="Số a và b phải cùng là số";
            }
        }
    ?>
    <div class="container-fluid w-25 mx-auto">
        <h1 class="text-center"> Thực hành toán tử</h1>
        <span class="text-danger"><?php echo $error;?></span>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="numberA">Nhập số a</label>
            <input type="text" name="numberA" id="numberA" class="form-control">
            <label for="numberB">Nhập số b</label>
            <input type="text" name="numberB" id="numberB" class="form-control">
            <input type="submit" name="sum" id="sum" value="a + b" class="btn btn-success mt-2">
            <input type="submit" name="sub" id="sub" value="a - b" class="btn btn-primary mt-2">
            <input type="submit" name="mul" id="mul" value="a * b" class="btn btn-danger mt-2">
            <input type="submit" name="div" id="div" value="a / b" class="btn btn-warning mt-2">
        </form>
        <br>
        <span class="text-success"><?php echo "Kết quả là: ". $result;?></span>
    </div>
</body>
</html>