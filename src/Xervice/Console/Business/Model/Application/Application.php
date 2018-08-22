<?php


namespace Xervice\Console\Business\Model\Application;


use Xervice\Console\Business\Model\Command\CommandCollection;

class Application extends \Symfony\Component\Console\Application implements ApplicationInterface
{
    /**
     * @param \Xervice\Console\Business\Model\Command\CommandCollection $commandCollection
     */
    public function addCommandCollection(CommandCollection $commandCollection): void
    {
        foreach ($commandCollection as $command) {
            $this->add($command);
        }
    }
}
