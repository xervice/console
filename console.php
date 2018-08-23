<?php
declare(strict_types=1);


use Xervice\Core\Business\Model\Locator\Locator;

require __DIR__ . '/autoload.php';

Locator::getInstance()->console()->facade()->runApplication();