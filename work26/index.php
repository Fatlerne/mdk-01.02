<?php

class User
{
    private $name;
    private $age;
    public function getName()
    {
        return $this->name;
    }
            public function setName ($name)
            {
                    $this->name = $name;
            }
        public function getAge($age)
        {
            $this->age = $age;
        }
    }
    class Employee extends User 
    {
        private $salary; //Свойство зарплата
        public function getSalary()
        {
            return $this->salary;
        }
        // Сеттер зарплаты
        public function setSalary($salary)
        {
            $this->salary = salary;
        }
    }
    
        
       
        
       
            
        
    
            
    
    
            
    


