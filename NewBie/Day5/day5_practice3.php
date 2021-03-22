<?php  
        $j=0;
        $array[0]="E";
        $array[1]="N";
        $array[2]="G";
        while($j<=2){
            if($j==2){
                echo "$array[$j]";
            }
            else{
                echo "$array[$j]- ";
            }
            $j++;
        }
?>