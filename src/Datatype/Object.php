<?php

/**
 * Object handling
 */
namespace Codersquad\Pennephp\Datatype;

/**
 * Class Object
 *
 * @package Codersquad\Pennephp\Datatype
 * @author Oliver Monneke <oliver@codersquad.de>
 * @version 1.0
 */
class Object implements DatatypeInterface
{
    /**
     * Check if it is an object
     *
     * @param object $object The object
     *
     * @return bool
     */
    public static function isValid($object)
    {
        return is_object($object);
    }

    /**
     * Convert object to array
     *
     * @param object $object The object
     *
     * @return array
     */
    public static function toArray($object)
    {
        if (!self::isValid($object)) {
            return false;
        }

        return (array) $object;
    }
}
