<?php
namespace XerviceTest\Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Console\Output\StreamOutput;
use Xervice\Console\ConsoleFactory;
use Xervice\Core\Locator\Dynamic\DynamicLocator;
use XerviceTest\Console\Helper\Helper;

class Xervice extends \Codeception\Module
{
    public function runCommand($command)
    {
        $application = (new Helper())->getFactory()->createApplication();
        $application->setAutoExit(false);

        $fp = tmpfile();
        $input = new StringInput($command);
        $output = new StreamOutput($fp);

        $application->run($input, $output);

        fseek($fp, 0);
        $output = '';
        while (!feof($fp)) {
            $output = fread($fp, 4096);
        }
        fclose($fp);

        return $output;
    }
}
