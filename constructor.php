
<?php
class Student {
    private $name;
    private $email;
 
    public function __construct($name, $email) 
    {
        $this->name = $name;
        $this->email = $email;
    }
}
 
$objStudent = new Student('John', 'john@tutsplus.com');
?>



<?php
class Student {
    private $name;
    private $email;
 
    public function __construct($name, $email) 
    {
        $this->name = $name;
        $this->email = $email;
    }
 
    public function __destruct() 
    {
        echo 'This will be called when the script is shut down...';
        // save object state/other clean ups
    }
}
 
$objStudent = new Student('John', 'john@tutsplus.com');
?>