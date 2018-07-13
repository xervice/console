<?php


namespace Xervice\Console;


use Xervice\Console\Command\CommandCollection;
use Xervice\Core\Dependency\DependencyProviderInterface;
use Xervice\Core\Dependency\Provider\AbstractProvider;

class ConsoleDependencyProvider extends AbstractProvider
{
    public const COMMAND_COLLECTION = 'command.collection';

    /**
     * @param \Xervice\Core\Dependency\DependencyProviderInterface $dependencyProvider
     */
    public function handleDependencies(DependencyProviderInterface $dependencyProvider): void
    {
        $dependencyProvider[self::COMMAND_COLLECTION] = function () {
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
