<?php
namespace Aura\Uri;

/**
 * Test class for Path.
 * Generated by PHPUnit on 2012-07-21 at 15:45:14.
 */
class PathTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Path
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Path;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @covers Aura\Uri\Path::__toString
     * @todo Implement test__toString().
     */
    public function test__toString()
    {
        $path = '/foo/bar/baz/dib.gir';
        $this->object->setFromString($path);
        $actual = $this->object->__toString();
        $this->assertSame($path, $actual);
    }

    /**
     * @covers Aura\Uri\Path::setFromString
     * @todo Implement testSetFromString().
     */
    public function testSetFromString()
    {
        $path = '/foo/bar/baz/dib.gir';
        $this->object->setFromString($path);
        $actual = $this->object->getFormat();
        $expected = 'gir';
        $this->assertSame($expected, $actual);
        $actual = $this->object->__toString();
        $this->assertSame($path, $actual);
    }

    /**
     * @covers Aura\Uri\Path::setFormat
     * @todo Implement testSetFormat().
     */
    public function testSetFormat()
    {
        $format = 'json';
        $this->object->setFormat($format);
        $actual = $this->object->getFormat($format);
        $this->assertSame($format, $actual);
    }

    /**
     * @covers Aura\Uri\Path::getFormat
     * @todo Implement testGetFormat().
     */
    public function testGetFormat()
    {
        $path = '/foo/bar/baz/dib.xml';
        $this->object->setFromString($path);
        $actual = $this->object->getFormat();
        $expected = 'xml';
        $this->assertSame($expected, $actual);
    }
}
