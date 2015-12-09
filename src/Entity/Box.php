<?php
/**
 * File Box.php
 *
 * @author Edward Pfremmer <epfremme@nerdery.com>
 */
namespace PHPWeekly\Entity;

/**
 * Class Box
 *
 * @package PHPWeekly\Entity
 */
class Box
{
    /**
     * @var float
     */
    private $length;

    /**
     * @var float
     */
    private $width;

    /**
     * @var float
     */
    private $height;

    /**
     * Box constructor
     *
     * @param float $length
     * @param float $width
     * @param float $height
     */
    public function __construct($length = 1.0, $width = 1.0, $height = 1.0)
    {
        $this->width = (float) $width;
        $this->length = (float) $length;
        $this->height = (float) $height;
    }

    /**
     * @return float
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param float $length
     * @return Box
     */
    public function setLength($length)
    {
        $this->length = (float) $length;

        return $this;
    }

    /**
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param float $width
     * @return Box
     */
    public function setWidth($width)
    {
        $this->width = (float) $width;

        return $this;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param float $height
     * @return Box
     */
    public function setHeight($height)
    {
        $this->height = (float) $height;

        return $this;
    }
}
