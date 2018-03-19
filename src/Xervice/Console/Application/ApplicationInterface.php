<?php

namespace Xervice\Console\Application;

use Xervice\Console\Command\CommandCollection;

interface ApplicationInterface
{
    /**
     * @param \Xervice\Console\Command\CommandCollection $commandCollection
     */
    public function addCommandCollection(CommandCollection $commandCollection);
}