<?php

/**
 * Exception if directory does not exist
 */
namespace Codersquad\Pennephp\Exception;

/**
 * Class DirectoryNotFoundException
 *
 * @package Codersquad\Pennephp\Exception
 * @author Oliver Monneke <oliver@codersquad.de>
 * @version 1.0
 */
class DirectoryNotFoundException extends Exception
{
    /**
     * Error code
     *
     * @var int
     */
    protected $errorCode = 4;
}
