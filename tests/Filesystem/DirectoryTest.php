<?php

namespace Codersquad\Pennephp\Tests\Filesystem;

use Codersquad\Pennephp\Filesystem\Directory;
use PHPUnit_Framework_TestCase;

/**
 * Class DirectoryTest
 * @package Codersquad\Pennephp\Tests\Filesystem
 */
class DirectoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Directory
     */
    private $_directory;

    /**
     *
     */
    public function testGetArray()
    {
        $this->_directory->setRecursive(true);
        $this->_directory->setArray();

        $this->assertInternalType('array', $this->_directory->getArray());
    }

    /**
     *
     */
    public function testGetStartPath()
    {
        $this->assertEquals(__DIR__ . '/../resources', $this->_directory->getStartPath());
    }


    /**
     *
     */
    protected function setUp()
    {
        $this->_directory = new Directory();
        $this->_directory->setStartPath(__DIR__ . '/../resources');
    }


}
 