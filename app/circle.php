<?php

/**
 * Created by PhpStorm.
 * User: vet
 * Date: 19.03.17
 * Time: 20:14
 */
class Circle
{
    public static $radius;

    public function Area()
    {
        $rad = self::$radius;
        return M_PI * ($rad * $rad);
    }

    public static function Perimeter()
    {
        return 2 * M_PI * self::$radius;
    }

    public static function Diameter()
    {
        return 2 * self::$radius;
    }
}





