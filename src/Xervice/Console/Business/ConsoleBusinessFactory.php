<?php


namespace Xervice\Console\Business;


use Xervice\Console\Business\Model\Application\Application;
use Xervice\Console\Business\Model\Command\CommandCollection;
use Xervice\Console\ConsoleDependencyProvider;
use Xervice\Core\Business\Model\Factory\AbstractBusinessFactory;

class ConsoleBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \Xervice\Console\Business\Model\Application\Application
     */
    public function createApplication(): Application
    {
        $app = new Application();
        $app->addCommandCollection($this->getCommandCollection());
        return $app;
    }

    /**
     * @return \Xervice\Console\Business\Model\Command\CommandCollection
     */
    public function getCommandCollection(): CommandCollection
    {
        return $this->getDependency(ConsoleDependencyProvider::COMMAND_COLLECTION);
    }
}
