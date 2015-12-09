<?php
/**
 * File WrappingPaperService.php
 *
 * @author Edward Pfremmer <epfremme@nerdery.com>
 */
namespace PHPWeekly\Service;

use PHPWeekly\Entity\Box;

/**
 * Class WrappingPaperService
 *
 * @package PHPWeekly\Service
 */
class WrappingPaperService
{
    /**
     * Calculate the required wrapping paper area for given box plus
     * the smallest side extra used for overlap
     *
     * @param Box $box
     * @return int|float
     */
    public function calculateWrappingPaper(Box $box)
    {
        $top = $box->getLength() * $box->getWidth();
        $side = $box->getWidth() * $box->getHeight();
        $front = $box->getHeight() * $box->getLength();

        $extra = min($top, $side, $front);

        return (2 * $top) + (2 * $side) + (2 * $front) + $extra;
    }
}
