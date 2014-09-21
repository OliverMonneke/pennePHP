<?php

/**
 * Exception if file does not exist
 */
namespace Codersquad\Pennephp\Exception;

/**
 * Class FileNotFoundException
 *
 * @package Codersquad\Pennephp\Exception
 * @author Oliver Monneke <oliver@codersquad.de>
 * @version 1.0
 */
class FileNotFoundException extends Exception
{
    /**
     * Error code
     *
     * @var int
     */
    protected $errorCode = 2;
}
