<?php
$a = [1, 2];
$b = 3;
$c = new ArrayObject([4, 5]);

echo "<p>引数アンパックは、余計なマージとかを行わず単純に配列をくっつけたいときに便利です。</p>";
echo "<p>配列 変数 オブジェクトを用意しました。</p>";
var_dump($a);
echo "</br>";
var_dump($b);
echo "</br>";
var_dump($c);
echo "</br>";

echo "</br>";
echo "<p>数値キーは無視されて連番が振り直されます。</p>";
[$a, $b, $c]; // [[1, 2], 3, ArrayObject(4, 5)]
echo "<p>[＄a, ＄b, ＄c];</p>";
var_dump([$a, $b, $c]);

echo "</br>";

[...$a, $b, ...$c]; // [1, 2, 3, 4, 5]
echo "<p>[...＄a, ＄b, ...＄c];</p>";
var_dump([...$a, $b, ...$c]);