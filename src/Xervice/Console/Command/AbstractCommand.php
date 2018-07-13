<?php


namespace Xervice\Console\Command;


use Symfony\Component\Console\Command\Command;
use Xervice\Core\Locator\Dynamic\DynamicLocator;

abstract class AbstractCommand extends Command
{
    use DynamicLocator;
}
