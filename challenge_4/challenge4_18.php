<?php
    echo "整数値：";
    $num = (int)trim(fgets(STDIN, 4096));

    $count = 0;
    for($i=1; $i <= $num; $i++){
        if($num % $i === 0){
            echo $i." ";
            $count++;
        }
    }
    echo "\n約数は".$count."個です。";


