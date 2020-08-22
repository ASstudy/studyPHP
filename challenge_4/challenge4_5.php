<?php
    echo "カウントダウンします。\n";
    
    do {
        echo "正の整数値：";
        $count = (int)trim(fgets(STDIN, 4096));
    } while ($count <= 0);

    // do {
    //     echo $count." ";
    //     $count -= 1;
    // } while ($count !== -1);
    while($count >= 0){
        echo $count--." ";
    }

    echo "ｘの値は".$count."になりました。";

    //普通にwhileで後半書けばよかった