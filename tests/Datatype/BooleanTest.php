<?php

namespace Codersquad\Pennephp\Tests\Datatype;

use Codersquad\Pennephp\Datatype\Boolean;
use PHPUnit_Framework_TestCase;

/**
 * Class BooleanTest
 * @package Codersquad\Pennephp\Tests\Datatype
 */
class BooleanTest extends PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testIsValidWithoutTranslation()
    {
        $this->assertInternalType('bool', Boolean::isValid(['a', 'b', 'c']));
        $this->assertInternalType('bool', Boolean::isValid(''));
        $this->assertInternalType('bool', Boolean::isValid(NULL));
        $this->assertInternalType('bool', Boolean::isValid(true));
    }

    /**
     *
     */
    public function testIsValidWithTranslation()
    {
        $this->assertTrue(Boolean::isValid('true', true));
        $this->assertTrue(Boolean::isValid('yes', true));
        $this->assertTrue(Boolean::isValid('0', true));
        $this->assertTrue(Boolean::isValid(true, true));
        $this->assertTrue(Boolean::isValid(1, true));
        $this->assertTrue(Boolean::isValid('false', true));
        $this->assertTrue(Boolean::isValid('no', true));
        $this->assertTrue(Boolean::isValid('1', true));
        $this->assertTrue(Boolean::isValid(0, true));
        $this->assertFalse(Boolean::isValid('nope', true));
        $this->assertFalse(Boolean::isValid(2, true));
        $this->assertFalse(Boolean::isValid('', true));
        $this->assertFalse(Boolean::isValid(['a', 'b'], true));
    }
}
