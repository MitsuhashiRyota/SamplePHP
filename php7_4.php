





<?php 

/**
 * 変数に型宣言を確認するサンプルクラス
 */
 class HOGE {
   // int型
   public int $i = 0;

   // string型
   public string $s = '';

   // object型
   public ?object $obj;

   // ?typeはnull許容型
   public ?TotalPlace $nullableClassType;
 }

 /**
  * 合計金額を返却するクラス 
  */
 class TotalPlace {
   
   // 金額 型付きする前にGlobal変数のアクセスはできない 初期化必須
   public int $place = 0;

   /**
    * 金額を$placeに追加
    * 引数：int型
    * 返却：なし 
    */
   function setPlace(int $val) :void {
     $this->place = $this->place + $val;

     // A void function must not return a value 返却したらErrorが発生
     // return $this->place;
   }

    /**
     * 金額の合計値を返却
     * 引数：なし
     * 返却：int型
     */
    function getTotalPlace() :int {
      return $this->place;
    }

   /**
    * エラーが発生 合計金額を返却
    * 引数：なし
    * 返却：int型
    */
   function getErrorTotalPlace() :int {

     // returnの型が異なるError
     // Fatal error: Uncaught TypeError: Return value of TotalPlace::getErrorTotalPlace() must be of the type int, string returned

     // returnを指定していないError
     // Fatal error: Uncaught TypeError: Return value of TotalPlace::getErrorTotalPlace() must be of the type int, none returned

     // return "Hello!";
   }
 }

// 実行結果
$c = new HOGE();
$c->i = 1;
$c->s = 'string';
$c->obj = new stdClass();
$c->nullableClassType = new TotalPlace();

// 静的型付けが行われたグローバル変数を確認
echo "<p>========= 実行結果1 =========</p>";
echo "<p>INT型：</p>";
var_dump($c->i);

echo "<p>STRING型：</p>";
var_dump($c->s);

echo "<p>返却値がINT型を指定 INT型以外を返却する関数を実行：</p>";
echo "<p>コメントアウト</p>";
// コメントアウトを外すとErrorが発生 以下の処理が行われない。
//var_dump($c->nullableClassType->getErrorTotalPlace());

echo "<p>返却値がINT型を指定 関数を実行：</p>";
$c->nullableClassType->setPlace(100);
var_dump($c->nullableClassType->getTotalPlace());
echo "<br>";