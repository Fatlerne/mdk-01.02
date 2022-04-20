<?php
class Worker
{
    public $name;
    public $age;
    public $salary;
}
$obj = new Worker();
$obj -> name = ("Иван");
$obj -> age = 25;
$obj -> salary = 1000;

$obj2 = new Worker();
$obj2 -> name = ("Вася");
$obj2 -> age = 26;
$obj2 -> salary = 5000;

echo "Сумма возрастов:". ($obj2 -> age + $obj -> age);
echo "<br>";
echo "Сумма зарплат:". ($obj -> salary + $obj2 -> salary);
