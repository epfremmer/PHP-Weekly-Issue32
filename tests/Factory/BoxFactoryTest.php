<?php
/**
 * File BoxFactoryTest.php
 *
 * @author Edward Pfremmer <epfremme@nerdery.com>
 */
namespace PHPWeekly\Tests\BoxFactoryTest;

use PHPWeekly\Entity\Box;
use PHPWeekly\Factory\BoxFactory;

/**
 * Class BoxFactoryTest
 *
 * @package PHPWeekly\Tests\BoxFactoryTest
 */
class BoxFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testConstruct()
    {
        $factory = new BoxFactory();

        $this->assertAttributeEquals(BoxFactory::DEFAULT_DELIMINATOR, 'deliminator', $factory);
    }

    public function testConstructWithArgs()
    {
        $factory = new BoxFactory('-');

        $this->assertAttributeEquals('-', 'deliminator', $factory);
    }

    public function testMake()
    {
        $factory = new BoxFactory();
        $box = $factory->make('5x6x7');

        $this->assertInstanceOf(Box::class, $box);
        $this->assertAttributeEquals(5, 'length', $box);
        $this->assertAttributeEquals(6, 'width', $box);
        $this->assertAttributeEquals(7, 'height', $box);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testMakeException()
    {
        $factory = new BoxFactory();

        $factory->make('5x6');
    }
}
