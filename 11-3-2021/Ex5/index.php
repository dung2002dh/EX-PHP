<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>name</title>
    <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="./bootstrap/jquery.min.js"></script>
    <script type="text/javascript" src="./bootstrap/popper.min.js"></script>
    <script type="text/javascript" src="./bootstrap/bootstrap.min.js"></script>    
</head>

<body class="bg-dark text-white">
    <?php
    function reverse($request)
    {
        $reverse = "";
        if (is_numeric($request)) {
            $sub = 0;
            $zero = 1;
            if ($request[0] == "-") {
                $sub = 1;
            }
            if ($request[strlen($request)-1] == "0") {
                $zero = 2;
            }
            for ($i = strlen($request) - $zero; $i >= $sub; $i--) {
                $reverse .= $request[$i];
            }
            if ($request <0){
                return "-$reverse";
            }else{
                return $reverse;
            }
        } else {
            for ($i = strlen($request) - 1; $i >= 0; $i--) {
                $reverse .= $request[$i];
            }
            return $reverse;
        }
    }
    ?>
    <div class="container-fluid text-center">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="w-50 mx-auto my-5">
            <input type="text" name="string" id="string" placeholder="Type Your String Here" class="form-control mb-3">
            <input type="submit" name="reverse" id="reverse" value="Reverse" class="btn btn-primary">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo reverse($_POST["string"]);
        }
        ?>
    </div>
</body>
</html>