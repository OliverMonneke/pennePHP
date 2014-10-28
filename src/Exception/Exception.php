<?php

/**
 * Abstract class for exceptions
 */
namespace Codersquad\Pennephp\Exception;

use Codersquad\Pennephp\Datatype\Collection;

/**
 * Class Exception
 *
 * @package Codersquad\Pennephp\Exception
 * @author Oliver Monneke <oliver@codersquad.de>
 * @version 1.0
 */
abstract class Exception extends \Exception
{
    /**
     * Error code
     *
     * @var int
     */
    protected $errorCode = 0;

    /**
     * Mapping error code => error message
     *
     * @var array
     */
    private static $errorCodes = [
        0 => 'Unknown error',
        1 => 'Class not found',
        2 => 'File not found',
        3 => 'Error code does not exist',
        4 => 'Directory not found',
        6 => 'Database not found',
        7 => 'Division by zero'
    ];

    /**
     * Default constructor
     *
     * @throws ErrorNotFoundException
     * @return \Codersquad\Pennephp\Exception\Exception
     */
    public function __construct()
    {
        if (!Collection::existsKey(self::$errorCodes, $this->errorCode)) {
            throw new ErrorNotFoundException;
        }

        $errorMessage = [];
        $errorMessage[] = 'Error '.$this->errorCode.' occured: '.self::$errorCodes[$this->errorCode];

        $this->message = Collection::implode($errorMessage, '<br />');
    }
}
