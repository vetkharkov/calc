<?php

/**
 * Created by PhpStorm.
 * User: vet
 * Date: 24.03.17
 * Time: 0:06
 */
class Rectangle extends Shape
{
    use Set_Get;

    function __construct($a, $b)
    {
//        $this->a = $a;
        $this->SetA($a);
//        $this->b = $b;
        $this->SetB($b);
    }

    public function resultArea()
    {
        $sideA = $this->getA();
        $sideB = $this->getB();
        return $sideA * $sideB;
    }

    public function resultPerimeter()
    {
        return (2 * $this->getA()) + (2 * $this->getB());
    }
}