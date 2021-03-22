<?php
         const N =5;
        for ($i=1; $i<= N ; $i++) {
            $gt=1;
            for($j=$i; $j>=1; $j--) {
                $gt*=$j;
            }
            echo "$i! = $gt <br>";
        }
?>