<?php


namespace Xervice\Console;


use Xervice\Console\Business\Model\Command\CommandCollection;
use Xervice\Core\Business\Model\Dependency\DependencyContainerInterface;
use Xervice\Core\Business\Model\Dependency\Provider\AbstractDependencyProvider;

class ConsoleDependencyProvider extends AbstractDependencyProvider
{
    public const COMMAND_COLLECTION = 'command.collection';

    /**
     * @param \Xervice\Core\Business\Model\Dependency\DependencyContainerInterface $container
     *
     * @return \Xervice\Core\Business\Model\Dependency\DependencyContainerInterface
     */
    public function handleDependencies(DependencyContainerInterface $container): DependencyContainerInterface
    {
        $container[self::COMMAND_COLLECTION] = function () {
            return new CommandCollection(
                $this->getCommandList()
            );
        };

        return $container;
    }

    /**
     * @return array
     */
    protected function getCommandList() : array
    {
        return [];
    }
}
