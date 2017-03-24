<?php
/**
 * Created by PhpStorm.
 * User: vet
 * Date: 23.03.17
 * Time: 21:34
 */

class Square extends Shape
{
    use Set_Get;

    function __construct($a)
    {
//        $this->a = $a;
        $this->SetA($a);
    }

    public function resultArea()
    {
        $sideA = $this->getA();
        return $sideA * $sideA;
    }

    public function resultPerimeter()
    {
        return 4 * $this->getA();
    }
}