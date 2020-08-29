<?php
    //byte型がない？
    // echo "byte　　型整数aの値：";
    // $a = (byte)trim(fgets(STDIN,4096));
    //short型がない？
    // echo "short　型整数bの値：";
    // $b = (short)trim(fgets(STDIN,4096));
    echo "int　型整数cの値：";
    $c = (int)trim(fgets(STDIN,4096));
    //long型がない？
    // echo "long　 型整数dの値：";
    // $d = (long)trim(fgets(STDIN,4096));

    function printBits($num){
        for($i = 31; $i >= 0; $i--){
          echo ((($num >> $i & 1) == 1) ? '1' : '0');
        }
    }

    echo "cのビット：";
    printBits($c);

    //問題文に出て来る型が悉く存在せず、多重定義を使用にもできない状態でした。
    //そもそも型に応じてビットの値が違うようなので、整数型以外だとだめそうなので断念