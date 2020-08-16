<?php
    echo "姓：";
    $family = trim(fgets(STDIN, 4096));
    $family = mb_convert_encoding($family, "SJIS");
    var_dump($family);
    echo "名：";
    $first = trim(fgets(STDIN, 4096));
    $first = mb_convert_encoding($first, "SJIS");
    var_dump($first);
    echo "こんにちは".$family.$first."さん。";

    //なんでや日本語！！！