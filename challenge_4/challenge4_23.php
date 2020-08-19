<?php


echo "ピラミッドを表示します。\n段数は：";
    $num = (int)trim(fgets(STDIN,4096));

    for($i=1; $i <= $num; $i++){
        for($j = 0; $j < $num - $i; $j++){
            echo " ";
        }
        for($j = 0; $j < 2*$i - 1; $j++){
            echo "*";
        }
    echo "\n";
} 

//このあたりを考えるの非常に苦手……



