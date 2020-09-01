<?php
class Student {
    private $data = array();
 
    public function __set($name, $value) 
    {
        $this->data[$name] = $value;
    }
}
 
$objStudent = new Student();
 
//  __set() called
$objStudent->phone = '080 2385 4332';
?>



<?php
class Student {
    private $data = array();
 
    public function __set($name, $value) 
    {
        $this->data[$name] = $value;
    }
 
    public function __get($name) 
    {
        If (isset($this->data[$name])) {
            return $this->data[$name];
        }
    }
}
 
$objStudent = new Student();
 
//  __set() called
$objStudent->phone = '080 2385 4332';   
 
//  __get() called
echo $objStudent->phone;                      
?>