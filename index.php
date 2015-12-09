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

$boxes = explode(PHP_EOL, file_get_contents('./data/boxes.txt'));

$boxFactory = new BoxFactory();
$boxCollection = new Collection(array_filter($boxes));
$wrappingService = new WrappingPaperService();

$boxCollection = $boxCollection->map(function($dimensions) use ($boxFactory) {
    return $boxFactory->make($dimensions);
});

$wrappingPaper = $boxCollection->reduce(function($result, Box $box) use ($wrappingService) {
    return $result + $wrappingService->calculateWrappingPaper($box);
});

echo sprintf('Total Wrapping Paper Needed: %s', $wrappingPaper) . PHP_EOL;
