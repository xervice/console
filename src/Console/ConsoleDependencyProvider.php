<?php


namespace Xervice\Console;


use Xervice\Console\Command\CommandCollection;
use Xervice\Core\Dependency\DependencyProviderInterface;
use Xervice\Core\Dependency\Provider\AbstractProvider;

class ConsoleDependencyProvider extends AbstractProvider
{
    const COMMAND_COLLECTION = 'command.collection';

    /**
     * @param \Xervice\Core\Dependency\DependencyProviderInterface $container
     */
    public function handleDependencies(DependencyProviderInterface $container)
    {
        $container[self::COMMAND_COLLECTION] = function (DependencyProviderInterface $container) {
            return new CommandCollection(
                $this->getCommandList()
            );
        };
    }

    /**
     * @return array
     */
    protected function getCommandList() : array
    {
        return [];
    }

}