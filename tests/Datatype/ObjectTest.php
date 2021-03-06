<?php

namespace Codersquad\Pennephp\Tests\Datatype;

use Codersquad\Pennephp\Datatype\Object;
use stdClass;

/**
 * Class ObjectTest
 * @package Datatype
 */
class ObjectTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var
     */
    private $_object;

    /**
     *
     */
    public function testToArrayWithWrongDatatype()
    {
        /** @noinspection PhpParamsInspection */
        $this->assertFalse(Object::toArray('abc'));
    }

    /**
     *
     */
    public function testIsValid()
    {
        $this->assertInternalType('bool', Object::isValid(['a', 'b', 'c']));
        $this->assertInternalType('bool', Object::isValid(''));
        $this->assertInternalType('bool', Object::isValid(NULL));
        /** @noinspection PhpParamsInspection */
        $this->assertInternalType('bool', Object::isValid(new stdClass()));
        $this->assertFalse(Object::isValid(['a', 'b', 'c']));
        $this->assertFalse(Object::isValid('abc'));
        $this->assertFalse(Object::isValid(NULL));
        /** @noinspection PhpParamsInspection */
        $this->assertTrue(Object::isValid(new stdClass()));
    }

    /**
     *
     */
    public function testToArray()
    {
        $this->assertEquals(['string1' => 'abc'], Object::toArray($this->_object));
    }

    /**
     *
     */
    protected function setUp()
    {
        $this->_object = new stdClass();
        $this->_object->string1 = 'abc';
    }
}
