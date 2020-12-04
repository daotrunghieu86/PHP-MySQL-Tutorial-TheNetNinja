<?php 

  // Classes

  class User {

    public $name;
    public $email;

    public function __construct($name, $email) {
      $this->email = $email;
      $this->name = $name;
    }

    public function login() {
      echo $this->name . "logged in <br>";
    }
  }

  $userOne = new User('hieu', 'daohieu@gmail.com');
  echo $userOne->name . "<br>";
  echo $userOne->email . "<br>";
  // $userOne->name = 'hieutrung '; // overwrite $name
  echo $userOne->login();

  class Family {
    
    private $name_Papa;
    private $age_Papa;

    public function __construct($name_Papa, $age_Papa) {
      $this->name_Papa = $name_Papa;
      $this->age_Papa = $age_Papa;
    }

    public function getName() {
      return $this->name_Papa;
    }

    public function setName($name) {
      if (is_string($name) && strlen($name) > 1) {    
        $this->name_Papa = $name;
        return "Name is updated: $this->name_Papa";
      } else {
        return 'Not a valid name';
      }
    }

  }

  $family = new Family('Hau', 57);
  echo $family->getName() . "<br>";
  echo $family->setName('Tu') . "<br>";
  echo $family->getName() . "<br>";
  // echo $family->name_Papa; //  Error: Cannot access private property Family

  class Fruit {
    public $name;
    public $color;
    public $weight;
  
    function set_name($n) {  // a public function (default)
      $this->name = $n;
    }
    protected function set_color($n) { // a protected function
      $this->color = $n;
    }
    private function set_weight($n) { // a private function
      $this->weight = $n;
    }
  }
  
  $mango = new Fruit();
  $mango->set_name('Mango'); // OK
  // $mango->set_color('Yellow'); // ERROR: function set_color() is protected
  // $mango->set_weight('300'); // ERROR: function set_weight() is private

?>