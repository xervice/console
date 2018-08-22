<?php

namespace Xervice\Console\Business\Model\Application;

use Xervice\Console\Business\Model\Command\CommandCollection;

interface ApplicationInterface
{
    /**
     * @param \Xervice\Console\Business\Model\Command\CommandCollection $commandCollection
     */
    public function addCommandCollection(CommandCollection $commandCollection);
}
