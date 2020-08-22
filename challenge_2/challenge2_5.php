<?php
    $input = null;
    echo "整数値：";
    $input = trim(fgets(STDIN,4096));
    echo $input."と入力しましたね。";

    //通常のままだと改行文字が含まれているようなので、改行を除く必要がある