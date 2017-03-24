<?php
/**
 * Created by PhpStorm.
 * User: vet
 * Date: 23.03.17
 * Time: 21:35
 */

/**
 * Это абстрактный класс.
 * Нельзя создать объект этого класса.
 * Можно лишь наследоваться от него.
 */

abstract class Shape
{
    protected $a = 0;//высота
    protected $b = 0;//ширина
    protected $r = 0;//радиус
    protected $ta = 0;//основание треугольника
    protected $th = 0;//высота треугольника

    function __construct($a, $b, $r, $ta, $th)
    {
        $this->a = $a;
        $this->b = $b;
        $this->r = $r;
        $this->ta = $ta;
        $this->th = $th;
    }

    /**
     * Это абстрактные методы.
     * Их нужно определить в дочерних классах.
     * */

    abstract protected function resultArea();
    abstract protected function setA($a);
    abstract protected function setB($b);
    abstract protected function setR($r);
    abstract protected function getA();
    abstract protected function getB();
    abstract protected function getR();

    protected function resultPerimeter()
    {
        return false;
    }

    protected function resultDiameter()
    {
        return false;
    }

    /**
     * Это финальные методы.
     * Их нельзя переопределить в дочернем классе.
     */

    final public function getResultArea()
    {
        return $this->resultArea();
    }

    final public function getResultPerimeter()
    {
        return $this->resultPerimeter();
    }

    final public function getResultDiameter()
    {
        return $this->resultDiameter();
    }
}