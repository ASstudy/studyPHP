<?php
    echo "カウントダウンします。\n";
    
    do {
        echo "正の整数値：";
        $count = (int)trim(fgets(STDIN, 4096));
    } while ($count <= 0);

    for($i=0; $i<= $count; $count--){
        echo $count."\n";
    }


//iを使わなくてもかけたらしい