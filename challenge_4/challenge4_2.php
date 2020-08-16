<?php
    do {
        echo "３桁の正の整数値：";
        $num = (int)trim(fgets(STDIN, 4096));
    } while ($num < 100 || $num > 999);

    echo $num."と入力しましたね。";

    //うっかり&&にしていたようです