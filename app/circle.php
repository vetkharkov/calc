<?php

/**
 * Created by PhpStorm.
 * User: vet
 * Date: 19.03.17
 * Time: 20:14
 */
class Circle
{
    private static $radius;

    private static function SetRadius($rad)
    {
        self::$radius = $rad;
    }

    public function Area($r)
    {
        self::SetRadius($r);
        $rad = self::$radius;
        return M_PI * ($rad * $rad);
    }

    public static function Perimeter($r)
    {
        self::SetRadius($r);
        return 2 * M_PI * self::$radius;
    }

    public static function Diameter($r)
    {
        self::SetRadius($r);
        return 2 * self::$radius;
    }
}





