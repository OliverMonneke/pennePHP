<?php

/**
 * Exception if controller does not exist
 */
namespace Codersquad\Pennephp\Exception;

/**
 * Class ControllerNotFoundException
 *
 * @package Codersquad\Pennephp\Exception
 * @author Oliver Monneke <oliver@codersquad.de>
 * @version 1.0
 */
class ControllerNotFoundException extends Exception
{
    /**
     * Error code
     *
     * @var int
     */
    protected $errorCode = 5;
}
