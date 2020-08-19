<?php
    echo "正方形を表示します。\n段数は：";
    $num = (int)trim(fgets(STDIN,4096));

    if($num > 0){
        for($i=0; $i < $num; $i++){
            for($j = 0; $j < $num; $j++){
            echo "*";
        }
        echo "\n";
    } 
} else {
    echo "正の整数を入力してください。";
}

//最後はおまけでつけたし

