<?php


namespace Xervice\Console;


use Xervice\Console\Application\Application;
use Xervice\Core\Factory\AbstractFactory;

class ConsoleFactory extends AbstractFactory
{
    /**
     * @return \Xervice\Console\Application\Application
     */
    public function createApplication()
    {
        $app = new Application();
        $app->addCommandCollection($this->getCommandCollection());
        return $app;
    }

    /**
     * @return \Xervice\Console\Command\CommandCollection
     */
    public function getCommandCollection()
    {
        return $this->getDependency(ConsoleDependencyProvider::COMMAND_COLLECTION);
    }
}