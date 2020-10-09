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

class Taxi extends Car
{
    private $passenger;
    
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
        if ($this->passenger - $number >= 0){
            $this->passenger = $this->passenger - $number;
            echo $number . '人降車しました。';
        } else {
            echo '降車人数に誤りがあります。';
        }
    }
}

$car1 = new Car('ランクル', 100, 'black');

echo $car1->infomation();
echo '<br>';
echo '<hr>';

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