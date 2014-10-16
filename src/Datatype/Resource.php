<?php

/**
 * Resource handling
 */
namespace Codersquad\Pennephp\Datatype;

/**
 * Class Resource
 *
 * @package Codersquad\Pennephp\Datatype
 * @author Oliver Monneke <oliver@codersquad.de>
 * @version 1.0
 */
class Resource implements DatatypeInterface
{
    /**
     * Check if it is a resource
     *
     * @param resource $resource The resource
     *
     * @return bool
     */
    public static function isValid($resource)
    {
        return is_resource($resource);
    }

    /**
     * Check if resource is empty
     *
     * @param resource $resource The resource
     *
     * @return bool
     */
    public static function isEmpty($resource)
    {
        if (!self::isValid($resource) &&
            null !== $resource) {
            return false;
        }

        return String::isEmpty($resource);
    }

    /**
     * Check if resource is note empty
     *
     * @param resource $resource The resource
     *
     * @return bool
     */
    public static function isNotEmpty($resource)
    {
        if (!self::isValid($resource) &&
            null !== $resource) {
            return false;
        }

        return ($resource !== null && $resource !== '');
    }
}
