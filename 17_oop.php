<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way.
  OOP consists of classes that can hold "properties" and "methods".
  Objects can be created from classes.
*/

// public accessed from anywhere
// private accessed from within the class
// protected accessed from inside the class and inheriting classes

class User {

    // PROPERTIES attributes of a class
    public $name;
    public $email;
    public $password;

    // CONSTRUCTOR
    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // METHOD function of a class
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }

    function set_email($email){
        $this->email = $email;
    }
    function get_email(){
        return $this->email;
    }
}


// Instantiate a user object
$user1 = new User("TestName","TestEmail","TestPassword");
$user2 = new User("TestName2","TestEmail2","TestPassword2");

// if public access like this:
// $user1 -> name = "Klee"

$user1->set_name("Klee");
$user2->set_name("Duderman");

echo $user1->get_name();
echo $user1->get_email();

echo $user2->get_name();


class Employee extends User {
    public $title;

    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name,$email,$password);
        $this->title = $title;
    }

    public function get_title(){
        return $this->title;
    }

}


$employee1 = new Employee("Steve","anemail","apassword","Manager");

echo $employee1->get_title();