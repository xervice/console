<?php


namespace Xervice\Console\Business\Model\Command;


use Symfony\Component\Console\Command\Command;
use Xervice\Core\Business\Model\Locator\Dynamic\Business\DynamicBusinessLocator;

abstract class AbstractCommand extends Command
{
    use DynamicBusinessLocator;
}
