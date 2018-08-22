<?php


namespace Xervice\Console\Business;


use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Xervice\Core\Business\Model\Facade\AbstractFacade;

/**
 * @method \Xervice\Console\Business\ConsoleBusinessFactory getFactory()
 */
class ConsoleFacade extends AbstractFacade
{
    /**
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @throws \Exception
     */
    public function runApplication(InputInterface $input = null, OutputInterface $output = null): void
    {
        $this->getFactory()->createApplication()->run($input, $output);
    }
}
