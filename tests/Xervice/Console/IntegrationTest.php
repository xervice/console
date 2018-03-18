<?php
namespace XerviceTest\Console;

use Symfony\Component\Console\Input\StringInput;
use Xervice\Core\Locator\Dynamic\DynamicLocator;

class IntegrationTest extends \Codeception\Test\Unit
{
    use DynamicLocator;

    /**
     * @var \XerviceTest\XerviceTester
     */
    protected $tester;

    /**
     * @group Xervice
     * @group Console
     * @group Integration
     */
    public function testConsole()
    {
        $this->assertEquals(
            'This is a test',
            $this->tester->runCommand('console:test')
        );
    }
}