<?php

/**
 * Exception if class does not exist
 */
namespace Codersquad\Pennephp\Exception;

/**
 * Exception ClassNotFound
 *
 * @package Codersquad\Pennephp\Exception
 * @author Oliver Monneke <oliver@codersquad.de>
 * @version 1.0
 */
class ClassNotFoundException extends Exception
{
    /**
     * Error code
     *
     * @var int
     */
    protected $errorCode = 1;
}
