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
    protected static $timer = 0;

    /**
     *
     */
    public static function start()
    {
        self::$timer = microtime();
    }

    /**
     * @return int
     */
    public static function getElapsedTime()
    {
        return self::$timer;
    }
}
