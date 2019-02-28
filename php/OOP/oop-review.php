<?php
/* 寫下自己對 PHP 物件導向的應用與觀念 */

class People
{
    /* 屬性 */
    private $name;
    private $age;
    private $programmingSkill;

    /* 建構式 */
    public function __construct($name, $age, $programmingSkill)
    {
        $this->name = $name;
        $this->age = $age;
        $this->programmingSkill = $programmingSkill;
    }

    /* 方法 */
    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

}

$people = new People('Peter', 34, 'C');
// 呼叫 __get()
echo $people->name . ' is now ' . $people->age . ', and he can coding use : ' . $people->programmingSkill;
// 呼叫 __set()
$people->programmingSkill = 'C++';
echo $people->name . ' is now ' . $people->age . ', and he can coding use : ' . $people->programmingSkill;
