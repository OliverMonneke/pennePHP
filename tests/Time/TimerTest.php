<?php

namespace Codersquad\Pennephp\Tests\Time;

use Codersquad\Pennephp\Time\Timer;
use PHPUnit_Framework_TestCase;

/**
 * Class TimerTest
 * @package Codersquad\Pennephp\Tests\Time
 */
class TimerTest extends PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testStart()
    {
        Timer::start();
        $this->assertLessThan(0, Timer::getElapsedTime());
    }

    /**
     *
     */
    public function testStop()
    {
        Timer::stop();
        $this->assertGreaterThan(0, Timer::getElapsedTime());
    }
}
