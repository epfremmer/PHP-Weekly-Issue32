<?php
/**
 * File index.php
 *
 * @author Edward Pfremmer <epfremme@nerdery.com>
 */

use Epfremme\Collection\Collection;
use PHPWeekly\Entity\Box;
use PHPWeekly\Factory\BoxFactory;
use PHPWeekly\Service\WrappingPaperService;

require_once 'vendor/autoload.php';

$boxes = file('./data/boxes.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$boxFactory = new BoxFactory();
$boxCollection = new Collection($boxes);
$wrappingService = new WrappingPaperService();

$boxCollection = $boxCollection->map(function($dimensions) use ($boxFactory) {
    return $boxFactory->make($dimensions);
});

$wrappingPaper = $boxCollection->reduce(function($result, Box $box) use ($wrappingService) {
    return $result + $wrappingService->calculateWrappingPaper($box);
});

echo sprintf('Total Wrapping Paper Needed: %s', $wrappingPaper) . PHP_EOL;
