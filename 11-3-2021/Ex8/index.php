<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ex8</title>
    <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="./bootstrap/jquery.min.js"></script>
    <script type="text/javascript" src="./bootstrap/popper.min.js"></script>
    <script type="text/javascript" src="./bootstrap/bootstrap.min.js"></script>    
</head>
<body class="bg-dark text-white">
    <?php
    function checkAnagram($str1, $str2)
    {
        if (strlen($str1) != strlen($str2)) {
            return false;
        } else {
            for ($i = 0; $i < strlen($str1); $i++) {
                if (strpos($str2, $str1[$i])) {
                    continue;
                } else {
                    return false;
                }
            }
            return true;
        }
    }
    ?>
    <div class="container-fluid text-center">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="w-50 mx-auto mt-5">
            <input type="text" name="string1" id="string1" placeholder="Type Your First String Here" class="form-control mb-3">
            <input type="text" name="string2" id="string2" placeholder="Type Your Second String Here" class="form-control mb-3">
            <input type="submit" name="count" id="count" value="Count Words" class="btn btn-primary">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(checkAnagram($_POST["string1"], $_POST["string2"])){
                echo "True";
            }else{
                echo "False";
            };
        }
        ?>
    </div>
</body>
</html>