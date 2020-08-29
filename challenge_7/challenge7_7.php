<?php
    echo "左下直角の三角形を表示します。\n"; 
    
    do{
       echo "段数は："; 
       $n = (int)trim(fgets(STDIN, 4096));
    } while (0 > $n);
    for($i = 1; $i <= $n; $i++){
        putStars($i);
        echo "\n";
    }

    function putChars($c, $n){
        while($n-- > 0){
            echo $c;
        }
    }

    function putStars($n){
        putChars("*", $n);
    }

    //やっぱりこの手の表示系で詰まる……