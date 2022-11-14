<?php

class Speedometer
{
    public const CONVERSION =  1.609344;

    public static function convertMilesToKm(int $miles): string
    {
        $km = $miles * SELF::CONVERSION;
        return "$miles miles =" . number_format($km, 2, ",") . "\n km";
    }

    public static function convertKmToMiles(int $km): string
    {
        $miles = $km / SELF::CONVERSION;
        return "$km km =" . number_format($miles, 2, ",") . "\n miles";
    }
}
