<?php
    $str = 'Innately connected to the latent power of Runeterra($str), Ahri is a vastaya who can reshape magic into orbs of raw energy. She revels in toying with her prey by manipulating their emotions before devouring their life essence. Despite her predatory nature, Ahri retains a sense of empathy as she receives flashes of memory from each soul she consumes.';
    function Runeterra($str) {
        $a = explode(" ",$str);
        $array = array();
        for($i = 0; $i < count($a); $i++) {
            $count =0 ;
            foreach($a as $text) {
                if($a[$i] == $text) {
                    $count++;
                }
            }
            $array[$a[$i]] = $count;
        }
        return $array;
    }
    foreach(Runeterra($str) as $key => $text) {
        echo "[$key] => $text <br>";
    }
?>