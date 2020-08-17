<?php
    echo "何個*を表示しますか：";
    $num = (int)trim(fgets(STDIN,4096));

    if($num > 0){
        $count = intdiv($num, 5);
        $last = $num % 5;
        for($i=0; $i < $count; $i++){
            echo "*****\n";
        }
        for($j = 0; $j < $last; $j++){
            echo "*";
        }
    } 
    //あまりの数で改行するのもありそう
