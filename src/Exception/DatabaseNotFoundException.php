<?php

/**
 * Exception if database does not exist
 */
namespace Codersquad\Pennephp\Exception;

/**
 * Class DatabaseNotFoundException
 *
 * @package Codersquad\Pennephp\Exception
 * @author Oliver Monneke <oliver@codersquad.de>
 * @version 1.0
 */
class DatabaseNotFoundException extends Exception
{
    /**
     * Error code
     *
     * @var int
     */
    protected $errorCode = 6;
}
