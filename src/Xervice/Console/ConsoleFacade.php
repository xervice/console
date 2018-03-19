<?php


namespace Xervice\Console;


use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Xervice\Core\Facade\AbstractFacade;

/**
 * @method \Xervice\Console\ConsoleFactory getFactory()
 */
class ConsoleFacade extends AbstractFacade
{
    /**
     * @throws \Exception
     */
    public function runApplication(InputInterface $input = null, OutputInterface $output = null)
    {
        $this->getFactory()->createApplication()->run($input, $output);
    }
}