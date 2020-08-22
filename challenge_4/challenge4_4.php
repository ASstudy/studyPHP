<?php
    echo "整数A：";
    $a = (int)trim(fgets(STDIN, 4096));
    echo "整数B：";
    $b = (int)trim(fgets(STDIN, 4096));
 
    if($b > $a){
        $t = $a;
        $a = $b;
        $b = $t;
    }
    do {
        echo $b." "; 
        $b += 1;
    } while ($a !== $b);