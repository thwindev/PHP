<?php

echo '<h1>OOP</h1> <br>';

// class => properties ,methods => default public

class Car{
    // properties => public, protected, private
    private $name;
    public $price; 

    // methods

    public function setCarName($user_car_name = 'default'){
        $this->name = $user_car_name;
        return $this->name;
    }

    public function getCarName(){
        return $this->name;
    }

    public function getCarPrice($user_price = "0"){
        $this->price = $user_price;
        echo $this->price;
    }
    

}

// creat instant object
$model_BMW = new Car();

// $get_suzuki = $model_BMW->setCarName('Suzuki');
$model_BMW->setCarName('BMW');



echo $get_suzuki;

//access class members
// $car_name = $model_BMW->getCarName('BMW');//return value

// echo $car_name;
// $model_BMW->getCarPrice(520000);



//access class members
// echo $model_BMW->name.'<br>';
// echo $model_BMW->price.'<br>';