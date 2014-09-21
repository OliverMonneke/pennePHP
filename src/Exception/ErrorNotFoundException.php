<?php

/**
 * Exception if error code does not exist
 */
namespace Codersquad\Pennephp\Exception;

/**
 * Class ErrorNotFoundException
 *
 * @package Codersquad\Pennephp\Exception
 * @author Oliver Monneke <oliver@codersquad.de>
 * @version 1.0
 */
class ErrorNotFoundException extends Exception
{
    /**
     * Error code
     *
     * @var int
     */
    protected $errorCode = 3;
}
