<?php
    echo "三角形の面積を求めます。\n";
    echo "底辺：";
    $bottom = trim(fgets(STDIN,4096));
    echo "高さ：";
    $height = trim(fgets(STDIN,4096));
    $area = $bottom * $height / 2;
    echo "面積は".$area."です。";