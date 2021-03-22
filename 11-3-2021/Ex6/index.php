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
<body>
	<?php
    function group($array,$chunk_size){
        $tempArray=[];
        for ($index = 0; $index < count($array); $index += $chunk_size) {
            $myChunk = array_slice($array,$index,$chunk_size);
            array_push($tempArray,$myChunk);
        }
        return $tempArray;
    }
    foreach(group([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16],4)as$val){
        print_r($val);
        echo "<br>";
    };
?>
</body>
</html>