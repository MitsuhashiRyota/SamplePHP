<?php

 /**
  * NULL合体代入演算子
  */
  class DefaultParams {

    function defaultParamChecker() {
      
      // 各型のデフォルト値を設定
      $arry = [
        null,  // "hoge"
        false, // false
        true,  // true
        '',    // ""
        0,     // 0
      ];

      // 配列に入れたデフォルト値を変数に代入し、代入した値に変化があったか確認
      foreach($arry as $i){
        $i ??= 'hoge';
        var_dump($i);

        // 値を確認
        echo "<p>";
        echo "値確認：";
        echo $i;
        echo "</p>";
      }
    }
  }

// 実行結果2
$arry = [
    null,  // "hoge"
    false, // false
    true,  // true
    '',    // ""
    0,     // 0
];

echo "<p>ULL合体代入演算子</p>";
echo "<p><h4>変数が未定義 or 変数の中身がNULLの場合 ??= で代入された値でデフォルト値として使われる</h4></p>";

echo "<p>変数に格納する値を確認：<p>";
var_dump($arry);

echo "<p>========= 実行結果2 =========</p>";
$d = new DefaultParams();
$d->defaultParamChecker();


echo "<br>";
echo "<p>１つ目のパラメーターがNULLなので、hogeが代わりに代入されています</p>";