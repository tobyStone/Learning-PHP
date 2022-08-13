<?php

class Dog {

    private $age;
    private $weight;
    private $colour;

    public function setValues( int $yrs, int $lbs, string $fur ){
        $this->age= $yrs;
        $this->weight= $lbs;
        $this->colour = $fur;
    }

    public function bark(){
        echo 'Woof Woof!<br>';}

    public function setAge( int $yrs ){
        $this->age = $yrs;
    }

    public function setWeight( int $lbs ){
        $this->weight = $lbs;
    }

    public function setColour( string $fur ){
        $this->colour = $fur;
    }


    public function getAge(){
        return $this->age;
    }

    public function getWeight(){
        return $this->weight;
    }

    public function getColour(){
        return $this->colour;
    }

}

$fido= new Dog();
$bob= new Dog();
$bob->setValues(4, 21, 'blonde');

$fido->setAge(3);
$fido->setWeight(15);
$fido->setColour('brown');

echo 'Fido is a '.$fido->getColour().' dog.<br>';
echo 'Fido is '.$fido->getAge().' years old.<br>';
echo 'Fido is '.$fido->getWeight().'lbs in weight.<br>';

echo 'Bob is '.$bob->getAge().' years old with '.$bob->getColour().
' hair and weighs '.$bob->getWeight().' pounds.<br>';
$fido->bark();
?>

