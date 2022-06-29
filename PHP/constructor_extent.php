<?php

echo '<h1>Constructor & Inheritence</h1> <br>';

class Animals{

    public $name;
    public $color;
    public $say_somethings;

    // constructor
    public function __construct($name = '', $color = '',$say_somethings = ''){
        $this->name = $name;
        $this->color = $color;
        $this->$say_somethings = $say_somethings;
        echo 'Name: '.$name.'<br>';
        echo 'Color: '.$color.'<br>';
        echo 'Sound: '.$say_somethings.'<br>';
    }

    public function brak(){
        echo '<br>brak brak!';
    }
}

// inheritence from Animals class
class Dog extends Animals {}

echo '<br>';
// Animal object
$dog = new Animals('Golden Retiver','Gold','wok wok');

echo '<br>';

// Dog object
$wolf = new Dog('Wolf', 'White', 'Fuck Hooman!');
$wolf->brak();