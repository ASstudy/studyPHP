<?php
    echo "整数を加算します。\n";
    echo "何個加算しますか：";
    $loop = (int)trim(fgets(STDIN, 4096));

    $sum = 0;
    $ave = 0;
    $count = 0;
    for($i = 0; $i < $loop; $i++){
        echo "整数：";
        $num =  (int)trim(fgets(STDIN, 4096));
        if($num < 0){
            echo "負の数は加算しません。\n";
            continue;
        }
        $sum += $num;
        $count++;
        
    }
      
    echo "合計は".$sum."です。\n";
    if($count !== 0){
        $ave = $sum / $count;
        echo "平均は".$ave."です。";
    }
   

    //continueすっかり失念していた
