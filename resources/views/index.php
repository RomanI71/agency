<?php

class person{
    public $name, $age;

    function show(){
        echo $this->name. "-" . $this->age;
    }
}

$p1 = new person();

$p1->name = "Yahoo";
$p1->age = 30;

$p1->show();
