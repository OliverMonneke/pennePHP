<?php

/**
 * Timer management
 */
namespace Codersquad\Pennephp\Time;

/**
 * Class Timer
 * @package Codersquad\Pennephp\Time
 * @author Oliver Monneke <oliver@codersquad.de>
 * @version 1.0
 */
class Timer
{
    /**
     * @var int
     */
    protected static $startTime = 0;

    /**
     * @var int
     */
    protected static $stopTime = 0;

    /**
     *
     */
    public static function start()
    {
        self::$startTime = microtime();
    }

    /**
     *
     */
    public static function stop()
    {
        self::$stopTime = microtime();
    }

    /**
     * @return int
     */
    public static function getElapsedTime()
    {
        return self::$stopTime - self::$startTime;
    }
}
