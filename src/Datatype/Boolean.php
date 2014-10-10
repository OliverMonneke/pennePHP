<?php

/**
 * Boolean management
 */
namespace Codersquad\Pennephp\Datatype;

/**
 * Class Boolean
 *
 * @package Codersquad\Pennephp\Datatype
 * @author Oliver Monneke <oliver@codersquad.de>
 * @version 1.0
 */
class Boolean implements IDatatype
{
    /**
     * @var array
     */
    protected static $_translationMapping = [
        'true' => true,
        'false' => false,
        'yes' => true,
        'no' => false,
        '0' => false,
        '1' => true
    ];

    /**
     * Check if expression is valid
     *
     * @param mixed $expression The expression to check
     *
     * @return bool
     */
    public static function isValid($expression, $translate = false)
    {
        if ($translate) {
            $expression = self::translate($expression);
        }

        return is_bool($expression);
    }

    /**
     * @param $expression
     * @return bool
     */
    public static function translate($expression)
    {
        if ((String::isValid($expression) ||
                Number::isValid($expression)) &&
            Collection::existsKey(self::$_translationMapping, $expression)
        ) {
            $expression = self::$_translationMapping[$expression];
        }

        return $expression;
    }
}
