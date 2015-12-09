<?php
/**
 * File WrappingPaperServiceTest.php
 *
 * @author Edward Pfremmer <epfremme@nerdery.com>
 */
namespace PHPWeekly\Tests\Service;

use PHPWeekly\Entity\Box;
use PHPWeekly\Service\WrappingPaperService;

/**
 * Class WrappingPaperServiceTest
 *
 * @package PHPWeekly\Tests\Service
 */
class WrappingPaperServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var WrappingPaperService
     */
    private $wrappingPaperService;

    /** {@inheritdoc} */
    public function setup()
    {
        parent::setup();

        $this->wrappingPaperService = new WrappingPaperService();
    }

    public function testCalculateWrappingPaper()
    {
        $box = new Box(5, 6, 7);

        $wrappingPaper = $this->wrappingPaperService->calculateWrappingPaper($box);

        $this->assertEquals(214 + 30, $wrappingPaper);
    }
}
