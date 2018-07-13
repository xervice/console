<?php


namespace Xervice\Console;


use Xervice\Console\Application\Application;
use Xervice\Console\Command\CommandCollection;
use Xervice\Core\Factory\AbstractFactory;

class ConsoleFactory extends AbstractFactory
{
    /**
     * @return \Xervice\Console\Application\Application
     */
    public function createApplication(): Application
    {
        $app = new Application();
        $app->addCommandCollection($this->getCommandCollection());
        return $app;
    }

    /**
     * @return \Xervice\Console\Command\CommandCollection
     */
    public function getCommandCollection(): CommandCollection
    {
        return $this->getDependency(ConsoleDependencyProvider::COMMAND_COLLECTION);
    }
}
