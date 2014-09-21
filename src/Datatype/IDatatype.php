<?php

/**
 * Interface for data types
 */
namespace Codersquad\Pennephp\Datatype;

/**
 * Interface IDatatype
 *
 * @package Codersquad\Pennephp\Datatype
 * @author Oliver Monneke <oliver@codersquad.de>
 * @version 1.0
 */
interface IDatatype
{
    /**
     * Check if expression is valid
     *
     * @param mixed $expression The expression to check
     *
     * @return bool
     */
    public static function isValid($expression);
}
