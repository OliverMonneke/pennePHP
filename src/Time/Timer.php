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
     * @var double|string
     */
    protected static $start = 0;

    /**
     * @var double|string
     */
    protected static $stop = 0;

    /**
     *
     */
    public static function start()
    {
        self::$start = microtime();
    }

    /**
     *
     */
    public static function stop()
    {
        self::$stop = microtime();
    }

    /**
     * @return int
     */
    public static function getElapsedTime()
    {
        return self::$stop - self::$start;
    }
}
