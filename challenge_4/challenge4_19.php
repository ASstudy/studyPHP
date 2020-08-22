<?php
    echo "nの値：";
    $n = (int)trim(fgets(STDIN, 4096));

    $ans = 0;
    for($i=1; $i <= $n; $i++){
        $ans = $i*$i;
        echo $i."の２乗は".$ans."\n";
    }
    
    //二つの変数の同時制御も可能らしい


