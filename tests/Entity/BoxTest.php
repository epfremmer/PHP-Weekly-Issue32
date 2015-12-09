<?php
/**
 * File BoxTest.php
 *
 * @author Edward Pfremmer <epfremme@nerdery.com>
 */
namespace PHPWeekly\Tests\Entity;

use PHPWeekly\Entity\Box;

/**
 * Class BoxTest
 *
 * @package PHPWeekly\Tests\Entity
 */
class BoxTest extends \PHPUnit_Framework_TestCase
{
    public function testConstruct()
    {
        $box = new Box();

        $this->assertAttributeEquals(1, 'length', $box);
        $this->assertAttributeEquals(1, 'width', $box);
        $this->assertAttributeEquals(1, 'height', $box);
    }

    public function testConstructWithArgs()
    {
        $box = new Box(5, 6, 7);

        $this->assertAttributeEquals(5, 'length', $box);
        $this->assertAttributeEquals(6, 'width', $box);
        $this->assertAttributeEquals(7, 'height', $box);
    }

    public function testSetLength()
    {
        $box = new Box();
        $box->setLength(5);

        $this->assertAttributeEquals(5, 'length', $box);
    }

    public function testGetLength()
    {
        $box = new Box(5);
        $length = $box->getLength();

        $this->assertEquals(5, $length);
    }

    public function testSetWidth()
    {
        $box = new Box();
        $box->setWidth(5);

        $this->assertAttributeEquals(5, 'width', $box);
    }

    public function testGetWidth()
    {
        $box = new Box(1, 5);
        $width = $box->getWidth();

        $this->assertEquals(5, $width);
    }

    public function testSetHeight()
    {
        $box = new Box();
        $box->setHeight(5);

        $this->assertAttributeEquals(5, 'height', $box);
    }

    public function testGetHeight()
    {
        $box = new Box(1, 1, 5);
        $height = $box->getHeight();

        $this->assertEquals(5, $height);
    }
}
