<?php
    (float)$f = 0.0;
    (int)$i = 0;
    $divI = 0;

    echo "   float          int\n";
    echo "-------------------------\n";
    for($j = 0; $j < 1000; $j++){
        $f += 0.001;
        $i++;
        $divI = $i / 1000;
        echo "  ".$f."         ".$divI."\n";
    }

    //PHPとJavaだとやっぱり同じような動作でも出力結果がかわるなぁ……
    
    
    
        
    