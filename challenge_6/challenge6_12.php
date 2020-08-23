<?php
    do{
        echo "要素数：";
        $n = (int)trim(fgets(STDIN, 4096));
    } while ($n > 10);
    
    for($i = 0; $i < $n; $i++){
        do{
            $a[$i] = mt_rand(1, 10);
            for($j = 0; $j < $i; $j++){
                if($a[$j] == $a[$i]){
                    break;
                }
            }
        } while ($j < $i);
    }
    
    for($i = 0; $i < $n; $i++){
        echo "a[".$i."] = ".$a[$i].PHP_EOL;
    }

    //こ、このあたりの構造とっても苦手……