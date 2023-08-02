<?php



// Define a Class (syntax)

class Fruit1 {
  // code
};

// Access Modifiers: public, private, protected
// public - can be accessed from anywhere
// private - can only be accessed from inside the class
// protected - can only be accessed from inside the class and by inheriting classes




//Note: In a class, variables are called properties and functions are called methods!

class Fruitt {
    // Properties
    public $name;
    public $color; 
};

//object
// $orange = new Fruitt();
// $orange->name = 'Orange';
// echo $orange->name;


echo "<br>";






class Fruit {
    // Properties
    public $name;
    public $color;
  
    // Methods
    function set_name($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
};


//object 
// $apple = new Fruit();
// $apple->set_name('Apple');
// echo $apple->get_name();

// echo "<br>";

// $banana = new Fruit();
// $banana->set_name('Banana');
// echo $banana->get_name();


echo "<br>" ;
//You can use the instanceof keyword to check if an object belongs to a specific class:
// var_dump($apple instanceof Fruit);



echo "<br>" ;









//constractor function
class car {
    public $name;
    public $color;
  
    function __construct($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
  }
  
  // $car1 = new car("BMW");
  // echo $car1->get_name();





  echo "<br>" ;


  //The __destruct Function
  class car1 {
    public $name;
    public $color;
  
    function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    function __destruct() {
      echo "The car is {$this->name} and the color is {$this->color}.";
    }
  }
  
  // $car = new car1("Volvo" , "red");



  echo "<br>" ;


  class car2 {
    // Properties
    public $name;
    public $color;
  
    // Methods
    function set_name($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
    function set_color($color) {
      $this->color = $color;
    }
    function get_color() {
      return $this->color;
    }
  }
  
  // $carA = new car2();
  // $carA->set_name('toyota');
  // $carA->set_color('Red');
  //   echo "The car is {$carA->get_name()} and the color is {$carA->get_color()}.";
    
    
echo "<br>" ;


















// What is Inheritance?
// Inheritance in OOP = When a class derives from another class.
//The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.
//An inherited class is defined by using the extends keyword.


class Fruit3 {
  public $name;
  public $color;

  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

// Strawberry is inherited from Fruit

class Strawberry extends Fruit3 { }

$strawberry = new Strawberry("Strawberry", "red");
$strawberry->intro();
echo "<br>" ;
echo $strawberry->name;



echo "<br>" ;
echo "<br>" ;





class orange1 extends Fruit3 {
  public function message() {
    echo "What is this furit? ";
  }
}
$orange1 = new orange1("orange1", "orange");
$orange1->message();
$orange1->intro();





echo "<br>" ;
echo "<br>" ;






//Inheritance and the Protected Access Modifier

class Fruit4 {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  protected function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}




//The wrong way
class apple1 extends Fruit4 {
  public function message() {
    echo "What is this furit? ";
  }
}

$apple1 = new apple1("apple1", "red");  // OK. __construct() is public
$apple1->message(); // OK. message() is public
//$apple1->intro(); // ERROR. intro() is protected


echo "<br>" ;
echo "<br>" ;


//The right way
class banana extends Fruit4 {
  public function message() {
    echo "Am I a fruit or a berry? ";
    echo "<br>" ;
    $this -> intro();
  }
}

$banana = new banana("banana", "yellow"); // OK. __construct() is public

$banana->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class







echo "<br>" ;
echo "<br>" ;




//Overriding Inherited Methods
//Inherited methods can be overridden by redefining the methods (use the same name) in the child class.
class Fruit5 {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The fruit5 is {$this->name} and the color is {$this->color}.";
  }
}

class grapes extends Fruit5 {
  public $weight;

  public function __construct($name, $color, $weight) {
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight;
  }
  public function intro() {
    echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
  }
}

$grapes = new grapes("grapes", "green",50);
$grapes->intro();






echo "<br>" ;
echo "<br>" ;





//Class Constants

class Goodbye {
  const MESSAGE = "Thank you!";
};

echo Goodbye::MESSAGE;

//We can access a constant from outside the class by using the class name followed by the scope resolution operator (::) followed by the constant name




echo "<br>" ;
echo "<br>" ;

//we can access a constant from inside the class by using the self keyword followed by the scope resolution operator (::) followed by the constant name


class Goodbye2 {
  const MESSAGE2 = "Thank you!";
  
  public function byebye() {
    echo self::MESSAGE2;
  }
};

$goodbye = new Goodbye2();
$goodbye->byebye();






echo "<br>" ;
echo "<br>" ;



final Class ParentGFG{
  function print(){
   echo "Parent class";
 }
}
class ChildGFG extends ParentGFG{
 function print(){
     echo "Child class";
 }
}

$object= new ChildGFG();
$object->print();




Class ParentGFG{
  final function print(){
   echo "Method in parent class";
 }
}
class ChildGFG extends ParentGFG{
 function print(){
     echo "Overrides parent print method";
 }
}
$object= new ChildGFG();
$object->print();



echo "<br>" ;
echo "<br>" ;
?>