<?php
class fuga {
    public string $str = "hoge";

    function getStr():string {
        return $this->str;
    }
}

$dummy = new fuga();
$wr = WeakReference::create($dummy);

echo "<p>毎回インスタンス使い捨て</p>";
var_dump($wr); // $dummy
echo "</br>";
echo "<p>参照元のオブジェクトが格納されている</p>";
var_dump($wr->get()); // $dummy
echo "</br>";

echo "<p>参照元のインスタンスを削除します</p>";
unset($dummy);
echo "</br>";
echo "<p>参照先の変数の中身が全て消える</p>";
var_dump($wr->get()); // $dummy
echo "</br>";
