<?php
    echo "要素数：";
    $n = (int)trim(fgets(STDIN, 4096));
    for($i = 0; $i < $n; $i++){
        echo "a[".$i."] = ";
        $val = (int)trim(fgets(STDIN, 4096));
        $a[$i] = $val;
    }
    echo "{ ";
    for($i = 0; $i < $n; $i++){
        if($i+1 === $n){
            echo  $a[$i]." ";
        } else{
            echo  $a[$i].", ";
        }
        
    }
    echo "}";