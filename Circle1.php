<?php

class Circle1
{
    public $radius;
    public $color;

    /**
     * Circle1 constructor.
     * @param $radius
     * @param $color
     */
    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }
    public function circlePerimeter(){
        return 2*3.14*$this->radius;
    }
    public function circleArea(){
        return 3.14*$this->radius**2;
    }
    public function getColor(){
        return $this->color;
    }
}