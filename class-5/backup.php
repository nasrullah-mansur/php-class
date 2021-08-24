<?php

session_start();

// $_SESSION['one'] = 'Another session one';
// $_SESSION['tow'] = 'Another session two';
// $_SESSION['three'] = 'Another session three';

// unset($_SESSION['tow']);
// session_unset();

// session_destroy();

// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';




class Car 
{
    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function car_info()
    {
        return 'My car name is ' . $this->name . ' ' . 'My car price is ' . $this->price;
    }

}






// $output = new Car('Toyota', 2000);

// $output->name = 'Toyota';

// echo $output->car_info();



// class Room 
// {
//     public static $one = 'static one';

//     public static function one()
//     {
//         return 'this is static function';
//     }
// }


// $output = new Room();

// echo $output::one();


