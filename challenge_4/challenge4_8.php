<?php
    echo "何個*を表示しますか：";
    $num = (int)trim(fgets(STDIN,4096));

    if($num > 0){
        $i = 0;
        while ($i < $num) {
             if($i % 2 === 0){
                echo '*';
                $i++;
             } else {
                 echo '+';
                 $i++;
             }
        }
    } 
    //*+をセットにして奇数の場合のみ*を出力するのもあり