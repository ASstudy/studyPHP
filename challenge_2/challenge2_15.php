<?php
    echo "住所：";
    $address = trim(fgets(STDIN, 4096));
    $address = mb_convert_encoding($address, "SJIS");
    var_dump($address);
    
    echo "お住まいは".$address."ですね。";

    //なんでや日本語！！！