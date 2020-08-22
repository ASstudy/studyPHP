<?php
    echo "カウントダウンします。\n";
    
    do {
        echo "正の整数値：";
        $count = (int)trim(fgets(STDIN, 4096));
    } while ($count <= 0);

    while($count >= 0){
        echo --$count." ";
    }

    echo "ｘの値は".$count."になりました。";

    //先にデクリメントされるので5と同じ値を入力しても5で表示された数より-1された数が表示されるはず