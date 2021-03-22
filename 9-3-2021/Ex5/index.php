 <?php
    $a = "rayy@gmail.com";
    $b = "rayy";
    $result = "";
    for ($n = 0; $n < strlen($a); $n++) {
        $result .= $a[$n];
        if ($n == strlen($b) - 1) {
            break;
        }
    }
    echo "chuỗi cần lấy là: $result";
    ?>