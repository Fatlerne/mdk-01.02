<?php

Interface Iuser
{
Public Function getName();
Public Function setName($_name);
Public Function getAge ();
Public Function setAge($_age);
}

Interface IEmployee extends Iuser
{
  Public Function getSalary ();
  Public Function setSalary($_salary);
}
 class Employee implements IEmployee {
      private $name;
      private $age;
      private $salary;
     public function getAge() {
        return $this->age;
    }

    public function getName() {
        return $this->name;
    }

    public function getSalary() {
        return $this-> salary;
    }

    public function setAge($_age) {
        $this->age = $_age;
    }

    public function setName($_name) {
        $this->name = $_name;
    }

    public function setSalary($_salary) {
        $this->salary = $_salary;
    }
}
$obj = new Employee();
$obj -> setName ("Антон");
$obj -> setAge (23);
$obj -> setSalary  (120000);

echo ($obj -> getName());
echo "<br>";
ECHO  ($obj -> getAge());
echo "<br>";
ECHO ($obj ->getSalary());