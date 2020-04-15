<?php

// ランダム値を幅を設定
define('RAND_MAX', 2147483647);

// PHP 7.4で実行
function calcPi(int $n) :float {

    $count = 0;
    for($i=0; $i<$n ;$i++){
        $x = rand(0,RAND_MAX)/RAND_MAX;
        $y = rand(0,RAND_MAX)/RAND_MAX;
        if($x*$x + $y*$y <= 1){
            $count++;
        }
    }
    return 4*$count/$n;
}

// PHPで実行
$time_start = microtime(true);
echo sprintf("PHPで実行： => %f\n", calcPi(10000000));
$time = microtime(true) - $time_start;
echo "{$time} 秒";

echo "<br>";

// FFI C言語で実行
$ffi = FFI::cdef( "double calcPi(int n);", __DIR__."/sampleFFI.so");

$time_start = microtime(true);
echo sprintf("C言語で実行： => %f\n", $ffi->calcPi(10000000));
$time = microtime(true) - $time_start;
echo "{$time} 秒";