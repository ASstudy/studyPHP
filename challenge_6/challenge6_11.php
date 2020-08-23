<?php
    echo "要素数：";
    $n = (int)trim(fgets(STDIN, 4096));
    $a[0] = mt_rand(1, 10);
    for($i = 1; $i < $n; $i++){
        do{
            $a[$i] = mt_rand(1, 10);
        }while($a[$i] == $a[$i - 1]);
    }
    
    for($i = 0; $i < $n; $i++){
        echo "a[".$i."] = ".$a[$i].PHP_EOL;
    }

    //連続する要素が、というところを読み飛ばしていた……
    //いや普通に頓珍漢なことを書いてはいたのですが