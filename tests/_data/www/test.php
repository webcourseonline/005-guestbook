<?php
// Создаем новый класс Coor:
class Coor {
// данные (свойства):
    var $name;
    public static $creator;

    public function __construct()
    {
        $this->name = 5645646;
        self::$creator = time();
    }

// методы:
    function Getname() {
        echo $this->name;
    }

    static function getCreator(){
        return self::$creator;
    }

    function Setname($name) {
        $this->name = $name;
    }

}

// Создаем объект класса Coor:
//Coor::getCreator();


$object = new Coor;
$object2 = new Coor;


$object::$creator = "WEBcourse";


$object2::$creator = 123;
$object->creator = "frew";

Coor::getCreator();
// Теперь для изменения имени используем метод Setname():
$object->Setname("Nick");
// А для доступа, как и прежде, Getname():
$object->Getname();
// Сценарий выводит 'Nick'

$sum = (int)((0.1 + 0.7) * 10);
echo $sum;
// думаете 8? проверьте ...
// или лучше так: "Вы еще не используете BC Math? Тогда мы идем к вам!"
phpinfo();
