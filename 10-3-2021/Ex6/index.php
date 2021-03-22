<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ex6</title>
    <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.css">
</head>
<body style="background-color:black">
    <?php
        $a="";
        $count=0;
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $a=strtolower($_POST['a']);
            for($i=0;$i<strlen($a);$i++){
                if(in_array($a[$i], ['u','e','o','a','i'])){
                    $count++;
                }
            }
        }
    ?>
    <div class="container-fluid text-center" style="color: white" >
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="a">Search a</label>
            <input type="text" name="a" id="a"><br>
            <input type="submit" id="submit" class="btn btn-success" value="Submit">
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                echo "Có $count nguyên âm;
            }
        ?>
    </div>
</body>
</html>