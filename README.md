Xervice: Console
=================

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/xervice/console/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/xervice/console/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/xervice/console/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/xervice/console/?branch=master)

Console service based on symfony console for Xervice.


Installation
----------------
```
composer require xervice/console
```


Configuration
-----------------
There is nothing to configure. But to add your commands, you have to extend the console module and overwrite "getCommandList" method in the dependency provider.

```php
<?php

namespace App\Console;

use Xervice\Console\ConsoleDependencyProvider as XerviceConsoleDependencyProvider;

class ConsoleDependencyProvider extends XerviceConsoleDependencyProvider
{
    /**
     * @return array
     */
    protected function getCommandList(): array
    {
        return [
            new MyCommand()
        ];
    }
}

```

Usage
-------
```
vendor/bin/xervice <command>
```

New Command
--------------
```php
<?php

namespace App\MyModule\Communication\Console\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Xervice\Console\Business\Model\Command\AbstractCommand;

/**
 * @method \App\MyModule\Business\MyModuleFacade getFacade()
 * @method \App\MyModule\Communication\MyModuleCommunicationFactory getFactory()
 */
class MyCommand extends AbstractCommand
{
    /**
     * @throws \Symfony\Component\Console\Exception\InvalidArgumentException
     */
    protected function configure(): void
    {
        $this
            ->setName('mymodule:mycommand')
            ->setDescription('Command description');
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return int|void
     * @throws \Core\Locator\Dynamic\ServiceNotParseable
     */
    public function run(InputInterface $input, OutputInterface $output)
    {
        $this->getFacade()->runMyCommand($output);
    }

}
```
