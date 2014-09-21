<?php

/**
 * Exception if division by zero
 */
namespace Codersquad\Pennephp\Exception;

/**
 * Exception DivisionByZero
 *
 * @package Codersquad\Pennephp\Exception
 * @author Oliver Monneke <oliver@codersquad.de>
 * @version 1.0
 */
class DivisionByZeroException extends Exception
{
    /**
     * Error code
     *
     * @var int
     */
    protected $errorCode = 7;
}
