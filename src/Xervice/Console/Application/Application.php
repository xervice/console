<?php


namespace Xervice\Console\Application;


use Xervice\Console\Command\CommandCollection;

class Application extends \Symfony\Component\Console\Application implements ApplicationInterface
{
    /**
     * @param \Xervice\Console\Command\CommandCollection $commandCollection
     */
    public function addCommandCollection(CommandCollection $commandCollection)
    {
        foreach ($commandCollection as $command) {
            $this->add($command);
        }
    }

}