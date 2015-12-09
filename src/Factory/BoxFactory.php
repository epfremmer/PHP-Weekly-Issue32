<?php
/**
 * File BoxFactory.php
 *
 * @author Edward Pfremmer <epfremme@nerdery.com>
 */
namespace PHPWeekly\Factory;

use PHPWeekly\Entity\Box;

/**
 * Class BoxFactory
 *
 * @package PHPWeekly\Factory
 */
class BoxFactory
{
    const DEFAULT_DELIMINATOR = 'x';
    /**
     * @var string
     */
    private $deliminator;

    /**
     * BoxFactory constructor
     *
     * @param string $deliminator
     */
    public function __construct($deliminator = self::DEFAULT_DELIMINATOR)
    {
        $this->deliminator = $deliminator;
    }

    /**
     * Return new Box entity from box dimensions string
     *
     * @param string $dimensions
     * @return Box
     */
    public function make($dimensions)
    {
        $dims = explode('x', $dimensions);

        if (!isset($dims[0], $dims[1], $dims[2])) {
            throw new \InvalidArgumentException(
                sprintf('Missing expected dimensions, given %s', implode('x', $dims))
            );
        }

        return new Box($dims[0], $dims[1], $dims[2]);
    }
}
