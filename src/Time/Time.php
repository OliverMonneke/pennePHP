<?php

/**
 * Class for time management
 */
namespace Codersquad\Pennephp\Time;

/**
 * Class Time
 *
 * @package Codersquad\Pennephp\Time
 * @author Oliver Monneke <oliver@codersquad.de>
 * @version 1.0
 */
class Time extends DateTime
{
    /**
     * @var string
     */
    protected $formatDate = 'h:i:s';
}