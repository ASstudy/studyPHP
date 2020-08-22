<?php
    echo "整数：";
    $num = (Int)trim(fgets(STDIN, 4096));

    $eight = decoct($num);
    $sixTeen = dechex($num);

    echo "8進数では".$eight."です。\n";
    echo "16進数では".$sixTeen."です。\n";