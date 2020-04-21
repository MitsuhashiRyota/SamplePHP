<?php
// 子クラスでパラメータの型を広げ、返り値の型を狭めることができるようになりました。
class BASE{
    public string $base = "Base";

    public function getBase() {
        return $this->base;
    }
}

class EXTEND extends BASE{

}

// 子クラスを受け取り親クラスを返却する
class A{
    public function make(EXTEND $param) : BASE{
        return new BASE();
    }
}

// 子クラスを受け取り親クラスを返却する
class B extends A{
    /** @Override */
    public function make(BASE $param) : EXTEND{
        return new EXTEND();
    }
}

// 変数A　変数Bを生成 
$a = (new A())->make(new EXTEND());
$b = (new B())->make(new BASE());

echo "<p>子クラスでパラメータの型を広げ、返り値の型を狭めることができるようになりました。</p>";

echo "<p>Class A 子クラスを受け取り親クラスの関数を呼び出す</p>";
echo "<p>＄a = (new A())->make(new EXTEND());</p>";
echo $a->getBase();


echo "<p>Class B 親クラスを受け取り子クラスの関数を呼び出す</p>";
echo "<p>＄b = (new B())->make(new BASE());</p>";
echo $b->getBase();