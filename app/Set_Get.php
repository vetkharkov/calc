<?php
require_once 'Shape.php';
require_once 'Circle.php';
require_once 'Rectangle.php';
require_once 'Triangle.php';
/**
 * Created by PhpStorm.
 * User: vet
 * Date: 23.03.17
 * Time: 21:36
 */

trait Set_Get
{
    public function setA($a)
    {
        $this->a = $a;
        return $this;
    }

    public function setB($b)
    {
        $this->b = $b;
        return $this;
    }

    public function setR($r)
    {
        $this->r = $r;
        return $this;
    }

    public function setTA($ta)
    {
        $this->ta = $ta;
        return $this;
    }

    public function setTH($th)
    {
        $this->th = $th;
        return $this;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function getR()
    {
        return $this->r;
    }

    public function getTA()
    {
        return $this->ta;
    }

    public function getTH()
    {
        return $this->th;
    }
}