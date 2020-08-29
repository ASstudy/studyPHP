<?php
    echo "1からxまでの和を求めます。\n";
    do{
        echo "xの値：";
        $x = (int)trim(fgets(STDIN,4096));
    }while($x <= 0);
    
    echo "1から".$x."までの和は".sumUp($x)."です。";

    function sumUp($n){
        $sum = 0;
        for($i = 1; $i <= $n; $i++){
            $sum += $i;
        }
        return $sum;
    }

    //負の数がxに入らないように入れる必要がある