<?php

// 以下にCarクラスを定義して、当プログラムを実行した時にエラーがでないようにして下さい。
class Car{

    public $name;
    public $number;
    public $color;

    public function __construct($name ,$number, $color){
        $this->name = $name;
        $this->number = $number;
        $this->color =  $color;

    }

    public function getName()
    {
        return $this->name;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }


    public function infomation()
    {
        echo '車の車種:' .  $this->name . '、' . '車体番号:' . $this->number . '、' . 'カラー:' . $this->color . 'です。';
    }

}

// 以下を実行した時にエラーがでないようにして下さい。
// Carクラスのインスタンスを生成
// 引数 : 車名、車体番号、カラー
$car1 = new Car('ランクル', 100, 'black');

// 車名(車種)を取得
echo $car1->getName();
echo '<br>';

// 車体番号を取得
echo $car1->getNumber();
echo '<br>';

// カラーを取得
echo $car1->getColor();
echo '<br>';

// 車の情報表示を表示
echo $car1->infomation();
echo '<br>';

// 車名(車種)を更新
$car1->setName('アルファード');
echo $car1->getName();
echo '<br>';

// 車体番号を取得
$car1->setNumber(200);
echo $car1->getNumber();
echo '<br>';

// カラーを取得
$car1->setColor('red');
echo $car1->getColor();
echo '<br>';

// 車の情報表示を表示
echo $car1->infomation();
echo '<br>';


class Taxi extends Car
{
    public $passenger;

    public function infomation()
    {
        echo '車の車種:' . $this->name . '、' .  '車体番号:' . $this->number . '、' . 'カラー:' . $this->color . '、' . '乗車人数は' . $this->passenger . '人です。<br>';
    }

    public function pickUp($passenger)
    {
        $this->passenger = $passenger;
    }

    public function lower($number)
    {
        if ($this->passenger - $number >= 0) {
            $this->passenger = $this->passenger - $number;
            echo $number . '人降車しました。';
        } else {
            echo '降車人数に誤りがあります。';
        }
    }
}

// Taxiクラスのインスタンスを生成
$taxi1 = new Taxi('クラウンのタクシー', 222, 'black');

// 3人乗車
$taxi1->pickUp(3);

// タクシーの情報表示を表示
echo $taxi1->infomation();
echo '<br>';

// 2人降車
$taxi1->lower(2);
echo '<br>';

// 2人降車
$taxi1->lower(2);

?>